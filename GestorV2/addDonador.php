<?php

    require_once ("modelo.php");
    session_start();

    if(isset($_SESSION["usuario"]) && $_SESSION["rol"] == "R01") {
        addDonador($_POST["email"], $_POST["rfc"], $_POST["nombre"], $_POST["apellidoP"], $_POST["apellidoM"], $_POST["fechaN"], $_POST["direccion"],$_POST["telefono"], $_POST["ocupacion"],1,$_POST["metodoPago"],$_POST["observaciones"],$_POST["cfdi"]);    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
