function showDelete(nombre) {
    $('#del_nombre').html(nombre);
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
