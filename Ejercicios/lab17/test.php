<?php

require_once("modelo.php");
echo getRol('A00000001');

$privilegios = getPrivilegios(getRol('A00000001'));

print_r($privilegios);

?>
