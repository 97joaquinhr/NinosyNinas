<?php
    function connect() {
        $mysql = mysqli_connect("localhost","root","","rbac");
        $mysql->set_charset("utf8");
        return $mysql;
    }

    function disconnect($mysql) {
        mysqli_close($mysql);
    }

    function login($user, $passwd) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Id_Usuario FROM usuario WHERE Id_Usuario="'.$user.
                '" AND Contrasena="'.$passwd.'"';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results

            if (mysqli_num_rows($results) > 0)  {
                // it releases the associated results
                mysqli_free_result($results);
                disconnect($db);
                return true;
            }
            return false;
        }
        return false;
    }

    function getRol($user) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Id_Rol FROM roles_usuario WHERE Id_Usuario ="'.$user.'"';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $rol = "";
             // cycle to explode every line of the results
            if ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                $rol = $fila['Id_Rol'];
            }
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return $rol;
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

    function getPrivilegiosNav($privilegios) {
        $html = "";
        foreach ($privilegios as &$id_privilegio) {
            $nombre = preg_replace('/(?<!\ )[A-Z]/', ' $0', $id_privilegio);
            $html.= '<a class="dropdown-item" href="consultas.php?p='.$id_privilegio.'">'.$nombre.'</a>';
        }
        echo $html;
    }














    //var_dump(login('lalo', 'hockey'));
    //var_dump(login('joaquin', 'basket'));
    //var_dump(login('cesar', 'basket'));

    function crearProducto($nombre, $descripcion, $imagen) {
        $db = connect();
        if ($db != NULL) {

            // insert command specification
            $query='INSERT INTO Productos (nombre,description,image) VALUES (?,?,?) ';
            // Preparing the statement
            if (!($statement = $db->prepare($query))) {
                die("Preparation failed: (" . $db->errno . ") " . $db->error);
            }
            // Binding statement params
            if (!$statement->bind_param("sss", $nombre, $descripcion, $imagen)) {
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

    function getProductos() {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT * FROM productos';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
             // cycle to explode every line of the results
            $html = '';
            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $html .= '  <div class="card">
                                    <div class="card-header">'.$fila["nombre"].'</div>
                                    <img class="card-img" src="uploads/'.$fila["image"].'" alt="Card image">
                                    <div class="card-body">
                                        <div class="card-text">'.$fila["description"].'</div>
                                    </div>
                                    <div class="card-footer">Publicado el '.$fila["created_at"].'</div>
                                </div>';
            }
            echo $html;
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return true;
    }


        //var_dump(login('lalo', 'hockey'));
        //var_dump(login('joaquin', 'basket'));
        //var_dump(login('cesar', 'basket'));

?>
