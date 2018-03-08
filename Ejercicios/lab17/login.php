<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"]) ) {
        $user = $_SESSION["usuario"];
        $rol = $_SESSION["rol"];
        $privilegios = $_SESSION["privilegios"];
        include("partials/_header.html");
        include("partials/_nav.html");
        include("partials/_panel.html");
        include("partials/_footer.html");
    } else if (login($_POST["usuario"], $_POST["password"]) ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["rol"] = getRol($_SESSION["usuario"]);
        $_SESSION["privilegios"] = getPrivilegios($_SESSION["rol"]);
        $user = $_SESSION["usuario"];
        $rol = $_SESSION["rol"];
        $privilegios = $_SESSION["privilegios"];
        include("partials/_header.html");
        include("partials/_nav.html");
        include("partials/_panel.html");
        include("partials/_footer.html");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: inicio.php");
    }
?>
