<?php
    function connect() {
        $mysql = mysqli_connect("127.0.0.1","Linetes","cesarb13","rbac", 8889);
        //$mysql = mysqli_connect("localhost","root","","rbac");
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

        function getMTransaccion($min, $max) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Fecha,Monto FROM usuario_transaccion WHERE Monto between '.$min.' and '.$max.' ORDER BY Monto ASC';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $MT = '<div class="container"><div class="jumbotron jumbotron-fluid bg-light">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Fecha</th>
                                        <th>Monto</th>
                                        </tr>
                                    </thead>
                                    </tbody>';

            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                    $MT .= '
                                        <tr>
                                        <td>'.$fila["Fecha"].'</td>
                                        <td>'.$fila["Monto"].'</td>
                                        </tr>';
            }

            echo $MT.'</tbody>
                                </table>
                            </div></div>';
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function getTNombre($nombre) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Id_Us-Trans,Nombre FROM usuario_transaccion T, Usuario U WHERE U.Id_Usuario = T.Id_Usuario AND Nombre='.$nombre.'';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $TN = '<div class="container"><div class="jumbotron jumbotron-fluid bg-light">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Id Transaccion</th>
                                        <th>Usuario</th>
                                        </tr>
                                    </thead>
                                    </tbody>';

            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $TN .= '
                                        <tr>
                                        <td>'.$fila["Id_Us-Trans"].'</td>
                                        <td>'.$fila["Nombre"].'</td>
                                        </tr>';
            }

            echo $TN.'</tbody>
                                </table>
                            </div></div>';
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function getPersonalF() {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Nombre,Fecha FROM usuario U, trabajadores T, trabajadores_areatrabajo TA WHERE U.Id_Usuario=T.Id_Usuario AND T.Id_Usuario=TA.Id_Usuario';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $TN = '<div class="container"><div class="jumbotron jumbotron-fluid bg-light">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Nombre</th>
                                        <th>Fecha</th>
                                        </tr>
                                    </thead>
                                    </tbody>';

            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $TN .= '
                                        <tr>
                                        <td>'.$fila["Nombre"].'</td>
                                        <td>'.$fila["Fecha"].'</td>
                                        </tr>';
            }

            echo $TN.'</tbody>
                                </table>
                            </div></div>';
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function getATrabajo() {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Id_AreaTrabajo FROM areatrabajo';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $TN = '<div class="container"><div class="jumbotron jumbotron-fluid bg-light">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Id_AreaTrabajo</th>
                                        </tr>
                                    </thead>
                                    </tbody>';

            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $TN .= '
                                        <tr>
                                        <td>'.$fila["Id_AreaTrabajo"].'</td>
                                        </tr>';
            }

            echo $TN.'</tbody>
                                </table>
                            </div></div>';
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function getTTipo() {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT Tipo FROM transaccion';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $TN = '<div class="container"><div class="jumbotron jumbotron-fluid bg-light">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Tipo de Trasaccion</th>
                                        </tr>
                                    </thead>
                                    </tbody>';

            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $TN .= '
                                        <tr>
                                        <td>'.$fila["Tipo"].'</td>
                                        </tr>';
            }

            echo $TN.'</tbody>
                                </table>
                            </div></div>';
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }

    function getCuentas($nombre) {
        $db = connect();
        if ($db != NULL) {

            //Specification of the SQL query
            $query='SELECT * FROM Usuarios WHERE Nombre LIKE'.$nombre.'';
            $query;
             // Query execution; returns identifier of the result group
            $results = $db->query($query);
            $TN = '<div class="container"><div class="jumbotron jumbotron-fluid bg-light">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>Id_Usuario</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Creado en</th>
                                        <th>Nacimiento</th>
                                        <th>Balance</th>
                                        <th>Contraseña</th>
                                        <th>Habilitado</th>
                                        </tr>
                                    </thead>
                                    </tbody>';

            while ($fila = mysqli_fetch_array($results, MYSQLI_BOTH)) {
                                                // Options: MYSQLI_NUM to use only numeric indexes
                                                // MYSQLI_ASSOC to use only name (string) indexes
                                                // MYSQLI_BOTH, to use both
                    $TN .= '
                                        <tr>
                                        <td>'.$fila["Id_Usuario"].'</td>
                                        <td>'.$fila["Nombre"].'</td>
                                        <td>'.$fila["Apellidos"].'</td>
                                        <td>'.$fila["Fecha_Creacion"].'</td>
                                        <td>'.$fila["Fecha_Nacimiento"].'</td>
                                        <td>'.$fila["Balance"].'</td>
                                        <td>'.$fila["Contrasena"].'</td>
                                        <td>'.$fila["Habilitado"].'</td>
                                        </tr>';
            }

            echo $TN.'</tbody>
                                </table>
                            </div></div>';
            // it releases the associated results
            mysqli_free_result($results);
            disconnect($db);
            return true;
        }
        return false;
    }


        //var_dump(login('lalo', 'hockey'));
        //var_dump(login('joaquin', 'basket'));
        //var_dump(login('cesar', 'basket'));

?>
