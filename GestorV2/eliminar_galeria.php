<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) && ($_SESSION["rol"] == "R01" || $_SESSION["rol"] == "R02"  || $_SESSION["rol"] == "R03")) {
        eliminarImagen($_GET['q']);
        header("location: galeria.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: login.php");
    }

?>
