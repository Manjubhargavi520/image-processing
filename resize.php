<?php
/* Author: Shekhar Joshi-trendin.com
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

$filename = $_SESSION['uploadedImage'];
//$widFactor=$_REQUEST['widFactor'];
//$heiFactor=$_REQUEST['heiFactor'];

$widFactor=1;
$heiFactor=1;

// Get new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width * $widFactor;
$new_height = $height * $heiFactor;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width-500, $height-500   );

// Output
imagejpeg($image_p, "resize/".explode("/",$_SESSION['uploadedImage'])[1]);
//echo '<img src="data:image/jpeg;base64,' . base64_encode(ob_get_clean()) . '">';
echo 'tjs';
