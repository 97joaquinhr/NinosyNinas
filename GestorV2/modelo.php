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
?>
