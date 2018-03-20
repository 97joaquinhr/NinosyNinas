<?php
    function connect() {
        $mysql = mysqli_connect("niyni.tk","dev","1A2b3c4d5e","Niyni");
        $mysql->set_charset("utf8");
        return $mysql;
    }

    function disconnect($mysql) {
        mysqli_close($mysql);
    }

    function login($email, $passwd) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query="SELECT email FROM usuario WHERE Email = ? AND Pswd = ?";
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("ss", $email, $passwd)) {
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

    function getNombre($email) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query="SELECT nombre FROM usuario WHERE Email = ?";
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("s", $email)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Get results
            $results = $statement->get_result();
            $nombre = "";
            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                if ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                    $nombre = $fila['nombre'];
                }
                mysqli_free_result($results);
                disconnect($db);
                return $nombre;
            }
            disconnect($db);
            return false;
        }
        return false;
    }

    function getRol($email) {
        $db = connect();
        if ($db != NULL) {
            // insert command specification
            $query="SELECT IdRol FROM usuario_rol WHERE Email = ?";
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("s", $email)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Get results
            $results = $statement->get_result();
            $rol = "";
            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                if ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                    $rol = $fila['IdRol'];
                }
                mysqli_free_result($results);
                disconnect($db);
                return $rol;
            }
            disconnect($db);
            return false;
        }
        return false;
    }


    function getFunciones($rol) {
        $db = connect();
        if ($db != NULL) {
            // insert command specification
            $query="SELECT DISTINCT idFuncion FROM rol_funcion WHERE idRol = ?";
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("s", $rol)) {
                die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Executing the statement
            if (!$statement->execute()) {
                die("Execution failed: (" . $statement->errno . ") " . $statement->error);
            }
            // Get results
            $results = $statement->get_result();
            $funciones = array();
            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                    $funciones[] = $fila['idFuncion'];
                }
                mysqli_free_result($results);
                disconnect($db);
                return $funciones;
            }
            disconnect($db);
            return false;
        }
        return false;
    }

function getDonadores() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, d.Email, Validado, dm.Fecha, Direccion, FechadeNacimiento, IdCFDI, RFC, Descripcion, Observaciones
                FROM donadores d, donadores_metodopago dm, donadores_usocfdi du, metodopago m
                WHERE d.Email=dm.Email 
                AND m.Idmetodo = dm.IdMetodo
                AND du.Email = d.Email
                AND Validado = 1 
                ORDER BY Nombre ASC 
                LIMIT 10 ';
        $results = $db->query($query);

        $html = '';

        while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            $html .= '                   
                            <a class="list-group-item list-group-item-action" data-toggle = "modal" data-target = "#donadorInfo" name="'.$fila["Email"].'" id="'.$fila["Email"].'" onclick="javascript:generateModal(\''.$fila["Email"].'\', \''.$fila["Nombre"].'\', \''.$fila["ApellidoPaterno"].'\', \''.$fila["ApellidoMaterno"].'\', \''.$fila["Telefono"].'\', \''.$fila["Direccion"].'\',\''.$fila["FechadeNacimiento"].'\',\''.$fila["IdCFDI"].'\',\''.$fila["RFC"].'\',\''.$fila["Descripcion"].'\',\''.$fila["Observaciones"].'\' )" >
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
                            <strong>Registrado desde: </strong>  '.$fila["Fecha"].'
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
function getDonadorInfo($email){
  $html = '<div id="donadorInfo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Juan Carlos Garzón Rincón</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row px-3">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <strong>Datos de Contacto</strong>
                                        <div class="card-body-icon-r">
                                            <i class="fas fa-id-card fa-fw"></i>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Correo</strong><span id="prev_email" class="card-text float-right">jgarzon@marhnos.com.mx</span></li>
                                        <li class="list-group-item"><strong>Dirección</strong><span class="card-text float-right">Calle Laureles #221, Colonia Jurica, 76060, Querétaro.</span></li>
                                        <li class="list-group-item"><strong>Teléfono</strong><span class="card-text float-right">+52 (442) 235 5641</span></li>
                                        <li class="list-group-item"><strong>Fecha de Nacimiento</strong><span class="card-text float-right">12/01/1950</span></li>
                                    </ul>
                                    <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center my-4 py-4">
                                <span>
                                    <button type="button" class="btn btn-primary btn-circle btn-xl shadow"><i class="fas fa-envelope"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header">UsoCFDI</div>
                            <div class="card-body">Registro de preferencias de donación</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>G03</strong><span class="card-text float-right">Alimentos</span></li>
                            </ul>
                            <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                        </div>
                        <div class="card mt-4">
                            <div class="card-header">Datos de Donación</div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><strong>RFC</strong><span class="card-text float-right">GARJ500112MP4</span></li>
                                <li class="list-group-item"><strong>Método de pago</strong><span class="badge badge-danger float-right">Tarjeta</span><span class="badge badge-primary mx-1 float-right">Transferencia</span></li>
                                <li class="list-group-item"><strong>Observaciones</strong><span class="card-text float-right">Blah blah blah...</span></li>
                            </ul>
                            <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button><!-- Hay que moverlo a la derecha -->
                <button type="button" class="btn btn-primary" onclick="edit()">Editar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
';

  echo $html;
    }

?>
