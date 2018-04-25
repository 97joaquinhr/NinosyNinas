<?php
  require_once ("modelo.php");
   // Head and body tag
   include("partials/_header.html");
   // Top Navbar
   include("partials/_navbar.html");
   // Sidebar
   include("partials/_sidebar.html");
   // Tag to open content wrapper
   include("partials/_page_content_wrapper_start.html");
   // Content
    include("partials/_editAreas.html");
   // Content Footer
   //  include("partials/_footer.html");
   // Tag to close content wrapper
   include("partials/_page_content_wrapper_end.html");
   // Additional Scripts and Modals can be included here
   include("partials/_donadores_modals.html");
   include("partials/_common_js.html");
   echo   '<script src="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/js/gijgo.min.js" type="text/javascript"></script>
               <script src="js/comportamiento.js"></script>
               <script src="js/modals.js"></script>
               <script src="js/funciones.js"></script>
               ';
   echo   '<script>
                   $("#footer").addClass("footer");
               </script>';
   // Required Scripts and end of file
   include("partials/_end.html");
   ?>
