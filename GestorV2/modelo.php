<?php

function connect() {
    //$mysql = mysqli_connect("localhost","root","","ninos");
    $mysql = mysqli_connect("ninosyninas.org","ninosyninas1998","educando2006","Ninosyninas");
    $mysql->set_charset("utf8");
    return $mysql;
}

function disconnect($mysql) {
    mysqli_close($mysql);
}

function login($userid) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query="SELECT * FROM usuario WHERE id = ?";
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("s", $userid)) {
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


function signup($userid, $name, $email, $rol) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query="CALL signup(?, ?, ?, ?)";
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("ssss", $userid, $email, $name, $rol)) {
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

function deleteUser($userid) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query="CALL deleteUser(?)";
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("s", $userid)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Get results
        $results = $statement->get_result();

        mysqli_free_result($results);
        disconnect($db);
        return true;
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

function getRol($id) {
    $db = connect();
    if ($db != NULL) {
        // insert command specification
        $query="SELECT IdRol FROM usuario_rol WHERE id = ?";
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("s", $id)) {
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

        $query='SELECT Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, d.Email, Validado, dm.Fecha, Direccion, FechadeNacimiento, IdCFDI, RFC, Descripcion, Observaciones, color
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
                            <a class="list-group-item list-group-item-action" data-toggle = "modal" data-target = "#donadorInfo" name="'.$fila["Email"].'" id="'.$fila["Email"].'" onclick="javascript:generateModal(\''.$fila["Email"].'\', \''.$fila["Nombre"].'\', \''.$fila["ApellidoPaterno"].'\', \''.$fila["ApellidoMaterno"].'\', \''.$fila["Telefono"].'\', \''.$fila["Direccion"].'\',\''.$fila["FechadeNacimiento"].'\',\''.$fila["IdCFDI"].'\',\''.$fila["RFC"].'\',\''.$fila["Descripcion"].'\',\''.$fila["Observaciones"].'\',\''.$fila["color"].'\' )" >
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
                        </a>';
        }

        echo $html;
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return false;
}

function getDonadores2() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT DISTINCT Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, d.Email, Validado, dm.Fecha, Direccion, FechadeNacimiento, IdCFDI, RFC, Descripcion, Observaciones, color
                FROM donadores d, donadores_metodopago dm, donadores_usocfdi du, metodopago m
                WHERE d.Email=dm.Email
                AND m.Idmetodo = dm.IdMetodo
                AND du.Email = d.Email
                AND Validado = 1
                ORDER BY Nombre ASC ';

        $results = $db->query($query);
        $html = '';

        while($row = mysqli_fetch_array($results, MYSQLI_BOTH)){
            $html.= '
                 <tr  data-toggle = "modal" data-target = "#donadorInfo" name="'.$row["Email"].'" id="'.$row["Email"].'" onclick="javascript:setCurrentVars(\''.$row["Email"].'\', \''.$row["Nombre"].'\', \''.$row["ApellidoPaterno"].'\', \''.$row["ApellidoMaterno"].'\', \''.$row["Telefono"].'\', \''.$row["Direccion"].'\',\''.$row["FechadeNacimiento"].'\',\''.$row["IdCFDI"].'\',\''.$row["RFC"].'\',\''.$row["Descripcion"].'\',\''.$row["Observaciones"].'\',\''.$row["color"].'\' )">
                 <td>'. $row["Nombre"] .' '. $row["ApellidoPaterno"] .' '. $row["ApellidoMaterno"] .'</td>
                 <td>'. $row["Telefono"] .'</td>
                 <td>'. $row["Email"] .'</td>
                 <td>'. $row["Fecha"] .'</td>
                 </tr>';
        }
        echo $html;
        disconnect($db);
        return true;
    }
    return false;
}

