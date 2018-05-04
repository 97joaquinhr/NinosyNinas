var email, nombre, apellidoP, apellidoM, tel, dir, fechaN, idCFDI, RFC, metodo, obs, color;



function setCurrentVars(email, nombre, apellidoP, apellidoM, tel, dir, fechaN, idCFDI, RFC, metodo, obs, color){
    this.email = email;
    this.nombre = nombre;
    this.apellidoP = apellidoP;
    this.apellidoM = apellidoM;
    this.tel = tel;
    this.dir =dir;
    this.fechaN = fechaN;
    this.idCFDI = idCFDI;
    this.RFC = RFC;
    this.metodo = metodo;
    this.obs = obs;
    this.color = color;
    generateModal();
}
function generateModal(){
    document.getElementById('prev_nom').innerHTML = nombre + ' ' +apellidoP + ' ' +apellidoM;
    document.getElementById('prev_email').innerHTML = email;
    document.getElementById('prev_dir').innerHTML = dir;
    document.getElementById('prev_tel').innerHTML = tel;
    document.getElementById('prev_fechaN').innerHTML = fechaN;
    document.getElementById('prev_usoCFDI').innerHTML = idCFDI;
    document.getElementById('prev_RFC').innerHTML = RFC;
    document.getElementById('prev_metodo').innerHTML = metodo;
    $("#prev_metodo").css("background-color", color);
    console.log(color);
    document.getElementById('prev_obs').innerHTML = obs;

}

function generateEdit(){
    $('input[name="ed_nom"]').val(nombre);
    $('input[name="ed_apellidoP"]').val(apellidoP);
    $('input[name="ed_apellidoM"]').val(apellidoM);
    $('input[name="ed_RFC"]').val(RFC);
    $('input[name="ed_email"]').val(email);
    $('input[name="ed_dir"]').val(dir);
    $('input[name="ed_tel"]').val(tel);
    $('input[name="ed_fechaN"]').val(fechaN);
    $('input[name="ed_obs"]').val(obs);
    $('input[name="ed_usoCFDI"]').val(idCFDI);

}

function generateEliminar(){
    $('input[name="c_email"]').val(email);
    $('input[name="c_donador"]').val(nombre);
}

function deleteUserModal(id) {
    console.log(id);
    $('#user_id').attr('value', id);
}

function generateValidar(){
    $('input[name="v_email"]').val(email);
}

function editarPatronato(id) {
  var idi = id+"i";
  var data = '<textarea id="'+idi+'" class="form-control" rows="1">'+id+'</textarea>';
  document.getElementById(id).innerHTML = data;
  document.getElementById(id+"h").innerHTML = "Guardar Cambios";
  document.getElementById(id+"h").onclick = function () { ajaxPatronato(id); };
  //document.getElementById(id+"h").type = "submit";
}

function editarObjetivos(id) {
  var idi = id+"i";
  var data = '<textarea id="'+idi+'" class="form-control" rows="1">'+id+'</textarea>';
  document.getElementById(id).innerHTML = data;
  document.getElementById(id+"h").innerHTML = "Guardar Cambios";
  document.getElementById(id+"h").onclick = function () { ajaxObjetivos(id); };
  //document.getElementById(id+"h").type = "submit";
}

function editarProgramaSocial(id) {
  var idi = id+"i";
  var data = '<textarea id="'+idi+'" class="form-control" rows="1">'+id+'</textarea>';
  document.getElementById(id).innerHTML = data;
  document.getElementById(id+"h").innerHTML = "Guardar Cambios";
  document.getElementById(id+"h").onclick = function () { ajaxProgramaSocial(id); };
  //document.getElementById(id+"h").type = "submit";
}

function editarProgramaEdu(id) {
  var idi = id+"i";
  var data = '<textarea id="'+idi+'" class="form-control" rows="1">'+id+'</textarea>';
  document.getElementById(id).innerHTML = data;
  document.getElementById(id+"h").innerHTML = "Guardar Cambios";
  document.getElementById(id+"h").onclick = function () { ajaxProgramaEdu(id); };
  //document.getElementById(id+"h").type = "submit";
}

