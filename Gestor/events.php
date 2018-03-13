
<?php
include("html/partials/_header.html")?>



        <!-- Page Content -->
        <div id="page-content-wrapper" class="shadow">
            <div class="container-fluid">
                <h2>Programación de Eventos</h2>
                <div class="row">
                    <div class="col-lg-9">
                        <div id="archivos" class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col mt-2">
                                        <i class="far fa-calendar-alt fa-fw"></i> Calendario
                                    </div>
                                    <div class="col">
                                        <div class="float-right">
                                            <button type="button" class="btn btn-danger mx-3" data-toggle="tooltip" data-placement="top" title="Eliminar evento">Eliminar <i class="fas fa-trash-alt"></i></button>
                                            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Agregar nuevo evento">Agregar <i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="calendar">
                                <img src="images/cal.png" class="img img-fluid">
                            </div>
                            <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <!-- Example Notifications Card-->
                        <div class="card mb-3">
                          <div class="card-header">
                            <i class="fas fa-history"></i> Reciente</div>
                          <div class="list-group list-group-flush small">
                            <a class="list-group-item list-group-item-action" href="#">
                              <div class="media">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                <div class="media-body">
                                  <strong>Juan Pablo</strong> agrego un nuevo evento.
                                  <div class="text-muted smaller">Hoy a las 5:43 PM - Hace 5 minutos</div>
                                </div>
                              </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                              <div class="media">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                <div class="media-body">
                                  <strong>Samantha King</strong> agrego un nuevo evento.
                                  <div class="text-muted smaller">Hoy a las 4:37 PM - Hace 1 minutos</div>
                                </div>
                              </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                              <div class="media">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                <div class="media-body">
                                  <strong>Jeffery Wellings</strong> agrego un nuevo evento.
                                  <div class="text-muted smaller">Hoy a las 4:31 PM - Hace 1 minutos</div>
                                </div>
                              </div>
                            </a>
                            <a class="list-group-item list-group-item-action" href="#">
                              <div class="media">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                                <div class="media-body">
                                  <i class="fa fa-code-fork"></i>
                                  <strong>Monica Dennis</strong> agrego un nuevo evento.
                                  <div class="text-muted smaller">Hoy a las 3:54 PM - Hace 2 minutos</div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- /#page-content-wrapper -->
            <footer class="bg-light mt-4 footer">
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
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/simple-sidebar/js/simple-sidebar-toggle.js"></script>
	<script src="vendor/chart.js/js/Chart.bundle.js"></script>
    <script src="js/tooltips.js"></script>
    <script src="js/modals.js"></script>
    <script>
        $("#id-eventos").addClass("active");
    </script>

</body>

</html>
