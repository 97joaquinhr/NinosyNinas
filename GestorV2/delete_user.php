<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) && $_SESSION["rol"] == "R01") {
        
        deleteUser($_POST["user_id"]);
        
        header("location: usuario.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: login.php");
    }

?>
