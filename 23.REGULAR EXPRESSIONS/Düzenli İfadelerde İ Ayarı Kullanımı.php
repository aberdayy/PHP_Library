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
i  :  duzenli ifade dahilinde kontrol edilecek olan icerigin buyuk/ kucuk harf ayrimi olmaksizin kontrol edilmesini saglar.
*/
/*
$deger = "Merhaba ben Ataberk. Ben bir front End developerim beni facebook uzerinden Ataberk erday olarak bulabillirisniz. ";
$desen = "/ataberk/i";
$islem = preg_match_all($desen, $deger, $sonuc);

echo "orjinal icerik : " . $deger  ."<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------
*/
$deger = "Merhaba ben Ataberk. Ben bir front End developerim beni facebook uzerinden Ataberk erday olarak bulabillirisniz. ";
$desen = "/ataberk/i";
$degistir = "sadik";
$sonuc = preg_replace($desen, $degistir, $deger);

echo "orjinal icerik : " . $deger  ."<br />";
echo "degisen icerik : " . $sonuc  ."<br />";




















?>


</body>
</html>	