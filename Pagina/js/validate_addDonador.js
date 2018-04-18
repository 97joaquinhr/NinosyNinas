var email1 = document.getElementById("email");
var email2 = document.getElementById("emailD2");
email2.addEventListener("blur", validateEmail, true);
var rfc = document.getElementById("rfc");
rfc.addEventListener("blur", validateRFC, true);
var phoneNumber = document.getElementById("telefono");
phoneNumber.addEventListener("blur", validatePhone, true);
var date = document.getElementById("fechaN");
//date.addEventListener("blur", myBlurFunction, true);
var ocupacion = "";

function validateEmail() {
  if(email1.value!=""){
    if(email2.value!=email.value){
      alert("Los emails no coinciden");
    }
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
