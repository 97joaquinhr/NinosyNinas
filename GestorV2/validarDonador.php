<?php
    session_start();
    require_once("modelo.php");
    if(isset($_SESSION["usuario"]) && $_SESSION["rol"] == "R01") {
        validarDonador($_POST["v_email"]);
        header("location:donadores.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }