function visualizarNoticia(titulo, imagen,cuerpo) {
    $("#tituloNoticia").html(titulo);
    url="../GestorV2/";
    $("#imagenNoticia").attr("src",url+imagen);
    $("#cuerpoNoticia").html(cuerpo);
    $('#visualizarNoticia').modal('show');
}