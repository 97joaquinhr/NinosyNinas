<?php
    session_start();
    require_once("modelo.php");
    require_once 'vendor/google-api-php-client-2.2.1/vendor/autoload.php';
    
    if (isset($_POST["id_token"])) {
        $id_token = $_POST["id_token"];
        $client = new Google_Client(['client_id' => "54504204460-s1s929a9k8mksj07ubsfds0k4atcgif0.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
        $payload = $client->verifyIdToken($id_token);
        if ($payload) {
            // If request specified a G Suite domain:
            //$domain = $payload['hd'];
            if (login($payload['sub'])) {
                unset($_SESSION["error"]);
                $_SESSION['usuario'] = $payload['sub'];
                $_SESSION['nombre'] = $payload['given_name'];
                $_SESSION['apellido'] = $payload['family_name'];
                $_SESSION['email'] = $payload['email'];
                $_SESSION['image'] = $payload['picture'];
                $_SESSION['rol'] = getRol($payload['sub']);
                $_SESSION['funciones'] = getFunciones($_SESSION['rol']);
                echo "SUCCESS";
            } else {
                // ID token not registered
                $_SESSION["error"] = "Usuario no registrado";
                header("location: index.php");
            }
        } else {
            // Invalid ID token
            $_SESSION["error"] = "Google Token invalido";
            header("location: index.php");
        }
    } else {
        // No ID token received
        $_SESSION["error"] = "Google Token no recibido";
        unset($_SESSION["usuario"]);
        header("location: index.php");
    }
?>