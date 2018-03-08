<?php
    session_start();
    require_once("modelo.php");

    if(isset($_SESSION["usuario"])) {
        $p = $_GET["p"];
        $nombre = preg_replace('/(?<!\ )[A-Z]/', ' $0', $p);
        $user = $_SESSION["usuario"];
        $rol = $_SESSION["rol"];
        $privilegios = $_SESSION["privilegios"];

        include("partials/_header.html");
        include("partials/_nav.html");
        include("partials/_consultas.html");
        include("partials/_footer.html");
    }
?>
