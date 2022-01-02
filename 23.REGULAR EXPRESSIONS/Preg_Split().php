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
preg_split()   :   kendisine parametre olarak verilen duzenli ifadeli deger dogrultusunda icerigi kontrol eder ve eslesmeyi saglayan deger yada degerlerden icerigi bolumleyerek yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
*/
/*
$icerik = "merhaba benim adim ataberk erday.  ben bir front end developerim. beni facebook uzerinden ataberk erday olarak arayarak bulabilirsiniz";
$desen = "/ /";
$sonuc = preg_split($desen, $icerik); 

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------
*/
/*
$icerik = "merhaba benim adim ataberk erday.  ben bir front end developerim. beni facebook uzerinden ataberk erday olarak arayarak bulabilirsiniz";
$desen = "//";
$sonuc = preg_split($desen, $icerik); 

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------
*/

$icerik = "merhaba benim adim ataberk erday. ben bir front end developerim. beni facebook uzerinden ataberk erday olarak arayarak bulabilirsiniz";
$desen = "//u";//u harfi kullanimi turkce karakterleri gosterebiliriz.
$sonuc = preg_split($desen, $icerik); 

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";










?>


</body>
</html>	