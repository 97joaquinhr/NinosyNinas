<?php
    session_start();
    if(isset($_SESSION["usuario"]) ) {
        $user = $_SESSION["usuario"];
        $nombre = $_SESSION["nombre"];
        $rol = $_SESSION["rol"];
        $funciones = $_SESSION["funciones"];
        
        switch ($_SESSION["rol"]) {
            case 'R01':
                header("location: dashboard.php");
                break;
            case 'R02':
            case 'R05':
                header("location: noticias.php");
                break;
            case 'R03':
                header("location: galeria.php");
                break;
            case 'R04':
                header("location: eventos.php");
                break;
            case 'R06':
                header("location: usuario.php");
                break;
            default:
                header("location: logout.php");
        }
    } else {
        include("partials/_header.html");
        include("partials/_login_form.html");
        include("partials/_common_js.html");
        echo '<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>';
        include("partials/_end.html");
    }
?>
