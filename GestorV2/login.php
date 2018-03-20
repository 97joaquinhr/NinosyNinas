<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"]) ) {

        // ('R01', 'Administrador'),
        // ('R02', 'Editor general'),
        // ('R03', 'Fotografía'),
        // ('R04', 'Eventos'),
        // ('R05', 'Noticias'),
        // ('R06', 'Roles');

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
                header("location: error_no_func.php");
        }
    } else if (login($_POST["usuario"], $_POST["password"]) ) {
        unset($_SESSION["error"]);
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["rol"] = getRol($_SESSION["usuario"]);
        $_SESSION["funciones"] = getFunciones($_SESSION["rol"]);
        $_SESSION["nombre"] = getNombre($_SESSION["usuario"]);
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
                header("location: error_no_func.php");
        }
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
