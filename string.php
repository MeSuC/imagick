<?php
$file=$_GET['file'];
$image = new Imagick($file);
 
$draw = new ImagickDraw();
$draw->setFont('/usr/share/fonts/ipa-gothic/ipag.ttf');  //フォントファイル
$draw->setFontSize('24');                    // フォントサイズ
$draw->setFillColor('#ff0000');              // 文字色
$text=$_GET['str'];
$draw->annotation(10, 100, $text);
$image->drawImage($draw);
 
header("Content-Type: image/png");
ob_clean();
echo $image;