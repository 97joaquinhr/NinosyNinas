<<<<<<< HEAD:Gestor/news.php
<?php
include("html/partials/_header.html")?>
=======
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/manager.css" rel="stylesheet">
        <link href="vendor/simple-sidebar/css/simple-sidebar.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Saira+Condensed|Yanone+Kaffeesatz|Exo:800|Jaldi:700|Source+Sans+Pro:300" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        <title>TEST</title>
    </head>
<body class="bg-dark">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark mt-2">
        <a class="navbar-brand" href="#">Niños y Niñas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#menu-toggle" class="nav-link" id="menu-toggle"><i id="menu-toggle-dir" class="fas fa-caret-left"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fas fa-sign-out-alt fa-fw"></i>Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="py-2"></div>

    <div class="py-2"></div>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><div class="container-fluid"><img src="images/logo.png" class="img img-fluid" alt=""></div></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-tachometer-alt mr-4 fa-fw"></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-id-card mr-4 fa-fw"></i>Donadores</a>
                </li>
                <li>
                    <a href="#" class="active"><i class="far fa-newspaper mr-4 fa-fw"></i>Noticias</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-images mr-4 fa-fw"></i>Galería</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-user-circle mr-4 fa-fw"></i>Usuarios</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" class="shadow">
            <!-- Navbar -->
            <div class="container-fluid">
                 <h1>NOTICIAS <i class="fas fa-search"></i></h1>
                 <div class="row">
                     <div class="col-8 col-lg-9"><hr/></div>
                 </div>
                 <div class="row">
                     <div class="col-8 col-lg-9">
                         <div class="card text-center">
                             <div class="card">
                                <div class="card-block">
                                    <div class="card-title"></div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="usr">Título:</label>
                                            <input type="text" class="form-control" id="usr" placeholder="NOTICIA123">
                                        </div>
                                        <label for="comment">Noticia:</label>
                                        <textarea class="form-control" rows="5" id="titulo-noticia" placeholder="¿Qué opinas?¿Quieres informar algo?"></textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-primary">Subir</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                             </div>
                             <p></p>
                             <div class="card-header">
                                 Búsqueda
                             </div>
                             <div class="card-body">
                                <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Título</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-toggle="modal" data-target="#myModal">
                                        <td colspan="2">Precampañas 2018</td>
                                        <td>13/02/18</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Niños y Niñas de México, la mejor fundación</td>
                                        <td>01/01/18</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">The Pope in México</td>
                                        <td>12/05/16</td>
                                    </tr>
                                </tbody>
                                </table>
                             </div>
                             <div class="card-footer"></div>
                         </div>
                     </div>
                     <div class="col-4 col-lg-3">
                         <div class="card text-center">
                             <div class="card-header">
                                 RECIENTE
                             </div>
                             <div class="card-body">
                                 <img class="img-fluid" alt="tweets" src="http://www.ashokraja.me/image.axd?picture=image_thumb_24.png"></img>
                             </div>
                             <div class="card-footer"></div>
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
    
    <!-- Modal Consultar -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Precampañas 2018</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <img class="img-thumbnail" src="http://cdn2.excelsior.com.mx/media/styles/imagen_portada_grande/public/pictures/2018/02/15/1861056.jpg" class="img-thumbnail" alt="Elecciones 2018">
                    <p><strong>PRECAMPAÑAS: ATAQUES MÁS QUE PROPUESTAS; 35% piensa que AMLO fue más propositivo</strong><br>
                    74% Considera que fueron de poca o nula utilidad para conocer a los abanderados de los partidos; 45% señaló
                        que Anaya se centró más en</p>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Más Info..</button>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" data-dismiss="modal">Editar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Modal Editar -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="form-group">
                <label for="comment">Título:</label>
                <textarea class="form-control" rows="5" id="titulo-noticia" value="Precampañas 2018" placeholder="Precampañas 2018"></textarea>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body modal-scrollable">
            <div class="form-group">
                <label for="comment">Contenido:</label>
                <textarea class="form-control" rows="5" id="titulo-noticia" value="<strong>PRECAMPAÑAS: ATAQUES MÁS QUE PROPUESTAS; 35% piensa que AMLO fue más propositivo</strong><br>
                    74% Considera que fueron de poca o nula utilidad para conocer a los abanderados de los partidos; 45% señalóque Anaya se centró más en" placeholder="PRECAMPAÑAS: ATAQUES MÁS QUE PROPUESTAS; 35% piensa que AMLO fue máspropositivo74% Considera que fueron de poca o nula utilidad para conocer a los abanderados de los partidos; 45% señaló que Anaya se centró más en"></textarea>
            </div>                                                                      
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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

</body>

</html>
