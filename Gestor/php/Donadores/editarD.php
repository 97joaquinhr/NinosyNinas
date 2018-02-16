<?php
include("../../partials/_header.html");?>
<div id="page-content-wrapper" class="shadow">
    <!-- Navbar -->
    <!--Falta cambiar muchas cosas-->
    <div class="container-fluid">
        <h1>Editar donador</h1>
            <form>
                <div class="form-group">
                    <label for="nombre">Nombre(s)</label>
                    <input class="form-control" id="nombre" aria-describedby="nombreHelp" value="Juan Carlos">
                </div>
                <div class="form-group">
                    <div class="form-group">
                    <label for="apellidoP">Apellido paterno</label>
                    <input class="form-control" id="apellidoP" aria-describedby="apellidoPHelp" value="Garzón">
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellidoM">Apellido materno</label>
                    <input class="form-control" id="apellidoM" aria-describedby="apellidoMHelp" value="Rincón Gallardo">
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input class="form-control" id="rfc" aria-describedby="rfcHelp" value="GARJ500112MP4">
                </div>
                <div class="form-group">
                    <label for="emailD">Correo Electrónico</label>
                    <input type="email" class="form-control" id="emailD" aria-describedby="emailHelp" value="jgarzon@marhnos.com.mx">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input class="form-control" id="direccion" aria-describedby="direccionHelp" value="Calle Laureles #221, Colonia Jurica, 76060, Querétaro.">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono o Celular</label>
                    <input class="form-control" id="telefono" aria-describedby="telefonoHelp" value="442 235 5641">
                </div>
                <label for="fechaN">Fecha de nacimiento</label>
                <input id="datepicker" value="12/01/1950">
                <label for="MetodoPago">Metodo de pago</label>
                <select class="form-control">
                    <option>Tarjeta de crédito</option>
                    <option>Transferencia</option>
                    <option>Cheque</option>
                    <option>Otro</option>
                </select>
                <div class="form-group">
                    <label for="numeroC">Número de cuenta</label>
                    <input class="form-control" id="numeroC" aria-describedby="numeroCHelp" value="5491 3888 7544 7025">
                </div>
                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <input class="form-control" id="observaciones" aria-describedby="observacionesHelp" value="Fecha de vencimiento: 06/18">
                </div>
                <div class="form-group">
                    <label for="usoCFDI">Uso CFDI</label>
                    <input class="form-control" id="usoCFDI" aria-describedby="usoCFDIHelp" value="G03">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
                <a href="consultaD.php" class="btn btn-secondary">Cancelar</a>
            </form>
    </div>
<?php
include("../../partials/_footer.html");
?>

<script>
    $("#id-donadores").addClass("active");
</script>

</div>
