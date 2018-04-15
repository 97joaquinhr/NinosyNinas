<?php
require_once ("modelo.php");
eliminarDonador($_POST["c_email"]);
header("Location: donadores.php");
