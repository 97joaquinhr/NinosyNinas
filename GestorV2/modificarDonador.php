<?php
    require_once ("modelo.php");
    modificarDonador($_POST["ed_email"],$_POST["ed_nom"], $_POST["ed_apellidoP"], $_POST["ed_apellidoM"],$_POST["ed_fechaN"], $_POST["ed_dir"], $_POST["ed_tel"], 'ES GORDO0', 'M03',$_POST["ed_obs"],$_POST["ed_usoCFDI"]);
    header("Location: donadores.php");
    ?>