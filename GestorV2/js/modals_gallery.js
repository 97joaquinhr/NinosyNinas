function showDelete(nombre) {
    var boton = "<a href='eliminar_galeria.php?q=" + nombre + "' class='btn btn-danger'>Eliminar</button>"
    $('#del_nombre').html(nombre);
    $('#del_button').html(boton);
    $('#delete').modal('show');
}

function showAdd() {
    $('#add').modal('show')
}

function preview(filepath, nombre) {
    var imagen = "<img class='img img-fluid' src='" + filepath + "'>";
    $('#prev_imagen').html(imagen);
    $('#prev_nombre').html(nombre);
    $('#preview').modal('show');

}

function performClick(elemId) {
   var elem = document.getElementById(elemId);
   if(elem && document.createEvent) {
      var evt = document.createEvent("MouseEvents");
      evt.initEvent("click", true, false);
      elem.dispatchEvent(evt);
   }
}