function editarPromoSo(titulo, desc) {
  var tituloi = titulo+"i";
  var desci = desc+"i";
  var data1 = '<textarea id="'+tituloi+'" class="form-control" rows="1">'+titulo+'</textarea>';
  var data2 = '<textarea id="'+desci+'" class="form-control" rows="5">'+desc+'</textarea>';
  document.getElementById(titulo).innerHTML = data1;
  document.getElementById(desc).innerHTML = data2;
  document.getElementById(desc+"h").innerHTML = "Guardar Cambios";
  document.getElementById(desc+"h").onclick = function () { ajaxPromoSo(titulo,desc); };
  // document.getElementById(id+"h").type = "submit";
}

function editarEdu(titulo, desc) {
  var tituloi = titulo+"i";
  var desci = desc+"i";
  var data1 = '<textarea id="'+tituloi+'" class="form-control" rows="1">'+titulo+'</textarea>';
  var data2 = '<textarea id="'+desci+'" class="form-control" rows="5">'+desc+'</textarea>';
  document.getElementById(titulo).innerHTML = data1;
  document.getElementById(desc).innerHTML = data2;
  document.getElementById(desc+"h").innerHTML = "Guardar Cambios";
  document.getElementById(desc+"h").onclick = function () { ajaxEdu(titulo,desc); };
  // document.getElementById(id+"h").type = "submit";
}

function editarDI(titulo, desc) {
  var tituloi = titulo+"i";
  var desci = desc+"i";
  var data1 = '<textarea id="'+tituloi+'" class="form-control" rows="1">'+titulo+'</textarea>';
  var data2 = '<textarea id="'+desci+'" class="form-control" rows="5">'+desc+'</textarea>';
  document.getElementById(titulo).innerHTML = data1;
  document.getElementById(desc).innerHTML = data2;
  document.getElementById(desc+"h").innerHTML = "Guardar Cambios";
  document.getElementById(desc+"h").onclick = function () { ajaxDI(titulo,desc); };
  // document.getElementById(id+"h").type = "submit";
}

function addVocal() {
  data= '<textarea id="nuevoVocal" class="form-control" rows="1" placeholder="Juan Carlos Espíndola Canuto"></textarea>'
  document.getElementById("añadir").innerHTML = data;
  document.getElementById("addbutton").innerHTML = "Guardar cambios";
  document.getElementById("addbutton").onclick = function () { añadirVocal(); };
}

function addObjetivo() {
  data= '<textarea id="nuevoObjetivo" class="form-control" rows="1" placeholder="En 2020 ser la empresa con más ventas a nivel nacional"></textarea>'
  document.getElementById("añadir").innerHTML = data;
  document.getElementById("addbutton").innerHTML = "Guardar cambios";
  document.getElementById("addbutton").onclick = function () { añadirObjetivo(); };
}

function addProgSo() {
  data= '<textarea id="nuevoObjetivo" class="form-control" rows="1" placeholder="En 2020 ser la empresa con más ventas a nivel nacional"></textarea>'
  document.getElementById("añadirProgSo").innerHTML = data;
  document.getElementById("addbuttonProgSo").innerHTML = "Guardar cambios";
  document.getElementById("addbuttonProgSo").onclick = function () { añadirProgSo(); };
}

function addProgEdu() {
  data= '<textarea id="nuevoPrograma" class="form-control" rows="1" placeholder="Talleres para pequeños genios"></textarea>'
  document.getElementById("añadirProgEdu").innerHTML = data;
  document.getElementById("addbuttonProgEdu").innerHTML = "Guardar cambios";
  document.getElementById("addbuttonProgEdu").onclick = function () { añadirProgEdu(); };
}

