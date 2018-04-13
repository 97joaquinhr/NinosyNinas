function compareFields() {
    var password = document.getElementById("pass1").value;
    var confirm = document.getElementById("pass2").value;

    if (password != confirm)
        document.getElementById("confirm-pass-match").innerHTML = "<p>Las contraseñas no coinciden <i class='fa fa-thumbs-o-down' aria-hidden='true'></i></p>";
    else
        document.getElementById("confirm-pass-match").innerHTML = "<p>Las contraseñas coinciden <i class='fa fa-thumbs-o-up' aria-hidden='true'></i></p>";

	if (password.split("").length < 8)
        document.getElementById("confirm-pass-match").innerHTML += "<p>La contraseña es muy corta <i class='fa fa-thumbs-o-down' aria-hidden='true'></i></p>";
    else
        document.getElementById("confirm-pass-match").innerHTML += "<p>La contraseña tiene el largo correcto <i class='fa fa-thumbs-o-up' aria-hidden='true'></i></p>";

}

function validateForm() {
  var email1 = document.getElementById("email").value;
  var email2 = document.getElementById("emailD2").value;
  if(email1!=email2){
    alert("Los correos no coinciden");
    return false;
  }
  var rfc = document.getElementById("rfc").value;
  var rfcValid = /^([A-ZÑ&]{3,4}) ?(?:- ?)?(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])) ?(?:- ?)?([A-Z\d]{2})([A\d])$/;
  let validado = rfcValid.exec(rfc);
  if(rfc!=null){
    if(validado==null){
      alert("El RFC es inválido");
      return false;
    }
  }
  var phoneNumber = document.getElementById("telefono").value;
  var phoneValid = phoneNumberParser(phoneNumber);
  if(!phoneValid){
    alert("El número de teléfono es inválido");
    return false;
  }
  var date = document.getElementById("datepicker").value;
  console.log(date);
  if(date!=NULL){
    let datedmy = date.split("/");
    let day = datedmy[0].split('');
    let month = datedmy[1].split('');
    let year = date[2];
    console.log(day);
    console.log(month);
    console.log(year);
    //Se revisa el día
    if(day[0]>=0 && day[0]<=3){
      if(day[0]==3){
        if(day[1]>=0 && day[1]<=1){
        }else{
          alert("La fecha es incorrecta");
          return false;
        }
      }else{
        if(day[1]>=0 && day[1]<=9){
        }else{
          return false;
        }
      }
    }else{
      return false;
    }
    //Se revisa el mes
    if(month[0]>=0 && month[0]<=1){
      if(month[0]==1){
        if(month[1]>=0 && month[1]<=2){
        }else{
          alert("La fecha es incorrecta");
          return false;
        }
      }else{
        if(month[1]>=0 && month[1]<=9){
        }else{
          alert("La fecha es incorrecta");
          return false;
        }
      }
    }else{
      alert("La fecha es incorrecta");
      return false;
    }
    //Se revisa el año
    if(year>=1868 && year<=2012){
    }else{
      alert("La fecha es incorrecta");
      return false;
    }
  }
  var usoCFDI = document.getElementById("usoCFDI").value;
  if(usoCFDI.length!=3){
    alert("El uso de CFDI es incorrecto");
    return false;
  }
}

function quantity() {
    var t1 = parseInt(document.getElementById("q1").value) * 1200;
    var t2 = parseInt(document.getElementById("q2").value) * 1400;
    var t3 = parseInt(document.getElementById("q3").value) * 1100;

	if (isNaN(t1))
		t1 = 0;
	if (isNaN(t2))
		t2 = 0;
	if (isNaN(t3))
		t3 = 0;

	document.getElementById("impuestos").innerHTML = "$" + (t1+t2+t3)*0.16 + ".00 MXN";
	document.getElementById("total").innerHTML = "$" + (t1+t2+t3)*1.16 + ".00 MXN";
}


$('#datepicker').datepicker({
uiLibrary: 'bootstrap4'
});

function date() {
	let str = document.getElementById("datepicker").value.split("/");
	let date_p = new Date(parseInt(str[2]),parseInt(str[0])-1,parseInt(str[1]));
	console.log(date_p);

	var diff = Math.floor(Date.now() - date_p.getTime());
    var day = 1000 * 60 * 60 * 24;

	var days = Math.floor(diff/day);

	document.getElementById("age").innerHTML = "<p>Tienes " + Math.floor(days/365)  + " años y " + Math.floor((days%365)/31) + " meses.";
}

document.getElementById("datepicker").onchange = date;
