<?php

require_once("modelo.php");
echo getRol('A00000001');

$privilegios = getPrivilegios('A00000001');
foreach ($privilegios as $priv) {
    echo $priv;
    echo "\n";
}

?>
