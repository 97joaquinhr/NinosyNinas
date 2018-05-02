<?php
    session_start();
    require_once("modelo.php");
    require_once 'vendor/google-api-php-client-2.2.1/vendor/autoload.php';
    
    if (isset($_POST["id_token"]) && isset($_POST["rol"]) && $_SESSION["rol"] == "R01" ) {
        $id_token = $_POST["id_token"];
        $client = new Google_Client(['client_id' => "54504204460-s1s929a9k8mksj07ubsfds0k4atcgif0.apps.googleusercontent.com"]);  // Specify the CLIENT_ID of the app that accesses the backend
        $payload = $client->verifyIdToken($id_token);
        if ($payload) {
            // If request specified a G Suite domain:
            // $domain = $payload['hd'];
            if (signup($payload['sub'], $payload['name'], $payload['email'], $_POST["rol"])) {
                unset($_SESSION["error"]);
                echo "SUCCESS";
            } else {
                // ID token not registered
                $_SESSION["error"] = "Usuario no ha sido registrado";
                header("location: usuario.php");
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