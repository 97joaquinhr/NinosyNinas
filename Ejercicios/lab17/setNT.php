<?php 
    $_SESSION["Consulta"]='MT';
    $_SESSION["Min"]=$_POST["Min"];
    $_SESSION["Max"]=$_POST["Max"];
    header("location: consultas.php");
?>