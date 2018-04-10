<?php
    session_start();
    if(isset($_SESSION["usuario"]) ) {
        header("location: login.php");
    } else {
        // Head and body tag
        include("partials/_header.html");
        // Top Navbar
        include("partials/_navbar.html");
        // Sidebar
        include("partials/_sidebar.html");
        // Tag to open content wrapper
        include("partials/_page_content_wrapper_start.html");
        // Content
        include("partials/analytics.html");
        // Content Footer
        include("partials/_footer.html");
        // Tag to close content wrapper
        include("partials/_page_content_wrapper_end.html");
    }
?>
