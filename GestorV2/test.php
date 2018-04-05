<?php
$url='uploads/gallery/1522890068test2.png';
$thurl = substr_replace($url, "thurl/", 16, 0);
$thurl=substr($thurl,0,-4);
echo $thurl;
//$file = "uploads/gallery/1522541057Captura.png";
//if (!unlink($file))
//{
//    echo ("Error deleting $file");
//}
//else
//{
//    echo ("Deleted $file");
//}
