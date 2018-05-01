<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"])) {
        eliminarImagen($_GET['q']);
        header("location: galeria.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: login.php");
    }

?>
