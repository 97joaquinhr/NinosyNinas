<?php
    session_start();
    if(isset($_SESSION["usuario"]) ) {
        header("location: login.php");
        // ya esta logeado
    } else {
        include("partials/_header.html");
        // include("partials/_login_form.html");
        // mostrar pagina sin iniciar sesion
        include("partials/_footer.html");
    }
?>
