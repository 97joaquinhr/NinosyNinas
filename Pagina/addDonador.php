<?php
    require_once ("../GestorV2/modelo.php");
    session_start();

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    function validateEmail($email1, $email2) {
      if($email2!=$email1){
        return false;
      }else{
        return true;
      }
    }

    function validateRFC($rfc) {
      $rfcValid = "/^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/";
      $validado = $rfcValid.exec($rfc);
      if($rfc!=''){
        if($validado==null){
          return false;
        }else{
          return true;
        }
      }else{
        return true;
      }
    }

    function inputs($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    if(validateEmail($_POST["email"],$_POST["emailD2"])){
      if($_POST["rfc"]!=""){
        if(validateRFC($_POST["rfc"])){
            $_SESSION["alert"]="Registro exitoso.";
          addDonador($_POST["email"], $_POST["rfc"], inputs($_POST["nombre"]), inputs($_POST["apellidoP"]), inputs($_POST["apellidoM"]), $_POST["fechaN"], inputs($_POST["direccion"]),$_POST["telefono"], $_POST["ocupacion"],0,$_POST["metodoPago"],inputs($_POST["observaciones"]),$_POST["cfdi"]);
        }
      }else{
          $_SESSION["alert"]="Registro exitoso.";
        addDonador($_POST["email"], $_POST["rfc"], inputs($_POST["nombre"]), inputs($_POST["apellidoP"]), inputs($_POST["apellidoM"]), $_POST["fechaN"], inputs($_POST["direccion"]),$_POST["telefono"], $_POST["ocupacion"],0,$_POST["metodoPago"],inputs($_POST["observaciones"]),$_POST["cfdi"]);
      }
    }
    header("Location: index.php");
    ?>
