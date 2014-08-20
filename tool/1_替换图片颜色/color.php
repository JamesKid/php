<?php 
$img = file_get_contents('http://图片地址');
$im = imagecreatefromstring($img);
$bg = imagecolorat($im, 0, 0);
imagecolorset($im, $bg, 0, 0, 255);
imagepng($im);
imagedestroy($im);

?>
