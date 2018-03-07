
<?php
include("html/partials/_header.html")?>


        <!-- Page Content -->
        <div id="page-content-wrapper" class="shadow">
            <!-- Navbar -->
            <div class="container-fluid">
                 <h2>Noticias</h2>
                 <div class="row">
                     <div class="col-8 col-lg-9">
                         <div class="card mb-3">
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
                         </div>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newArticle">Nueva Publicación</button>
                     </div>
                     <div class="col-4 col-lg-3">
                         <div class="card text-center">
                             <div class="card-header">
                                 Reciente
                             </div>
                             <div class="card-body">
                                 <img class="img-fluid" alt="tweets" src="http://www.ashokraja.me/image.axd?picture=image_thumb_24.png"></img>
                             </div>
                             <div class="card-footer"></div>
                         </div>
                     </div>
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

    <div class="modal fade" id="newArticle">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Nueva Noticia</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="usr"><h4>Título:</h4></label>
                        <input type="text" class="form-control" id="usr" placeholder="NOTICIA123">
                    </div>
                    <label for="comment"><h4>Contenido:</h4></label>
                    <textarea class="form-control" rows="5" id="titulo-noticia" placeholder="¿Qué opinas?¿Quieres informar algo?"></textarea>
                    <h4>Agregar Imágen?</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button onclick="performClick('theFile');" class="btn btn-outline-secondary" type="button">Buscar</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <input type="file" id="theFile" class="sr-only">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Subir</button>
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

    <script>
        $("#id-noticias").addClass("active");
    </script>

</body>

</html>
