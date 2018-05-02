function showDelete() {
    $('#delete').modal('show')
}

function showAdd() {
    $('#add').modal('show')
}

function preview() {
    $('#preview').modal('show')
}

function edit() {
    generateEdit();
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
