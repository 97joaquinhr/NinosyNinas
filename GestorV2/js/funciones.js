var email, nombre, apellidoP, apellidoM, tel, dir, fechaN, idCFDI, RFC, metodo, obs;



function setCurrentVars(email, nombre, apellidoP, apellidoM, tel, dir, fechaN, idCFDI, RFC, metodo, obs){
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
    $('#user_id').attr('value', id)
}  

function generateValidar(){
    $('input[name="v_email"]').val(email);
}

