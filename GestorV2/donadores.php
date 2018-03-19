<?php
    require_once("modelo.php");
    include("partials/_header.html");
    // Top Navbar
    include("partials/_navbar.html");
    // Sidebar
    include("partials/_sidebar.html");
    // Tag to open content wrapper
    include("partials/_page_content_wrapper_start.html");
    // Content
    include("partials/donadores.html");
    // Tag to close content wrapper

    include("partials/_page_content_wrapper_end.html");
    // Additional Scripts can be included here
    include("partials/_end.html");

?>