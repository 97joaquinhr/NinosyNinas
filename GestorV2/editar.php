<?php
require_once ("modelo.php");
modificarPatronato($_POST["idInfo"],$_POST["input"]);
echo obtenerTablaBlue2('Patronato');
//header("location: about_us.php");
?>
