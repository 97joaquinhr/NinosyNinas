<?php
session_start();
require_once ("../GestorV2/modelo.php");

include("html/partials/_header.html");
include("html/galeria.html");
echo   '<script src="../GestorV2/js/comportamiento.js"></script>
        <script src="js/material-photo-gallery.min.js"></script>';
echo   '<script src="../GestorV2/js/file_input.js"></script>';
include("html/partials/_footer.html");
