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
array_change_key_case() :   dizi icerisinde bulunan anahtar veya anahtarlarin buyuk/kucuk harf donusturme islemleri icin kullanilir. 
-----------------------------CASE_LOWER  HEPSI KUCUK HARF OLUR
-----------------------------CASE_UPPER  HEPSI BUYUK HARF
*/
$isimler   =    ["a1"=>"ataberk","a2"=>"volkan","a3"=>"serkan","a4"=>"furkan","a5"=>"ahmet"];

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc  =   array_change_key_case($isimler, CASE_UPPER);   

echo "<pre>";
print_r($sonuc);
echo "<pre>";

?>
</body>
</html>	