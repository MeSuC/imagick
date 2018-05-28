<?php
$sprite1=$_GET['file1'];
$sprite2=$_GET['file2'];
$image1 = new Imagick($sprite1);
$image2 = new Imagick($sprite2);

// ‡¬
$image1->compositeImage( $image2, imagick::COMPOSITE_DEFAULT, 0, 0 );
 
header("Content-Type: image/png");
ob_clean();
echo $image1;