function getDonadoresNV() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT DISTINCT Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, d.Email, Validado, dm.Fecha, Direccion, FechadeNacimiento, IdCFDI, RFC, Descripcion, Observaciones, color
                FROM donadores d, donadores_metodopago dm, donadores_usocfdi du, metodopago m
                WHERE d.Email=dm.Email 
                AND m.IdMetodo = dm.IdMetodo
                AND du.Email = d.Email
                AND Validado = 0
                ORDER BY Nombre ASC ';

        $results = $db->query($query);
        $html = '';

        while($row = mysqli_fetch_array($results, MYSQLI_BOTH)){
            $html.= '
                 <tr  data-toggle = "modal" data-target = "#donadorInfo" name="'.$row["Email"].'" id="'.$row["Email"].'" onclick="javascript:setCurrentVars(\''.$row["Email"].'\', \''.$row["Nombre"].'\', \''.$row["ApellidoPaterno"].'\', \''.$row["ApellidoMaterno"].'\', \''.$row["Telefono"].'\', \''.$row["Direccion"].'\',\''.$row["FechadeNacimiento"].'\',\''.$row["IdCFDI"].'\',\''.$row["RFC"].'\',\''.$row["Descripcion"].'\',\''.$row["Observaciones"].'\',\''.$row["color"].'\' )">
                 <td>'. $row["Nombre"] .' '. $row["ApellidoPaterno"] .' '. $row["ApellidoMaterno"] .'</td>
                 <td>'. $row["Telefono"] .'</td>
                 <td>'. $row["Email"] .'</td>
                 <td>'. $row["Fecha"] .'</td>
                 </tr>';
        }
        echo $html;
        disconnect($db);
        return true;
    }
    return false;
}

function addDonador($email, $rfc,$nombre, $apellidoP, $apellidoM,$fechaN,$direccion,$telefono, $ocupacion,$validado, $mp,$observaciones,$cfdi){
    $db = connect();
    if ($db != NULL) {
        //Deberiamos usar prepared staments pare evitar SQL Injection


        $query = 'INSERT INTO `donadores`(`Email`,`RFC`,`Nombre`, `ApellidoPaterno`,`ApellidoMaterno`,`FechadeNacimiento`, `Direccion`,`Telefono`,`Ocupacion`,`Validado`)
                      VALUES ("'.$email.'", "'.$rfc.'", "'.$nombre.'", "'.$apellidoP.'", "'.$apellidoM.'", "'.$fechaN.'","'.$direccion.'","'.$telefono.'","'.$ocupacion.'","'.$validado.'")';

        $query2 = 'INSERT INTO donadores_metodopago(`IdMetodo`, `Email`, `Fecha`, `Observaciones`)
                  VALUES("'.$mp.'", "'.$email.'","'.$fechaN.'", "'.$observaciones.'" )';

        $query3 = 'INSERT INTO donadores_usocfdi(`Email`,`IdCFDI`,`Fecha`)
                    VALUES("'.$email.'", "'.$cfdi.'", "'.$fechaN.'")';

        if (mysqli_query($db, $query)) {
            if (mysqli_query($db, $query2)) {
                if (mysqli_query($db, $query3)) {
                } else {
                    echo "Error: " . $query3 . "<br>" . mysqli_error($db);
                }
            } else {
                echo "Error: " . $query2 . "<br>" . mysqli_error($db);
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
        echo $validado;
//        echo "<script>alert('Registro exitoso');</script>";





        disconnect($db);
        return true;
    }
    return false;
}

function validarDonador($email)
{
    $db = connect();
    if ($db != NULL) {
        //Deberiamos usar prepared staments pare evitar SQL Injection

        $validado = 1;

        $query = 'UPDATE donadores
                       SET validado = "' . $validado . '"
                       WHERE email = "' . $email . '"
                       ';

        if (mysqli_query($db, $query)) {
            echo "Record 3 updated successfully";
        } else {
            echo "Error updating record 3: " . mysqli_error($db);
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


function getUsuarios() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT U.id, name, email, Nombre FROM usuario U, usuario_rol UR, rol R WHERE U.id = UR.id AND UR.IdRol = R.IdRol ORDER BY name ASC';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);
        disconnect($db);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class=''>";

                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td><a class='btn btn-danger text-white' data-toggle='modal' data-target='#usuarioInfo' onclick='deleteUserModal(\"".$row["id"]."\");'><i class='fas fa-trash-alt'></i></a></td>";

                echo "</tr>";
            }
        }
        return true;
    }
    return false;
}

function getRoles() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT IdRol, Nombre FROM rol ORDER BY IdRol ASC';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);
        disconnect($db);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<option value=\"" . $row["IdRol"] . "\">" . $row["Nombre"] . "</option>";
            }
        }
        return true;
    }
    return false;
}

