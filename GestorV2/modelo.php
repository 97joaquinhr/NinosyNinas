<?php
    function connect() {
        $mysql = mysqli_connect("niyni.tk","dev","1A2b3c4d5e","Niyni");
        $mysql->set_charset("utf8");
        return $mysql;
    }

    function disconnect($mysql) {
        mysqli_close($mysql);
    }

    function login($user, $passwd) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query="SELECT Username FROM usuario WHERE Username = ? AND Pswd = ?";
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("ss", $user, $passwd)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Get results
            $results = $statement->get_result();

            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                mysqli_free_result($results);
                disconnect($db);
                return true;
            }
            disconnect($db);
            return false;
        }
        return false;
    }


    function getPrivilegios($rol) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT DISTINCT Id_Privilegio FROM roles_privilegios WHERE Id_Rol="'.$rol.'"';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $privilegios = array();
            // cycle to explode every line of the results
            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                $privilegios[] = $fila['Id_Privilegio'];
            }
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return $privilegios;
        }
        return false;
    }

function getDonadores() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, Email, Validado FROM donadores WHERE Validado = 1 ORDER BY Nombre ASC LIMIT 10 ';
        $results = $db->query($query);
        $html = '';

        while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            $html .= '                   
                            <a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#donadorInfo" name="'.$fila["Email"].'">
                             <div class="media-body">
                              <div class="row">
                                <div class="col-sm">
                                    <strong>Nombre:</strong> '.$fila["Nombre"].' '." ".'  '.$fila["ApellidoPaterno"].' '." ".' '.$fila["ApellidoMaterno"].'
                                </div>
                                <div class="col-sm">
                                    <strong>Telefono:</strong> '.$fila["Telefono"].'
                                </div>
                                <div class="col-sm">
                                    <strong>Email</strong> '.$fila["Email"].'
                                </div>
                            </div>
                            <strong>Registrado desde: </strong> 12/12/1999 
                            </div> 
                            </a>';
        }

        echo $html.'</div></div></a>';
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return false;
}

function addDonador($email, $rfc,$nombre, $apellidoP, $apellidoM,$fechaN,$direccion,$telefono, $ocupacion,$validado, $mp,$observaciones,$cfdi){
    $db = connect();
    if ($db != NULL) {
        $query = 'INSERT INTO `donadores`(`Email`,`RFC`,`Nombre`, `ApellidoPaterno`,`ApellidoMaterno`,`FechadeNacimiento`, `Direccion`,`Telefono`,`Ocupacion`,`Validado`)
                      VALUES ("'.$email.'", "'.$rfc.'", "'.$nombre.'", "'.$apellidoP.'", "'.$apellidoM.'", "'.$fechaN.'","'.$direccion.'","'.$telefono.'","'.$ocupacion.'","'.$validado.'")';

        $query2 = 'INSERT INTO donadores_metodopago(`IdMetodo`, `Email`, `Fecha`, `Observaciones`)
                  VALUES("'.$mp.'", "'.$email.'","'.$fechaN.'", "'.$observaciones.'" )';

        $query3 = 'INSERT INTO donadores_usocfdi(`Email`,`IdCFDI`,`Fecha`)
                    VALUES("'.$email.'", "'.$cfdi.'", "'.$fechaN.'")';

        if (mysqli_query($db, $query)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }

        if (mysqli_query($db, $query2)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query2 . "<br>" . mysqli_error($db);
        }

        if (mysqli_query($db, $query3)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query3 . "<br>" . mysqli_error($db);
        }
        disconnect($db);
        return true;
    }
    return false;
}

function addRol($idRol, $Nombre){
        $db = connect();
        if($db != NULL){
            $query = 'INSERT INTO `rol`(`IdRol`, `Nombre`)
                      VALUES ("'.$idRol.'", "'.$Nombre.'")';

            if (mysqli_query($db, $query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($db);
            }

            disconnect($db);

            return true;
        }
        return false;
}
?>
