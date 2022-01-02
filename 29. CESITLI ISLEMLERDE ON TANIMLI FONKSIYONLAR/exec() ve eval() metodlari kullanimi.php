<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>ataberk erday php calisma gunlugu</title>
</head>
<body>
<?php
/*
eval()      :   belirtilecek olan icerigin PHP kodu olarak algilanmasini saglar ve kodu calistirarak olusan degeri geriye dondurur.
exec()      :   PHP dosyasi dahilinde belirtilecek olan komutu calistirir ve islem sonucunda buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
*/
/*
$metin = 'echo "ataberk erday";';
eval($metin);
-----------------------------------------------*/
/*
$icerik = "a'dan z'ye php gorsel egitim seti";
$egitmen = "ataberk erday";
$metin = 'izlediginiz ders, $icerik\'ne ait olup egitmenimiz $egitmen\'tir. ';


echo  $metin . "<br />";

eval("\$sonuc = \"$metin\";");

echo $sonuc;
-----------------------------------------------*/
/*
exec("ping google.com.tr",$sonuc);
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------------*/

exec("whoami",$sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";






?>
</body>
</html>	