
<?php
session_start();
require_once ("GestorV2/modelo.php");
if(isset($_SESSION["alert"])){
    echo "<script type='text/javascript'>alert('".$_SESSION["alert"]."');</script>";
    session_destroy();
}
include("html/partials/_header.html");
include("html/index.html");
echo '<script src="js/anime.min.js"></script>
       <script src="js/anime_test.js"></script> ';
include("html/partials/_footer.html");
?>
