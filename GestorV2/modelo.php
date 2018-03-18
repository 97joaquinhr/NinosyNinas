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
?>
