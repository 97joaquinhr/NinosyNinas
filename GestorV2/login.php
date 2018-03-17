<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"]) ) {
        header("location: dashboard.php");
    } else if (login($_POST["usuario"], $_POST["password"]) ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        header("location: dashboard.php");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
