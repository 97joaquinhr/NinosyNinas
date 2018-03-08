
<?php
session_start();
require_once("modelo.php");
$p = $_GET["p"];
$user = $_SESSION["usuario"];
$rol = $_SESSION["rol"];
$privilegios = $_SESSION["privilegios"];
include("partials/_header.html");
include("partials/_consultas.html");
include("partials/_footer.html");


?>
