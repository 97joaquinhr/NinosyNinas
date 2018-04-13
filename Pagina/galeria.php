<?php
session_start();
require_once ("../GestorV2/modelo.php");

include("html/partials/_header.html");
include("html/galeria.html");
echo   '<script src="js/material-photo-gallery.min.js"></script>
        <script>
        var elem = document.querySelector(".m-p-g");
        document.addEventListener("DOMContentLoaded", function() {
          var gallery = new MaterialPhotoGallery(elem);
        });
        </script>';
include("html/partials/_footer.html");
?>
