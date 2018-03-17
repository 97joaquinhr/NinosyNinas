<?php
    session_start();

    if(isset($_SESSION["usuario"]) ) {
        $user = $_SESSION["usuario"];
        // Head and body tag
        include("partials/_header.html");
        // Top Navbar
        include("partials/_navbar.html");
        // Sidebar
        include("partials/_sidebar.html");
        // Tag to open content wrapper
        include("partials/_page_content_wrapper_start.html");
        // Content
        include("partials/_dashboard.html");
        // Content Footer
        include("partials/_footer.html");
        // Tag to close content wrapper
        include("partials/_page_content_wrapper_end.html");
        // Additional Scripts can be included here
        include("partials/_dashboard_js.html");
        // Required Scripts and end of file
        include("partials/_end.html");
    } else {
        $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
        header("location: index.php");
    }
?>