function getUsuarios_graph() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT (DATE(Fecha)) as Fechag, COUNT(Email) as Emailg FROM donadores_usocfdi GROUP BY (DATE(Fecha))';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);


        $fechas = array();
        $n = array();

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $fechas[] = $row["Fechag"];
                $n[] = $row["Emailg"];
            }
        }
        disconnect($db);
        return array('labels' => $fechas, 'data' => $n);;
    }
    return false;
}

function getMetodos_graph() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Descripcion, COUNT(Email) as Emailg FROM donadores_metodopago D, metodopago M WHERE D.IdMetodo = M.IdMetodo GROUP BY Descripcion ORDER BY Descripcion';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);

        $fechas = array();
        $n = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $fechas[] = $row["Descripcion"];
                $n[] = $row["Emailg"];
            }
        }
        disconnect($db);
        $db = connect();
        if ($db != NULL) {
            $query='SELECT color FROM metodopago ORDER BY Descripcion';
            $sql = $db->query($query);
    
            $result = mysqli_query($db,$query);
            
            $color = array();
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $color[] = $row["color"];
                }
            }
            disconnect($db);
            return array('labels' => $fechas, 'data' => $n, 'colors' => $color);
        }
        return false;
    }
    return false;
}

function getMetodos() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT IdMetodo, Descripcion FROM metodopago';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<option value=\"".$row["IdMetodo"]."\">".$row["Descripcion"]."</option>";
            }
        }
        disconnect($db);
        return array('labels' => $fechas, 'data' => $n);;
    }
    return false;
}

function getUSOCFDI() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT IdCFDI, Nombre FROM usocfdi';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<option value=\"".$row["IdCFDI"]."\">".$row["IdCFDI"]." - ".$row["Nombre"]."</option>";
            }
        }
        disconnect($db);
        return array('labels' => $fechas, 'data' => $n);;
    }
    return false;
}


