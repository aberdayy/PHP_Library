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
array_keys()        :   dizinin anahtarlarini alip yeni bir dizi olusutrmak icin kullanilir
array_values()      :   dizinin elemanlarini alip yeni bir dizi olusutrmak icin kullanilir
*/
/*
$isimler        =   array("ataberk"=>"php","volkan"=>"css","onur"=>"html","serkan"=>"js");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_keys($isimler);

echo "<pre>";
print_r($islem);
echo "</pre>";
-----------------------------------------------------------
*/
/*
$isimler        =   array("ataberk"=>"php","volkan"=>"css","onur"=>"html","serkan"=>"js");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_keys($isimler,"php");

echo "<pre>";
print_r($islem);
echo "</pre>";
--------------------------------------------------------
*/

/*
$isimler        =   array("ataberk"=>"php","volkan"=>"php","onur"=>"php","serkan"=>"js");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_keys($isimler,"php");

echo "<pre>";
print_r($islem);
echo "</pre>";
---------------------------------------------------------
*/
/*
$isimler        =   array("ataberk"=>"php","volkan"=>"css","onur"=>"html","serkan"=>"js");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_values($isimler);

echo "<pre>";
print_r($islem);
echo "</pre>";
--------------------------------------------------------------
*/
/*
$isimler        =   array("ataberk"=>"php","volkan"=>"php","onur"=>"php","serkan"=>"js");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_values($isimler);

echo "<pre>";
print_r($islem);
echo "</pre>";
--------------------------------------------------------
*/

$isimler        =   array("php","html","css","js");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_values($isimler);

echo "<pre>";
print_r($islem);
echo "</pre>";





?>


</body>
</html>	