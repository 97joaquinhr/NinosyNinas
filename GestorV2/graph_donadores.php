<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"])) {
        
        
        json_encode();
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
    }
?>
