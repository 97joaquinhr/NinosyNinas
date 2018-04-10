<?php
set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\xampp\php\library');
require_once 'Zend/Loader.php';
Zend_Loader::loadClass('Zend_Gdata_Photos');
Zend_Loader::loadClass('Zend_Gdata_ClientLogin');
Zend_Loader::loadClass('Zend_Gdata_AuthSub');
$serviceName = Zend_Gdata_Photos::AUTH_SERVICE_NAME;
$user = "ninosyninasdemexico@gmail.com";
$pass = "educando130";

$client = Zend_Gdata_ClientLogin::getHttpClient($user, $pass, $serviceName);

// update the second argument to be CompanyName-ProductName-Version
$gp = new Zend_Gdata_Photos($client, "Ninosyninasdemexico-galeria-1.0");
$query = $gp->newAlbumQuery();

$query->setUser("default");
$query->setAlbumName("Prueba");

$albumFeed = $gp->getAlbumFeed($query);
foreach ($albumFeed as $albumEntry) {
    echo $albumEntry->title->text . "<br />\n";
}
?>
