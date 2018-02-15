<?php
include("html/partials/_header.html");
//include("html/donar.html");
?>
<!--Esto va en el html pero no lo he metido porque quiero visualizarlo rapido-->
    
<div id="page-content-wrapper">  
    <div class="row wrapper">
        <div class="col-sm">
            <div class="jumbotron">
                <div class="wrapper">
                    <h2>Donar via PayPal</h2>
                    <br>
                    <!--Boton para donar en paypal-->
                    <button type="button" class="btn btn-primary">Dona</button>
                    <br>
                    <br>
                    
                    <p>Donación única a través de tu cuenta de paypal</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="jumbotron">
                <div class="wrapper">
                    <h2>Regístrate como donador</h2>
                    <br>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                      Regístrate
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5>Regístra tus datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <p>Escribe tus datos</p>
                              <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <p>Nos pondremos en contacto contigo en cuanto termines tu registro</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("html/partials/_footer.html");?>
