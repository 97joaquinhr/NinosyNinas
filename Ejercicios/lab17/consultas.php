<?php

    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"])) {
        $p = $_GET["p"];
        $_SESSION["Consulta"]='default';
        $nombre = preg_replace('/(?<!\ )[A-Z]/', ' $0', $p);
        $user = $_SESSION["usuario"];
        $rol = $_SESSION["rol"];
        $privilegios = $_SESSION["privilegios"];
        $sub = in_array("RealizarSubConsultas", $privilegios);

        include("partials/_header.html");
        include("partials/_nav.html");
        if ($rol == "Administrador") {
            switch ($p) {
                case "TransaccionesRealizadas":
                    include("partials/_transacciones_monto.html");
                    break;
                case "VisualizarPersonalHabilitado":
                    include("partials/_personal.html");
                    break;

                default:
                    # code...
                    break;
            }
        } else {
            
        }        
        include("partials/_consultas.html");        
        include("partials/_footer.html");
    } else {
        header("location:index.php");
    }
?>
