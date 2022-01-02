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
Ksort()     :  dizinin anahatarlarini buyuk/kucuk harf duyarli olacak sekilde a=z yada kucukten buyuge siralamak icin kullanilir.
Krsort()    :  dizinin anahatarlarini buyuk/kucuk harf duyarli olacak sekilde z-a yada buyukten kucukge siralamak icin kullanilir. 
*/

/*
$degerler   =   ["bir"=>"ataberk","iki"=>"hakan","uc"=>"sekan","dort"=>"furki","bes"=>"faruk","alti"=>"sinan","yedi"=>"selun","sekiz"=>"kopek"];

echo "<pre>";
print_r($degerler);
echo "<pre><br />";

ksort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre><br />";
---------------------------------------------------
*/
/*
$degerler   =   ["bir"=>"ataberk","iki"=>"hakan","uc"=>"sekan","dort"=>"furki","bes"=>"faruk","alti"=>"sinan","yedi"=>"selun","sekiz"=>"kopek"];

echo "<pre>";
print_r($degerler);
echo "<pre><br />";

krsort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre><br />";
-----------------------------------------------------
*/
/*
$degerler   =   [1=>"ataberk",2=>"hakan",3=>"sekan",412=>"furki",24=>"faruk",5756=>"sinan",878=>"selun",4=>"kopek"];

echo "<pre>";
print_r($degerler);
echo "<pre><br />";

ksort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre><br />";
--------------------------------------------------------
*/


$degerler   =   [1=>"ataberk",2=>"hakan",3=>"sekan",412=>"furki",24=>"faruk",5756=>"sinan",878=>"selun",4=>"kopek"];

echo "<pre>";
print_r($degerler);
echo "<pre><br />";

krsort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre><br />";




 























?>
</body>
</html>	