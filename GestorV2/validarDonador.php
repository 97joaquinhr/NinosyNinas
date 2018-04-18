<?php
require_once("modelo.php");
if(isset($_SESSION["usuario"])) {
    validarDonador($_POST["v_email"]);
    header("Location:donadores.php");
}