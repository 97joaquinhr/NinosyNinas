function generateModal(email, nombre, apellidoP, apellidoM, tel, dir, fechaN, idCFDI,RFC, metodo, obs){

    document.getElementById('prev_nom').innerHTML = nombre + ' ' +apellidoP + ' ' +apellidoM;
    document.getElementById('prev_email').innerHTML = email;
    document.getElementById('prev_dir').innerHTML = dir;
    document.getElementById('prev_tel').innerHTML = tel;
    document.getElementById('prev_fechaN').innerHTML = fechaN;
    document.getElementById('prev_usoCFDI').innerHTML = idCFDI;
    document.getElementById('prev_RFC').innerHTML = RFC;
    document.getElementById('prev_metodo').innerHTML = metodo;
    document.getElementById('prev_obs').innerHTML = obs;
   // document.getElementById('prev_cfDesc').innerHTML = cfDesc;


}


