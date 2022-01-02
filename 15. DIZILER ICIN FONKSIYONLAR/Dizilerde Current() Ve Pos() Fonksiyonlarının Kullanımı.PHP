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
current()   :   dizinin gostericisi konumundaki elemani bulmak icin kullanilir.

pos()       :dizinin gostericisi konumundaki elemani bulmak icin kullanilir.

*/
/*
$isimler    =   array("ataberk", "onur", "hakan");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$sonuc  =   current($isimler);
echo "dizninn gostericisi konumdaki elemanin degeri :" . $sonuc;
----------------------------------------------------------------
*/
/*
$isimler    =   array("isim"=>"ataberk","isim2"=> "onur","isim3"=> "hakan");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$sonuc  =   current($isimler);
echo "dizninn gostericisi konumdaki elemanin degeri :" . $sonuc;
-----------------------------------------------------------------

*/
/*
$isimler    =   array("ataberk", "onur",array("hale", "sule"), "hakan");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$sonuc  =   current($isimler);
echo "dizninn gostericisi konumdaki elemanin degeri :" . $sonuc;
----------------------------------------------------------------

*/

/*

$isimler    =   array(array("hale", "sule"),"ataberk", "onur", "hakan");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$sonuc  =   current($isimler);
echo "dizninn gostericisi konumdaki elemanin degeri :"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------------------------------
*/
/*
$isimler    =   array("ataberk", "onur",array("hale", "sule"), "hakan");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$sonuc  =   current($isimler[2]);
echo "dizninn gostericisi konumdaki elemanin degeri :" . $sonuc;
*/

//  CURRENT ICIN OLAN HERSEY POS ICINDE AYNIDIR!








?>


</body>
</html>	