<?php
include("html/partials/_header.html");
//include("html/donar.html");
?>
<!--Esto va en el html pero no lo he metido porque quiero visualizarlo rapido-->
    
<div id="page-content-wrapper">  
    <div class="row wrapper">
        <div class="col-sm-4 col-lg-6">
            <div class="card">
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
        <div class="col-sm-4 col-lg-6">
            <div class="card">
                <div class="wrapper">
                    <h2>Regístrate como donador</h2>
                    <br>
                    <!-- Button trigger modal -->
                    <a class="btn btn-primary" href="php/registrarDonador.php" role="button">
                      Regístrate
                    </a>

                    <p>Nos pondremos en contacto contigo en cuanto termines tu registro</p>
            </div>
        </div>
    </div>
</div>
<?php include("html/partials/_footer.html");?>
