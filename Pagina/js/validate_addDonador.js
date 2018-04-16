var email1 = document.getElementById("email");
var email2 = document.getElementById("emailD2");
email2.addEventListener("blur", validateEmail, true);
var rfc = document.getElementById("rfc");
rfc.addEventListener("blur", validateRFC, true);
var name = document.getElementById("nombre");
//name.addEventListener("blur", myBlurFunction, true);
var appellidoP = document.getElementById("apellidoP");
//apellidoP.addEventListener("blur", myBlurFunction, true);
var appellidoM = document.getElementById("apellidoM");
//apellidoM.addEventListener("blur", myBlurFunction, true);
var phoneNumber = document.getElementById("telefono");
phoneNumber.addEventListener("blur", validatePhone, true);
var date = document.getElementById("fechaN");
//date.addEventListener("blur", myBlurFunction, true);
var address = document.getElementById("direccion");
//address.addEventListener("blur", myBlurFunction, true);
var obsv = document.getElementById("observaciones");
//obsv.addEventListener("blur", myBlurFunction, true);
var cfdi = document.getElementById("usoCFDI");
cfdi.addEventListener("blur", validateCFDI, true);
var ocupacion = "";

function validateEmail() {
  if(email2.value!=email.value){
    alert("Los emails no coinciden");
  }
}

function validateRFC() {
  var rfcValid = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
  let validado = rfcValid.exec(rfc.value);
  if(rfc.value!=''){
    if(validado==null){
      alert("El RFC es inválido");
    }
  }
}

function validatePhone() {
  var phoneValid = phoneNumberParser(phoneNumber);
  if(!phoneValid){
    alert("El número de teléfono es inválido");
  }
}

function validateCFDI() {
  if(cfdi.length!=3){
    alert("El uso de CFDI es incorrecto");
  }
}

function inputs(data) {
  data = trim(data);
  data = stripslashes(data);
  data = htmlspecialchars(data);
  return data;
}

$_POST["email"], $_POST["rfc"], $_POST["nombre"], $_POST["apellidoP"], $_POST["apellidoM"],
 $_POST["fechaN"], $_POST["direccion"],$_POST["telefono"], $_POST["ocupacion"],1,$_POST["metodoPago"],
 $_POST["observaciones"],$_POST["cfdi"]

function validate_donadores() {
  var metodoPago = document.getElementById("metodoPago").value;
  $.post('addDonador.php',{
    email: email1,
    rfc: rfc,
    nombre: inputs(nombre),
    apellidoP: inputs(apellidoP),
    apellidoM: inputs(apellidoM),
    fechaN: date,
    direccion: inputs(direccion),
    telefono: telefono,
    ocupacion: ocupacion,
    metodoPago: metodoPago,
    observaciones: inputs(obsv),
    cfdi: cfdi
  })
  .done(function(data){
    document.getElementById('addDonador1').innerHTML = data;
  });
}
