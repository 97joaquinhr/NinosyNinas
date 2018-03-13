<?php
include("html/partials/_header.html")?>


        <div id="page-content-wrapper" class="shadow">
            <div class="container-fluid">
            <h2>Usuarios</h2>
                <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-bell-o"></i>Usuarios Actuales
                         <form class="form-inline">
                             <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                             <button class="btn btn-secondary" type="submit">Buscar</button>
                        </form>
                    </div>
                  <div class="list-group list-group-flush small">
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>Nombre:</strong> Jaun Ramon
                                </div>
                                <div class="col-sm">
                                    <strong>Telefono:</strong> 442 250 2651
                                </div>
                                <div class="col-sm">
                                    <strong>Email</strong> email@email.com
                                </div>
                            </div>
                            <strong>Rol: </strong> Administrador
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>Nombre:</strong> Jaun Ramon
                                </div>
                                <div class="col-sm">
                                    <strong>Telefono:</strong> 442 250 2651
                                </div>
                                <div class="col-sm">
                                    <strong>Email</strong> email@email.com
                                </div>
                            </div>
                            <strong>Rol: </strong> Editor
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>Nombre:</strong> Jaun Ramon
                                </div>
                                <div class="col-sm">
                                    <strong>Telefono:</strong> 442 250 2651
                                </div>
                                <div class="col-sm">
                                    <strong>Email</strong> email@email.com
                                </div>
                            </div>
                            <strong>Rol: </strong> Editor
                        </div>
                      </div>
                    </a>

                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-sm">
                                    <strong>Nombre:</strong> Jaun Ramon
                                </div>
                                <div class="col-sm">
                                    <strong>Telefono:</strong> 442 250 2651
                                </div>
                                <div class="col-sm">
                                    <strong>Email</strong> email@email.com
                                </div>
                            </div>
                            <strong>Rol: </strong> Editor
                        </div>
                      </div>
                    </a>
                    </div>
                </div>
                <!--BOTON AGREGAR USUARIO
                    Podría ser dark o secondary-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuario" data-whatever="@mdo">Nuevo usuario</button>

            </div>
            <!-- /#page-content-wrapper -->
            <footer class="bg-light mt-4 footer" style="position: absolute;">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="text-muted">Hecho con el editor <strong>Brackets</strong> - <a href="http://brackets.io/">http://brackets.io/</a></span>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3 text-right align-self-end">
                            Por <strong>Within Systems</strong>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    </div>



</body>

<div class="modal fade" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre y Apellido:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Telefono:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" class="form-control" id="recipient-name">
              <div class="py-2"></div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Rol</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Editor</option>
                  <option>Administrador</option>
                  <option>Financiero</option>
                </select>
              </div>
        </div>
    </form>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/simple-sidebar/js/simple-sidebar-toggle.js"></script>
	<script src="vendor/chart.js/js/Chart.bundle.js"></script>
	<script src="js/sb-admin-charts.js"></script>

    <script>
        $("#id-usuarios").addClass("active");
    </script>
</html>
