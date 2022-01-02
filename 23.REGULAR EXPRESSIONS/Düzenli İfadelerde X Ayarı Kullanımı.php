<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>baslik</title>
</head>
<body>
<?php 

/*
x   :  duzemli ifade dahilinmde kontrol edilecek olan icerigin,  desende bulunan boslugu etkisiz hale getirerek kontrol edilmesini saglar.
*/
/*
$metin = "ataberk erday, PHP egitim seti";
$desen = "/P H P/";
preg_match($desen,$metin,$sonuc);

echo "orjinal icerik : " . $metin . "<br />";

echo "desen :" . $desen. "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
================================================
*/

$metin = "ataberk erday, PHP egitim seti";
$desen = "/P H P/x";
preg_match($desen,$metin,$sonuc);

echo "orjinal icerik : " . $metin . "<br />";

echo "desen :" . $desen. "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";


















?>


</body>
</html>	