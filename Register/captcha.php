<?php

$str=md5(rand());
$str=substr($str,0,6);
session_start();
$_SESSION['capp']=$str;

$img=imagecreate(100,50);
imagecolorallocate($img,220,220,100);
$txtcol=imagecolorallocate($img,0,0,0);
imagestring($img,20,5,5,$str,$txtcol);
imagejpeg($img);
?>
