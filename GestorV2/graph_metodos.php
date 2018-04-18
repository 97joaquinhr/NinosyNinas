<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"])) {
        echo json_encode(getMetodos_graph());
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
    }
?>
