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
array_column()      :   cok boyutlu bir dizi icerisinde bulunan eleman veya elemanlari bilertilecek olan anahtar kosullarina gore bicimlendirerek yeni bir dizi olusturmak icin kullaniir.
*/
/*
$takimlar       =   array (array("kurulus yili"=> "1907","takim adi"=>"fenerbahce"), array("kurulus yili"=> "1905","takim adi"=>"galatsaray"),array("kurulus yili"=> "1903","takim adi"=>"besiktas"));

echo "<pre>";
print_r($takimlar);
echo "</pre>";

$sonuc  =   array_column($takimlar, "takim adi");


echo "<pre>";
print_r($sonuc);
echo "</pre>";
------------------------------------------------
*/
/*
$takimlar       =   array (array("kurulus yili"=> "1907","takim adi"=>"fenerbahce"), array("kurulus yili"=> "1905","takim adi"=>"galatsaray"),array("kurulus yili"=> "1903","takim adi"=>"besiktas"));

echo "<pre>";
print_r($takimlar);
echo "</pre>";

$sonuc  =   array_column($takimlar, "kurulus yili");


echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------------
*/

$takimlar       =   array (array("kurulus yili"=> "1907","takim adi"=>"fenerbahce"), array("kurulus yili"=> "1905","takim adi"=>"galatsaray"),array("kurulus yili"=> "1903","takim adi"=>"besiktas"));

echo "<pre>";
print_r($takimlar);
echo "</pre>";

$sonuc  =   array_column($takimlar, "takim adi", "kurulus yili"); //ilk yazilan deger eleman, sonraki deger ise anahtar kismina eklenir.


echo "<pre>";
print_r($sonuc);
echo "</pre>";










?>


</body>
</html>	