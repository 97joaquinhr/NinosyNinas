<?php
require_once ("modelo.php");
addVocales($_POST["Descripcion"]);
echo obtenerTablaBlue2('Patronato');
//header("location: about_us.php");
?>
