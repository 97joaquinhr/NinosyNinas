<?php
include("../../partials/_header.html");?>
<div id="page-content-wrapper" class="shadow">
    <!-- Navbar -->
    <!--Falta cambiar muchas cosas-->
    <div class="container-fluid">
        <h1>Consultar donador</h1>        
            <form>
                <div class="form-group">
                    <label for="emailD">Correo electronico</label>
                    <input type="email" class="form-control" id="emailD" aria-describedby="emailHelp" placeholder="Escribe correo electronico">
                    <small id="emailHelp" class="form-text text-muted">No compartiremos esto con nadie más.</small>
                </div>
                <div class="form-group">
                    <label for="emailD2">Confirmar correo</label>
                    <input type="email" class="form-control" id="emailD2" aria-describedby="emailHelp" placeholder="Escribe correo electronico">
                </div>
                <div class="form-group">
                    <label for="rfc">RFC</label>
                    <input class="form-control" id="rfc" aria-describedby="rfcHelp" placeholder="Registro federal de contribuyentes">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre(s)</label>
                    <input class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Nombre o nombres">
                </div>
                <div class="form-group">
                    <label for="apellidoP">Apellido paterno</label>
                    <input class="form-control" id="apellidoP" aria-describedby="apellidoPHelp" placeholder="Apellido paterno">
                </div>
                <div class="form-group">
                    <label for="apellidoM">Apellido materno</label>
                    <input class="form-control" id="apellidoM" aria-describedby="apellidoMHelp" placeholder="Apellido materno">
                </div>
                <div class="form-group">
                    <label for="rfc">Teléfono o Celular</label>
                    <input class="form-control" id="telefono" aria-describedby="telefonoHelp" placeholder="Teléfono">
                </div>
                <div class="container">
                    <input id="datepicker">
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
    </div>
</div>             
<?php
include("../../partials/_footer.html");
?>
