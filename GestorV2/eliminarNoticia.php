<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) && ($_SESSION["rol"] == "R01" || $_SESSION["rol"] == "R02"  || $_SESSION["rol"] == "R03")) {
        if(isset($_POST["idNoticia"]) && isset($_POST["imagenNoticia"])) {
            eliminarNoticia($_POST["idNoticia"],$_POST["imagenNoticia"]);
        } else {
            $_SESSION["error"] = $_POST["idNoticia"]."  imagen".$_POST["imagenNoticia"]."  post".$_POST["eliminar"];
        }
        header("location: noticias.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: login.php");
    }

?>
