<?php
  session_start();
  require_once ("modelo.php");
  if(isset($_SESSION["usuario"])) {
    $str = str_replace(/(?:\r\n|\r|\n)/g, '<br>',$_POST["desc"]);
    $seccion = $_POST["seccion"];
    modificarTitulo($seccion,$_POST["titulo"]);
    modificarDesc($seccion,$str);
    echo "<script>alert('Cambio exitoso')</script>"
    header("location: about_us.php");
  } else {
      $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
      header("location: index.php");
  }
?>
