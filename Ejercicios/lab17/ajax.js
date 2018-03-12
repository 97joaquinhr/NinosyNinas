function cambiarMonto(id){
    $.post('cambiarVariable.php',{
        id: id
    })
    .done(function(data){
        document.getElementById('MTdiv').innerHTML = data;
    });
}