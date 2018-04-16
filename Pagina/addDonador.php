<?php
    require_once ("../GestorV2/modelo.php");
    // addDonador($_POST["email"], $_POST["rfc"], $_POST["nombre"], $_POST["apellidoP"], $_POST["apellidoM"], $_POST["fechaN"], $_POST["direccion"],$_POST["telefono"],$_POST["ocupacion"], 1,$_POST["metodoPago"],$_POST["observaciones"],$_POST["cfdi"]);
    //  header("Location: index.php");
    
    addDonador($_POST["email"], $_POST["rfc"], $_POST["nombre"], $_POST["apellidoP"], $_POST["apellidoM"], $_POST["fechaN"], $_POST["direccion"],$_POST["telefono"], $_POST["ocupacion"],1,$_POST["metodoPago"],$_POST["observaciones"],$_POST["cfdi"]);


?>
