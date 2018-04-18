<?php

    session_start();
    require_once ("modelo.php");
    if(isset($_SESSION["usuario"])) {
        modificarDonador($_POST["ed_email"], $_POST["ed_nom"], $_POST["ed_apellidoP"], $_POST["ed_apellidoM"], $_POST["ed_fechaN"], $_POST["ed_dir"], $_POST["ed_tel"], 'N/A', $_POST["ed_metodoPago"], $_POST["ed_obs"], $_POST["ed_usoCFDI"], $_POST["ed_RFC"]);
        header("location: donadores.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>