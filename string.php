<?php
$file=$_GET['file'];
$image = new Imagick($file);
 
$draw = new ImagickDraw();
$draw->setFont('/usr/share/fonts/ipa-gothic/ipag.ttf');  //�t�H���g�t�@�C��
$draw->setFontSize('24');                    // �t�H���g�T�C�Y
$draw->setFillColor('#ff0000');              // �����F
$text=$_GET['str'];
$draw->annotation(10, 100, $text);
$image->drawImage($draw);
 
header("Content-Type: image/png");
ob_clean();
echo $image;