function getNoticiasGestor() {
    $db = connect();
    if ($db != NULL) {

        //Specification of the SQL query
        $query="SELECT idNoticia, titulo, imagen, cuerpo, cast(fecha as date) as 'date_cast' FROM noticias";
        // idNoticia titulo cuerpo imagen fecha

        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        
        // cycle to explode every line of the results
        $html = '<div class="card-deck">';
        $i = 1;
        while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            // Options: MYSQLI_NUM to use only numeric indexes
            // MYSQLI_ASSOC to use only name (string) indexes
            // MYSQLI_BOTH, to use both
            if ($i % 5 == 0) {
                $html .= "</div><div class=\"card-deck\">";
                $i = 1;
            }
            $html .=   "<div class=\"card mb-3\">
                            <div class=\"card-btn-group\">
                                <button onclick=\"modificarNoticia(".$fila["idNoticia"].",'".$fila["titulo"]."','".$fila["imagen"]."','".$fila["cuerpo"]."');\" class=\"card-btn btn btn-primary ml-auto\"><i class=\"fas fa-pencil-alt\"></i></button>
                                <button onclick=\"eliminarNoticia(".$fila["idNoticia"].",'".$fila["titulo"]."','".$fila["imagen"]."');\" class=\"card-btn btn btn-danger ml-auto\"><i class=\"fas fa-trash-alt\"></i></button>
                            </div>
                            <img class=\"card-img-top\" src=\"".$fila["imagen"]."\" alt=\"Image\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">".$fila["titulo"]."</h5>
                                <p class=\"card-text text-muted mr-auto\">Creada el día ".$fila["date_cast"]."</p>
                            </div>
                        </div>";
            $i++;
        }
        echo $html."</div>";
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return true;
}
function getNoticiasPagina() {
    $db = connect();
    if ($db != NULL) {

        //Specification of the SQL query
        $query="SELECT idNoticia, titulo, imagen, cuerpo, cast(fecha as date) as 'date_cast' FROM noticias";
        // idNoticia titulo cuerpo imagen fecha

        // Query execution; returns identifier of the result group
        $results = $db->query($query);
        
        // cycle to explode every line of the results
        $html = '<div class="card-columns">';
        $i = 1;
        while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
            // Options: MYSQLI_NUM to use only numeric indexes
            // MYSQLI_ASSOC to use only name (string) indexes
            // MYSQLI_BOTH, to use both
            // if ($i % 3 == 0) {
            //     $html .= "</div><div class=\"card-deck\">";
            //     $i = 1;
            // }
            $html .=   "<div class=\"card mb-3\">
                            <img class=\"card-img-top\" src=\"../GestorV2/".$fila["imagen"]."\" alt=\"Image\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">".$fila["titulo"]."</h5>
                                <p class=\"card-text text-muted mr-auto\">".$fila["date_cast"]."</p>
                                <button onclick=\"visualizarNoticia('".$fila["titulo"]."','".$fila["imagen"]."','".$fila["cuerpo"]."')\" class=\"btn btn-primary\">Leer más</button>
                            </div>
                        </div>";
            $i++;
        }
        echo $html."</div>";
        // it releases the associated results
        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return true;
}

function eliminarNoticia($id, $file) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query = 'DELETE FROM noticias WHERE idNoticia = ? AND imagen = ?';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("is", $id, $file)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        unlink($file);//no se elimina el thurl
        
        disconnect($db);
        return true;
    }
    return false;
}

function modificarNoticiaNoImagen($id, $titulo, $cuerpo) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query = 'UPDATE noticias SET titulo = ?, cuerpo = ? WHERE idNoticia = ?';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("ssi", $titulo, $cuerpo, $id)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        
        disconnect($db);
        return true;
    }
    return false;
}

function modificarNoticia($id, $titulo, $cuerpo, $imagen) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query = 'UPDATE noticias SET titulo = ?, cuerpo = ?, imagen = ? WHERE idNoticia = ?';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("sssi", $titulo, $cuerpo, $imagen, $id)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        
        disconnect($db);
        return true;
    }
    return false;
}

function getImagen($id) {
    $db = connect();
    if ($db != NULL) {
        $query = 'SELECT imagen FROM noticias WHERE idNoticia = ?';//ya quedo
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("i", $id)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }

        $result = $statement->get_result();
        if (mysqli_num_rows($result) > 0) {
            if($row = mysqli_fetch_assoc($result)) {
                mysqli_free_result($result);
                disconnect($db);
                return $row["imagen"];
            }
        }
        mysqli_free_result($result);
        disconnect($db);
        return false;
    }
    return false;
}

function registrarImagen($url, $nombre) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query='INSERT INTO archivomultimedia (Filepath,Nombre) VALUES (?,?) ';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("ss", $url, $nombre)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }

        disconnect($db);
        return true;
    }
    return false;
}

function eliminarImagen($url)
{
    $db = connect();
    if ($db != NULL) {
        $file =$url;

        unlink($file);//no se elimina el thurl

        // insert command specification
        $query = 'DELETE FROM archivomultimedia WHERE Filepath = ?';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("s", $url)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        disconnect($db);
        return true;
    }
    return false;
}

