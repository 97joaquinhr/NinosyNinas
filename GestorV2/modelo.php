<?php

    function connect() {
        //$mysql = mysqli_connect("localhost","root","","ninos");
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
                            <a class="list-group-item list-group-item-action" data-toggle = "modal" data-target = "#donadorInfo" name="'.$fila["Email"].'" id="'.$fila["Email"].'"
                            onclick="javascript:generateModal(\''.$fila["Email"].'\', \''.$fila["Nombre"].'\', \''.$fila["ApellidoPaterno"].'\', \''.$fila["ApellidoMaterno"].'\', \''.$fila["Telefono"].'\', \''.$fila["Direccion"].'\',\''.$fila["FechadeNacimiento"].'\',\''.$fila["IdCFDI"].'\',\''.$fila["RFC"].'\',\''.$fila["Descripcion"].'\',\''.$fila["Observaciones"].'\' )" >
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
        $query='SELECT DISTINCT Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, d.Email, Validado, dm.Fecha, Direccion, FechadeNacimiento, IdCFDI, RFC, Descripcion, Observaciones
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
                 <tr  data-toggle = "modal" data-target = "#donadorInfo" name="'.$row["Email"].'" id="'.$row["Email"].'"
                 onclick="javascript:setCurrentVars(\''.$row["Email"].'\', \''.$row["Nombre"].'\', \''.$row["ApellidoPaterno"].'\', \''.$row["ApellidoMaterno"].'\', \''.$row["Telefono"].'\', \''.$row["Direccion"].'\',\''.$row["FechadeNacimiento"].'\',\''.$row["IdCFDI"].'\',\''.$row["RFC"].'\',\''.$row["Descripcion"].'\',\''.$row["Observaciones"].'\' )">
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


function getUsuarios() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Nombre, Telefono, Email FROM Usuario ORDER BY Nombre ASC';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);
        disconnect($db);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class=''>";
                echo "<td>" . $row["Nombre"] . "</td>";
                echo "<td>" . $row["Telefono"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "</tr>";
            }
        }
        return true;
    }
    return false;
}

function getNoticias() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Titulo, Fecha FROM Noticia';
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);
        disconnect($db);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class='' data-toggle=\"modal\" data-target=\"#myModal\">";
                echo "<td>" . $row["Titulo"] . "</td>";
                echo "<td>" . $row["Fecha"] . "</td>";
                echo "</tr>";
            }
        }
        return true;
    }
    return false;
}

function registrarImagen($url, $nombre, $id_noticia, $t_url) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query='INSERT INTO archivomultimedia (Filepath,Nombre,IdNoticia,ThumbnailUrl) VALUES (?,?,?,?) ';
        // Preparing the statement
        if (!($statement = $db->prepare($query))) {
            die("Preparation failed: (" . $db->errno . ") " . $db->error);
        }
        // Binding statement params
        if (!$statement->bind_param("ssss", $url, $nombre, $id_noticia, $t_url)) {
            die("Parameter vinculation failed: (" . $statement->errno . ") " . $statement->error);
        }
        // Executing the statement
        if (!$statement->execute()) {
            die("Execution failed: (" . $statement->errno . ") " . $statement->error);
        }

        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return false;
}

function eliminarImagen($url) {
    $db = connect();
    if ($db != NULL) {

        // insert command specification
        $query='DELETE FROM archivomultimedia WHERE Filepath = ?';
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

        mysqli_free_result($results);
        disconnect($db);
        return true;
    }
    return false;
}

function getGaleriaGestor() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Filepath,Nombre,ThumbnailUrl FROM archivomultimedia';//ya quedo
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);
        $i = 0;
        echo '<div class="row">';
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '
                <div class="col">
                    <div class="show-image">
                        <a href="javascript:preview(\''.$row['Filepath'].'\',\''.$row['Nombre'].'\');"><img src="'.$row['ThumbnailUrl'].'" class="img img-thumbnail"></a>
                        <button onclick="showDelete(\''.$row['Filepath'].'\')" class="delete btn btn-danger shadow"><i class="fas fa-trash-alt"></i></button>
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
function getGaleriaPagina() {
    $db = connect();
    if ($db != NULL) {
        $query='SELECT Filepath,Nombre,ThumbnailUrl FROM archivomultimedia';//ya quedo
        $sql = $db->query($query);

        $result = mysqli_query($db,$query);
        echo '<div class="m-p-g">
            <div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">';
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo '<img src="../GestorV2/'.$row['Filepath'].'" data-full="../GestorV2/'.$row['Filepath'].'" class="m-p-g__thumbs-img" />';
            }
        }
        echo '</div>

            <div class="m-p-g__fullscreen"></div>
        </div>';
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

    function modificarDonador($email, $nombre, $apellidoPaterno, $apellidoMaterno, $fechaN, $dir, $tel, $ocupacion, $idMetodo, $obs, $idCfdi)
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
                      Ocupacion = "' . $ocupacion . '"
                      WHERE Email = "' . $email . '" ';

            $query2 = 'UPDATE donadores_metodopago
                       SET Observaciones = "' . $obs . '",
                       IdMetodo = "' . $idMetodo . '"
                       WHERE Email = "' . $email . '"';

            $query3 = 'UPDATE donadores_usocfdi
                       SET IdCFDI = "' . $idCfdi . '"
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
                       WHERE Email = $email ';

            $query2 = 'DELETE FROM donadores_metodopago
                       WHERE Email = $email ';

            $query3 = 'DELETE FROM donadores_usocfdi
                       WHERE Email = $email ';

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

?>
