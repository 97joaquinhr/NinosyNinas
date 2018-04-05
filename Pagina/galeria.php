<?php
session_start();
require_once ("../GestorV2/modelo.php");

include("html/partials/_header.html");
include("html/galeria.html");
include("../GestorV2/partials/_galeria_modals.html");
echo   '<script src="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
                <script src="../GestorV2/js/comportamiento.js"></script>
                <script src="js/material-photo-gallery.min.js"></script>';
echo   '<script src="../GestorV2/js/file_input.js"></script>';
include("html/partials/_footer.html");