function ajaxPatronato(id){
  $.post("editar.php", {
    idInfo: document.getElementById(id+"a").value,
    input: document.getElementById(id+"i").value
  })
  .done(function(data){
    document.getElementById("TablaPatronato").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function ajaxObjetivos(id){
  $.post("editarObjetivos.php", {
    idInfo: document.getElementById(id+"a").value,
    input: document.getElementById(id+"i").value
  })
  .done(function(data){
    document.getElementById("TablaObjetivos").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function ajaxProgramaSocial(id){
  $.post("editarProgramaSocial.php", {
    idInfo: document.getElementById(id+"a").value,
    input: document.getElementById(id+"i").value
  })
  .done(function(data){
    document.getElementById("TablaProgramaSocial").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function ajaxProgramaEdu(id){
  $.post("editarProgramaEdu.php", {
    idInfo: document.getElementById(id+"a").value,
    input: document.getElementById(id+"i").value
  })
  .done(function(data){
    document.getElementById("programaEdu").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function ajaxPromoSo(titulo,desc){
  $.post("editarPromoSocial.php", {
    idInfo: document.getElementById(desc+"a").value,
    input1: document.getElementById(titulo+"i").value,
    input2: document.getElementById(desc+"i").value
  })
  .done(function(data){
    document.getElementById("PromoSocial").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function ajaxEdu(titulo,desc){
  $.post("editarEducation.php", {
    idInfo: document.getElementById(desc+"a").value,
    input1: document.getElementById(titulo+"i").value,
    input2: document.getElementById(desc+"i").value
  })
  .done(function(data){
    document.getElementById("Education").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function ajaxDI(titulo,desc){
  $.post("editarDI.php", {
    idInfo: document.getElementById(desc+"a").value,
    input1: document.getElementById(titulo+"i").value,
    input2: document.getElementById(desc+"i").value
  })
  .done(function(data){
    document.getElementById("DesarrolloInstitucional").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function añadirVocal(){
  $.post("addVocal.php", {
    Descripcion: document.getElementById("nuevoVocal").value
  })
  .done(function(data){
    document.getElementById("TablaPatronato").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function añadirObjetivo(){
  $.post("addObjetivos.php", {
    Descripcion: document.getElementById("nuevoObjetivo").value
  })
  .done(function(data){
    document.getElementById("TablaObjetivos").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function añadirProgSo(){
  $.post("addProgSo.php", {
    Descripcion: document.getElementById("nuevoObjetivo").value
  })
  .done(function(data){
    document.getElementById("TablaProgramaSocial").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function añadirProgEdu(){
  $.post("addProgEdu.php", {
    Descripcion: document.getElementById("nuevoPrograma").value
  })
  .done(function(data){
    document.getElementById("programaEdu").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function eliminarVocal(id){
  $.post("deleteVocal.php", {
    idInfo: id
  })
  .done(function(data){
    document.getElementById("TablaPatronato").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function eliminarObjetivo(id){
  $.post("deleteObjetivos.php", {
    idInfo: id
  })
  .done(function(data){
    document.getElementById("TablaObjetivos").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function eliminarProgramaSocial(id){
  $.post("deleteProgramaSocial.php", {
    idInfo: id
  })
  .done(function(data){
    document.getElementById("TablaProgramaSocial").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function eliminarProgramaEdu(id){
  $.post("deleteProgramaEdu.php", {
    idInfo: id
  })
  .done(function(data){
    document.getElementById("programaEdu").innerHTML = data;
    alert("Cambio Exitoso");
  });
}

function replaceHtml( string_to_replace ) {
    return string_to_replace.replace(/&nbsp;/g, ' ').replace(/<br.*?>/g, '\n');
}

function eliminarNoticia(id, titulo, imagen) {
    $("#idNoticia").val(id);
    $("#imagenNoticia").val(imagen);
    $("#tituloNoticia").html(titulo);
    $('#eliminarNoticia').modal('show');
}
function modificarNoticia(id, titulo, imagen, cuerpo) {
    $("#idNoticia_edit").val(id);
    $("#tituloNoticia_edit").val(titulo);
    $("#imagenNoticia_edit").attr("src",imagen);
    $("#cuerpoNoticia_edit").val(replaceHtml(cuerpo));
    $('#modificarNoticia').modal('show');
    $("#update-image").prop('required',false);
}

function deleteImageFromForm() {
    $("#current-image").addClass("sr-only");
    $("#image-input").removeClass("sr-only");
    $("#update-image").prop('required',true);
}
