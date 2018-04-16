<?php
require_once("modelo.php");
validarDonador($_POST["v_email"]);
header("Location:donadores.php");