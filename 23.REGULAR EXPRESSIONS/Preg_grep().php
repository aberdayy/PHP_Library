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
Preg_grep() : kendisine parametre olarak verilen duzenli ifadeli deger dogrultusunda dizi icerigii kontrol eder ve aranan deger yada degerlerin eslesmesi ddurumunda eslesmeyi saglayan icerigin deger yada degrlerinden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
*/
/*
$degerler = [22,12,143,252,82,104];
$desen = "/2/";
$sonuc  =   preg_grep($desen, $degerler);

echo "dizinin orjinal hali : <br />";
echo "<pre>";
print_r($degerler);
echo "</pre>";

echo "eslesen degerlerden olusan yeni dizi : <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
------------------------------------------
*/

$degerler = [22,"ataberk","volkan",12,143,"onur",252,"hakan","serkan",82,"levent",104];
$desen = "/kan/";
$sonuc  =   preg_grep($desen, $degerler);

echo "dizinin orjinal hali : <br />";
echo "<pre>";
print_r($degerler);
echo "</pre>";

echo "eslesen degerlerden olusan yeni dizi : <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";




?>


</body>
</html>	