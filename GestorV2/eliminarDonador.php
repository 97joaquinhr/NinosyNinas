<?php
    session_start();
    require_once ("modelo.php");
    
    if(isset($_SESSION["usuario"])) {
        eliminarDonador($_POST["c_email"]);
        header("Location: donadores.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }