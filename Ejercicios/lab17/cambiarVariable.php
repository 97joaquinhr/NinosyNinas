<?php
    session_start();
    require_once("modelo.php");
    $_SESSION["Consulta"] = $_POST["id"];
    
    switch ($_SESSION["Consulta"]){
        case 'MT':
            getMTransaccion($_POST["min"], $_POST["max"]);
            break;
        case 'TN':
            getTNombre($_POST["NombreTN"]);
            break;
        case 'PF':
            getPersonalF();
            break;
        case 'AT':
            getATrabajo();
            break;
        case 'TT':
            getTTipo();
            break;
        case 'C':
            getCuentas($_POST["NombreC"]);
            break;            
    }
?>