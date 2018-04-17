<?php
require_once ("../GestorV2/modelo.php");
$_POST["validado"] = 0;
addDonador($_POST["email"], $_POST["rfc"], $_POST["nombre"], $_POST["apellidoP"], $_POST["apellidoM"], $_POST["fechaN"], $_POST["direccion"],$_POST["telefono"], "N/A" ,$_POST["validado"],$_POST["metodoPago"],$_POST["observaciones"],$_POST["cfdi"]);
echo $_POST["validado"];

?>
