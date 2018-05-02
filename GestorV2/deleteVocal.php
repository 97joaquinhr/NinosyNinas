<?php
session_start();
require_once ("modelo.php");
 if(isset($_SESSION["usuario"])) {
  eliminarVocales($_POST["idInfo"]);
  echo obtenerTablaBlue2('Patronato');
  //header("location: about_us.php");
} else {
    $_SESSION["error"] = "Usuario y/o contraseña incorrectos";
    header("location: index.php");
}
?>
