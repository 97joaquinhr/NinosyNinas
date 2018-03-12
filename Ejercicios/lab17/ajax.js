function cambiarMonto(id){
    switch(id){
            case 'MT':
                var min = document.getElementById("MontMin").value;
                var max = document.getElementById("MontMax").value;
                var nombreTN = '';
                var nombreC = '';
            break;
            case 'TN':
                var min = 0;
                var max = 0;
                var nombreTN = document.getElementById("NombreTN").value;
                var nombreC = '';
            break;
            case 'C':
                var min = 0;
                var max = 0;
                var nombreTN = '';
                var nombreC = document.getElementById("NombreC").value;
            break;
            default:
            break;
        }
    $.post('cambiarVariable.php',{
        id: id,
        min: min,
        max: max,
        nombreTN: nombreTN,
        nombreC: nombreC
    })
    .done(function(data){
        document.getElementById('ConsultaSession').innerHTML = data;
    });
}