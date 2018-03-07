<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>LAB 13: Sesiones</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/manager.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Saira+Condensed|Yanone+Kaffeesatz" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="bg-dark">
        <div class="container mx-auto">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Iniciar Sesión</div>
                <div class="card-body">
                    <img src="images/logo_notext.png" class="img img-fluid">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Correo Electrónico</label>
                            <input name="usuario" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input name="remember" class="form-check-input" type="checkbox"> Recordar</label>
                            </div>
                        </div>
                    </form>
                    <a class="btn btn-primary btn-block" href="dashboard.php">Enviar</a>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="forgot-password.html">Olvidaste tu clave?</a>
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
        <script src="vendor/smooth-scroll/js/smooth-scroll.js"></script>
    </body>
</html>
