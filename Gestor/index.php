<?php
include("html/partials/_header.html")?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="shadow">
            <div class="container-fluid">
                <h1>Dashboard</h1>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">9</span> Nuevos Comentarios!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-id-card"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">10</span> Donadores por validar!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="far fa-newspaper"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">5</span> Noticias nuevas!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="far fa-calendar-alt"></i>
                                </div>
                                <div class="mr-5"><span class="badge badge-dark">2</span> Eventos este mes!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Ver Detalles</span>
                                <span class="float-right"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                  <div class="card-header">

                      <i class="fas fa-fw fa-id-card"></i>Donadores Registrados</div>
                  <div class="card-body">
                    <canvas id="myAreaChart" width="100%" height="30"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <!-- Example Bar Chart Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-chart-line"></i> Visitas al sitio</div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-8 my-auto">
                            <canvas id="myBarChart" width="100" height="50"></canvas>
                          </div>
                          <div class="col-sm-4 text-center my-auto">
                            <div class="h4 mb-0 text-primary">10230</div>
                            <div class="small text-muted">Visitas Anuales</div>
                            <hr>
                            <div class="h4 mb-0 text-warning">3074</div>
                            <div class="small text-muted">Visitas del Trimestre</div>
                            <hr>
                            <div class="h4 mb-0 text-success">1403</div>
                            <div class="small text-muted">Visitas del Mes</div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                    </div>
                    <!-- Card Columns Example Social Feed-->
                    <div class="mb-0 mt-4">
                      <i class="fa fa-newspaper-o"></i> News Feed</div>
                    <hr class="mt-2">
                    <div class="card-columns">
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                          <p class="card-text small">These waves are looking pretty good today!
                            <a href="#">#surfsup</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body small bg-faded">
                          <div class="media">
                            <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                              <div class="media mt-3">
                                <a class="d-flex pr-3" href="#">
                                  <img src="http://placehold.it/45x45" alt="">
                                </a>
                                <div class="media-body">
                                  <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                                  <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                      <a href="#">Like</a>
                                    </li>
                                    <li class="list-inline-item">·</li>
                                    <li class="list-inline-item">
                                      <a href="#">Reply</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Posted 32 mins ago</div>
                      </div>
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                          <p class="card-text small">Another day at the office...
                            <a href="#">#workinghardorhardlyworking</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body small bg-faded">
                          <div class="media">
                            <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Posted 46 mins ago</div>
                      </div>
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                          <p class="card-text small">Nice shot from the skate park!
                            <a href="#">#kickflip</a>
                            <a href="#">#holdmybeer</a>
                            <a href="#">#igotthis</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <div class="card-footer small text-muted">Posted 1 hr ago</div>
                      </div>
                      <!-- Example Social Card-->
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                        </a>
                        <div class="card-body">
                          <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                          <p class="card-text small">It's hot, and I might be lost...
                            <a href="#">#desert</a>
                            <a href="#">#water</a>
                            <a href="#">#anyonehavesomewater</a>
                            <a href="#">#noreally</a>
                            <a href="#">#thirsty</a>
                            <a href="#">#dehydration</a>
                          </p>
                        </div>
                        <hr class="my-0">
                        <div class="card-body py-2 small">
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                          <a class="mr-3 d-inline-block" href="#">
                            <i class="fa fa-fw fa-comment"></i>Comment</a>
                          <a class="d-inline-block" href="#">
                            <i class="fa fa-fw fa-share"></i>Share</a>
                        </div>
                        <hr class="my-0">
                        <div class="card-body small bg-faded">
                          <div class="media">
                            <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>The oasis is a mile that way, or is that just a mirage?
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                              <div class="media mt-3">
                                <a class="d-flex pr-3" href="#">
                                  <img src="http://placehold.it/45x45" alt="">
                                </a>
                                <div class="media-body">
                                  <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                                  <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">I'm saved, I found a cactus. How do I open this thing?
                                  <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                      <a href="#">Like</a>
                                    </li>
                                    <li class="list-inline-item">·</li>
                                    <li class="list-inline-item">
                                      <a href="#">Reply</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-footer small text-muted">Posted yesterday</div>
                      </div>
                    </div>
                    <!-- /Card Columns-->
                  </div>
                  <div class="col-lg-4">
                    <!-- Example Pie Chart Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="far fa-money-bill-alt"></i> Donadores por metodo de pago</div>
                      <div class="card-body">
                        <canvas id="myPieChart" width="100%" height="100"></canvas>
                      </div>
                      <div class="card-footer small text-muted">Actualizado hace 5 minutos</div>
                    </div>
                    <!-- Example Notifications Card-->
                    <div class="card mb-3">
                      <div class="card-header">
                        <i class="fas fa-history"></i> Reciente</div>
                      <div class="list-group list-group-flush small">
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <strong>Juan Pablo</strong> publico el nuevo articulo
                              <strong>"Salud en la infancia"</strong>.
                              <div class="text-muted smaller">Hoy a las 5:43 PM - Hace 5 minutos</div>
                            </div>
                          </div>
                        </a>
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <strong>Samantha King</strong> escribio un comentario!
                              <div class="text-muted smaller">Hoy a las 4:37 PM - Hace 1 minutos</div>
                            </div>
                          </div>
                        </a>
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <strong>Jeffery Wellings</strong> quiere ser un donador recurrente!
                              <div class="text-muted smaller">Hoy a las 4:31 PM - Hace 1 minutos</div>
                            </div>
                          </div>
                        </a>
                        <a class="list-group-item list-group-item-action" href="#">
                          <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                            <div class="media-body">
                              <i class="fa fa-code-fork"></i>
                              <strong>Monica Dennis</strong>forked the
                              <strong>startbootstrap-sb-admin</strong>repository on
                              <strong>GitHub</strong>.
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
            <footer class="bg-light mt-4">
                <div class="container-fluid py-4">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="text-muted">Hecho con el editor <strong>Brackets</strong> - <a href="http://brackets.io/">http://brackets.io/</a></span>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-3 text-right align-self-end">
                            Por <strong>Juan Pablo Pino</strong>
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
	<script src="js/sb-admin-charts.js"></script>
    <script>
        $("#id-dashboard").addClass("active");
    </script>

</body>

</html>
