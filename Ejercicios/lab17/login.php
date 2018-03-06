<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"]) ) {
        include("partials/_header.html");
        $user = $_SESSION["usuario"];
        include("partials/_tienda_view.html");
        include("partials/_footer.html");
    } else if (login($_POST["usuario"], $_POST["password"]) ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $user = $_SESSION["usuario"];
        include("partials/_header.html");
        include("partials/_tienda_view.html");
        include("partials/_footer.html");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
