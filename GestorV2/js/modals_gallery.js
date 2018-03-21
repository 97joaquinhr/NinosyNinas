function showDelete(filepath) {
    $('#delete').modal('show')
}

function showAdd() {
    $('#add').modal('show')
}

function preview(filepath, nombre) {
    $('#preview').modal('show');
    var imagen = "<img class='img img-fluid' src='" + filepath + "'>";
    $('#prev_imagen').html(imagen);
    $('#prev_nombre').text(nombre);

}

function edit() {
    $('#preview').modal('hide');
    $('#edit').modal('show');
}

function performClick(elemId) {
   var elem = document.getElementById(elemId);
   if(elem && document.createEvent) {
      var evt = document.createEvent("MouseEvents");
      evt.initEvent("click", true, false);
      elem.dispatchEvent(evt);
   }
}