function getGaleriaGestor()
{
    $db = connect();
    if ($db != NULL) {
        $query = 'SELECT Filepath,Nombre FROM archivomultimedia';//ya quedo
        $sql = $db->query($query);

        $result = mysqli_query($db, $query);
        $i = 0;
        echo '<div class="row">';
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '
            <div class="col">
                <div class="show-image">
                    <a href="javascript:preview(\'' . $row['Filepath'] . '\',\'' . $row['Nombre'] . '\');"><img src="' . $row['Filepath'] . '" class="img img-thumbnail"></a>
                    <button onclick="showDelete(\'' . $row['Filepath'] . '\')" class="delete btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
                </div>
            </div>';
                $i++;
                if ($i == 4) {
                    echo '</div><div class="row">';
                    $i = 0;
                }
            }
        }
        echo '</div>';
        mysqli_free_result($result);
        disconnect($db);
        return true;
    }
    return false;
}


function getGaleriaPagina()
{
    $db = connect();
    if ($db != NULL) {
        $query = 'SELECT Filepath,Nombre FROM archivomultimedia';//ya quedo
        $sql = $db->query($query);

        $result = mysqli_query($db, $query);
        $i = 0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($i == 0) {
                    echo '<div class="carousel-item active">
                  <img src="GestorV2/' . $row['Filepath'] . '" alt="' . $row['Nombre'] . '" width="1100" height="500">
              </div>';
                } else {
                    echo '<div class="carousel-item">
                  <img src="GestorV2/' . $row['Filepath'] . '" alt="' . $row['Nombre'] . '" width="1100" height="500">
              </div>';
                }

                $i++;
//                if ($i == 4) {
//                    echo '</div><div class="row">';
//                    $i = 0;
//                }
            }
        }
        mysqli_free_result($result);
        disconnect($db);
        return true;
    }
    return false;
}

function make_thumb($file, $dest)
{

    $what = getimagesize($file);
    print_r($what);
//    echo $what["width"] . $what["height"];
    switch (strtolower($what['mime'])) {
        case 'image/png':
            $img = imagecreatefrompng($file);

            break;
        case 'image/jpeg':
            $img = imagecreatefromjpeg($file);

            break;
        case 'image/gif':
            $img = imagecreatefromgif($file);
            break;
        default:
            die();
    }
    $new = imagecreatetruecolor(320, 180);
    imagecopyresampled($new, $img, 0, 0, 0, 0,
        320, 180, $what[0], $what[1]);
    imagejpeg($new, $dest);
    imagedestroy($new);
    return true;
}

function modificarDonador($email, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaN, $dir, $tel, $ocupacion, $idMetodo, $obs, $idCfdi, $rfc)
{
    $db = connect();
    if ($db != NULL) {
        $query = 'UPDATE donadores
                  SET Nombre = "' . $nombre . '",
                  ApellidoPaterno = "' . $apellidoPaterno . '",
                  ApellidoMaterno = "' . $apellidoMaterno . '",
                  FechadeNacimiento = "' . $fechaN . '",
                  Direccion = "' . $dir . '",
                  Telefono = "' . $tel . '",
                  Email = "' . $email . '",
                  Ocupacion = "' . $ocupacion . '",
                  RFC = "' . $rfc . '"
                  WHERE Email = "' . $email . '" ';

        $query2 = 'UPDATE donadores_metodopago
                   SET Observaciones = "' . $obs . '",
                   IdMetodo = "' . $idMetodo . '"
                   WHERE Email = "' . $email . '"';

        $query3 = 'UPDATE donadores_usocfdi
                   SET IdCFDI = "' . $idCfdi . '"
                   WHERE Email = "' . $email . '"
                   ';

        if (mysqli_query($db, $query3)) {
            echo "Record 3 updated successfully";
        } else {
            echo "Error updating record 3: " . mysqli_error($db);
        }
        if (mysqli_query($db, $query2)) {
            echo "Record 2 updated successfully";
        } else {
            echo "Error updating record 2: " . mysqli_error($db);
        }
        if (mysqli_query($db, $query)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($db);
        }


    }
}


