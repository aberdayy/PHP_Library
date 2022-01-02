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
array_unique()  :   dizinin icerisinde bulunan ve tekrarlanan elemanlarin fazla olanlarini silerek yeni bir dizi olusutrmak icin kullanilir.
*/
/*
$degerler   =   array("ataberk","mavi","masa","gokyuzu","ataberk","hakan","masa","volkan","volkan","kirmizi","bulut","ataberk");

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

$sonuc  =   array_unique($degerler);

echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------
*/
/*
$degerler   =   array("a1"=>"ataberk","a2"=>"mavi","a3"=>"masa","a4"=>"gokyuzu","a5"=>"ataberk","a6"=>"hakan","a7"=>"masa","a8"=>"volkan","a9"=>"volkan","a10"=>"kirmizi","a11"=>"bulut","a12"=>"ataberk");

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

$sonuc  =   array_unique($degerler);

echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
----------------------------------------------------------
*/

$degerler   =   array("ataberk",5,"mavi","masa",12.44,"gokyuzu",5,"ataberk",5,"hakan",12.44,59,"masa","volkan","volkan","kirmizi","bulut","ataberk");

echo "<pre>";
print_r($degerler);
echo "</pre><br />";

$sonuc  =   array_unique($degerler);

echo "<pre>";
print_r($sonuc);
echo "</pre><br />";











?>


</body>
</html>	