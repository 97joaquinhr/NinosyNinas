<?php
require_once ("modelo.php");

if(isset($_SESSION["usuario"])) {
    eliminarDonador($_POST["c_email"]);
    header("Location: donadores.php");
}