function eliminarDonador($email)
{
    $db = connect();
    if ($db != NULL) {
        $query = 'DELETE FROM donadores
                   WHERE Email = "' . $email . '" ';

        $query2 = 'DELETE FROM donadores_metodopago
                   WHERE Email = "' . $email . '" ';

        $query3 = 'DELETE FROM donadores_usocfdi
                   WHERE Email = "' . $email . '" ';

        if (mysqli_query($db, $query3)) {
            echo "Record 3 updated successfully";
        } else {
            echo "Error updating record 3: " . mysqli_error($db);
        }
        if (mysqli_query($db, $query2)) {
            echo "Record 2 updated successfully";
        } else {
            echo "Error updating record 2: " . mysqli_error($db);
        }
        if (mysqli_query($db, $query)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($db);
        }

    }
}

function printDonadoresNV()
{
    $db = connect();
    if ($db != NULL) {
        $query = 'SELECT COUNT(*) AS total
            FROM donadores 
            WHERE Validado = 0';
        $results = $db->query($query);
        
        $row = mysqli_fetch_assoc($results);

        mysqli_free_result($results);
        disconnect($db);
        return $row["total"];
    }
    return false;
}


function obtenerTitulo($seccion)
{
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Titulo FROM informacion WHERE Seccion LIKE '%" . $seccion . "%'";
        $result = mysqli_query($db, $sql);
        disconnect($db);
        $html = '';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= $row["Titulo"];
            }
            echo $html;
        }
    }
}


function modificarTitulo($seccion,$titulo) {
    $db = connect();
    if ($db != NULL) {
        $sql = "UPDATE informacion SET Titulo='".$titulo."' WHERE Seccion LIKE '%".$seccion."%'";

        if (mysqli_query($db,$sql)) {
            echo "Modificado Exitosamente";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
    }
}

function obtenerDesc($seccion) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Descripcion FROM informacion WHERE Seccion LIKE '%" . $seccion . "%'";
        $result = mysqli_query($db, $sql);
        disconnect($db);
        $html = '';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= $row["Descripcion"];
            }
            echo $html;
        }
    }
}


function obtenerDesc2($seccion) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Descripcion FROM informacion WHERE Seccion LIKE '%".$seccion."%'";
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $html .= $row["Descripcion"];
            }
            $order=array("<br>","</br>","<br />","<br/>");
            $html = str_replace($order,"\n",$html);
            echo $html;
        }
    }
}

function modificarDesc($seccion,$desc) {
    $db = connect();
    if ($db != NULL) {
        $sql = "UPDATE informacion SET Descripcion='".$desc."' WHERE Seccion LIKE '%".$seccion."%'";
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '';

        if (mysqli_query($db,$sql)) {
            echo "Modificado Exitosamente";
            disconnect($db);
            return true;

        } else {
            echo "Error: " .$sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
    }
}

function obtenerDescObjetivos($seccion) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Descripcion FROM informacion WHERE Seccion LIKE '%" . $seccion . "%'";
        $result = mysqli_query($db, $sql);
        disconnect($db);
        $html = '';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= '<li class="list-group-item shadow"><p><em>' . $row["Descripcion"] . '</em></p></li>';
            }
            echo $html;
        }
    }
}

function obtenerTablaBlue($seccion)
{
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Titulo, Descripcion FROM informacion WHERE Seccion LIKE '%" . $seccion . "%'";
        $result = mysqli_query($db, $sql);
        disconnect($db);
        $html = '';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= '<li class="list-group-item bg-cyan text-white"><h5>' . $row["Titulo"] . '</h5><p class="card-text text-white">' . $row["Descripcion"] . '</p></li>';
            }
            echo $html;
        }
    }
}


