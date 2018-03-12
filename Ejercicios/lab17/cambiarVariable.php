<?php
    session_start();
    $_SESSION["Consulta"] = $_POST["id"];
    echo $_SESSION["Consulta"];
?>