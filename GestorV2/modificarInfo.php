<?php
  session_start();
  require_once ("modelo.php");
   if(isset($_SESSION["usuario"])) {
    $order=array("\r\n","\r","\n","\n\r");
    $str = str_replace($order, '<br>',$_POST["desc"]);
    $seccion = $_POST["seccion"];
    modificarTitulo($seccion,$_POST["titulo"]);
    modificarDesc($seccion,$str);
    echo "<script>alert('Cambio exitoso')</script>";
    header("location: about_us.php");
  } else {
      $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
      header("location: index.php");
  }
?>