function obtenerTablaBlue2($seccion) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Titulo, Descripcion, idInfo FROM informacion WHERE Seccion LIKE '%".$seccion."%'";
        $result = mysqli_query($db,$sql);
        disconnect($db);
        $html = '<div id="Patronato">';

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
              if($row["Titulo"]!="Vocal"){
                $html .= "<li class='list-group-item bg-cyan'>
                            <h5>". $row["Titulo"] ."</h5>
                            <p id='".$row["Descripcion"]."' class='card-text'>
                              '". $row["Descripcion"] ."'
                            </p>
                            <input type='hidden' value='".$row["idInfo"]."' id='".$row["Descripcion"]."".'a'."'>
                            <button type='button' id='".$row["Descripcion"]."".'h'."' class='btn btn-primary' onclick='editarPatronato(";
                $html .=      '"';
                $html .=      "".$row['Descripcion']."";
                $html .=      '"';
                $html .=      ")'>
                              <i class='fas fa-pencil-alt'></i>
                            </button>
                          </li>";
              }else{
                $html .= "<li class='list-group-item bg-cyan'>
                            <h5>". $row["Titulo"] ."</h5>
                            <p id='".$row["Descripcion"]."' class='card-text'>
                              '". $row["Descripcion"] ."'
                            </p>
                            <button type='button' id='".$row["Descripcion"]."".'h'."' class='btn btn-primary' onclick='editarPatronato(";
                $html .=      '"';
                $html .=      "".$row['Descripcion']."";
                $html .=      '"';
                $html .=      ")'>
                              <i class='fas fa-pencil-alt'></i>
                            </button>
                            <button class='btn btn-danger' onclick='eliminarVocal(";
                $html .=      '"';
                $html .=      "".$row['idInfo']."";
                $html .=      '"';
                $html .=      ")'>
                              <i class='fas fa-trash-alt'></i>
                            </button>
                          </li>";
              }

            }
            $html .= "</div>";
            echo $html;
        }
    }
}

function modificarPatronato($idInfo, $input) {
    $db = connect();
    if ($db != NULL) {
        $sql = "UPDATE informacion SET Descripcion='".$input."' WHERE idInfo LIKE '%".$idInfo."%'";
        $result = mysqli_query($db,$sql);
        disconnect($db);
    }
}

function eliminarVocales($idInfo) {
    $db = connect();
    if ($db != NULL) {
        $sql = "DELETE FROM informacion WHERE idInfo LIKE '%".$idInfo."%'";
        $result = mysqli_query($db,$sql);
        disconnect($db);
    }
}

function addVocales($desc) {
    $db = connect();
    if ($db != NULL) {
        $sql = "INSERT INTO informacion (seccion, titulo, Descripcion) VALUES ('Patronato','Vocal','{$desc}')";
        $result = mysqli_query($db,$sql);
        disconnect($db);
    }
}

function obtenerTablaPink($seccion) {
    $db = connect();
    if ($db != NULL) {
        $sql = "SELECT Titulo, Descripcion FROM informacion WHERE Seccion LIKE '%" . $seccion . "%'";
        $result = mysqli_query($db, $sql);
        disconnect($db);
        $html = '';

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $html .= '<li class="list-group-item bg-pink text-white"><h5>' . $row["Titulo"] . '</h5><p class="card-text text-white">' . $row["Descripcion"] . '</p></li>';
            }
            echo $html;
        }
    }
}


function modificarporID($id, $seccion, $titulo, $descripcion)
{
    $db = connect();
    if ($db != NULL) {
        $sql = "UPDATE informacion SET Seccion=$seccion, Titulo=$titulo, Descripcion=$descripcion' WHERE idInfo = '" . $id . "'";

        if (mysqli_query($db, $sql)) {
            echo "Modificado Exitosamente";
            disconnect($db);
            return true;

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
            disconnect($db);
            return false;
        }
        disconnect($db);
    }
}

function registrarNoticia($titulo, $cuerpo, $imagen){
    $db = connect();
    if ($db != NULL) {


        $query = 'INSERT INTO `noticias`(`titulo`,`cuerpo`,`imagen`)
                      VALUES (?,?,?)';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("sss", $titulo, $cuerpo, $imagen)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }
        disconnect($db);
        return true;
    }
    return false;
}
