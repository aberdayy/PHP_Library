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
array_pad()     :   dizinin eleman veya elemanlar sayisini baz alarak belirtilecek olan degerler dogrultusunda bastan veya sondan doldurma islemi yaparak yeni bir dizi olusturmak icin kullanilir.
*/
/*
$degerler   =   array("volka","hakan","onur");

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


$sonuc  =   array_pad($degerler, 10, "ataberk erday");


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";

----------------------------------------------------------
*/
/*
$degerler   =   array("a1"=>"volka","a2"=>"hakan","a3"=>"onur");

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


$sonuc  =   array_pad($degerler, 10, "ataberk erday"); //somdam doldurma


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
----------------------------------------------------------
*/
$degerler   =   array("volka","hakan","onur");

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


$sonuc  =   array_pad($degerler, -10, "ataberk erday");//bastan doldurma


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";

//anahtar degerleri her kosulda korunabilir.




?>


</body>
</html>	