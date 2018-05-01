<?php
require_once ("modelo.php");
eliminarVocales($_POST["idInfo"]);
echo obtenerTablaBlue2('Patronato');
//header("location: about_us.php");
?>
