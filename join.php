<?php
$image1 = new Imagick('food1.png');
$image2 = new Imagick('food2.png');

// ‡¬
$image1->compositeImage( $image2, imagick::COMPOSITE_DEFAULT, 0, 0 );
 
header("Content-Type: image/png");
echo $image1;