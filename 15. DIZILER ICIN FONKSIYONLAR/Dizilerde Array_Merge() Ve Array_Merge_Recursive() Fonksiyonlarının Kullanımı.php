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
array_merge()               :   birden fazla diziyi birlestirerek yeni bir dizi olusturmak icin kullanilir.
array_merge_recursive()     :   birden fazla diziyi birlestirerek yeni bir dizi olusturmak icin kullanilir.(GELISMIS)
*/
/*
$dizi1      =   array("ataberk","volkan","hakan");
$dizi2      =   array("irem","pelin","derya","asli");

$yenidizi   =   array_merge($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
--------------------------------------------------------
*/
/*
$dizi1      =   array(0=>"ataberk",1=>"volkan",2=>"hakan");
$dizi2      =   array(0=>"irem",1=>"pelin",2=>"derya",3=>"asli");

$yenidizi   =   array_merge($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
---------------------------------------------------
*/
/*
$dizi1      =   array("deger1"=>"ataberk","deger2"=>"volkan","deger3"=>"hakan");
$dizi2      =   array(0=>"irem","deger2"=>"pelin",2=>"derya","deger1"=>"asli");

$yenidizi   =   array_merge($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
---------------------------------------------------------
*/

/*
$dizi1      =   array();
$dizi2      =   array("irem","pelin","derya","asli");

$yenidizi   =   array_merge($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
-------------------------------------------------------
*/
/*
$dizi1      =   array("ataberk","volkan","hakan");
$dizi2      =   array("irem","pelin","derya","asli");
$dizi3      =   array("sari","mavi","kirmizi","yesill");

$yenidizi   =   array_merge($dizi1,$dizi2,$dizi3);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($dizi3);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
-----------------------------------------------------------------
*/
/*
$dizi1      =   array("ataberk","volkan","hakan");
$dizi2      =   array("irem","pelin","derya","asli");

$yenidizi   =   array_merge_recursive($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
--------------------------------------------------------
*/


/*
$dizi1      =   array(0=>"ataberk",1=>"volkan",2=>"hakan");
$dizi2      =   array(0=>"irem",1=>"pelin",2=>"derya",3=>"asli");

$yenidizi   =   array_merge_recursive($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
------------------------------------------------------------
*/
/*
$dizi1      =   array("deger1"=>"ataberk","deger2"=>"volkan","deger3"=>"hakan");
$dizi2      =   array(0=>"irem","deger2"=>"pelin",2=>"derya","deger1"=>"asli");

$yenidizi   =   array_merge_recursive($dizi1,$dizi2);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
----------------------------------------------------------------
*/
/*
$dizi1      =   array("ataberk","volkan","hakan");
$dizi2      =   array("irem","pelin","derya","asli");
$dizi3      =   array("sari","mavi","kirmizi","yesill");

$yenidizi   =   array_merge_recursive($dizi1,$dizi2,$dizi3);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($dizi3);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";
-----------------------------------------------------
*/

$dizi1      =   array("deger1"=>"ataberk","deger2"=>"volkan","deger3"=>"hakan");
$dizi2      =   array(0=>"irem","deger2"=>"pelin",2=>"derya","deger1"=>"asli");
$dizi3      =   array("deger2"=>"sari","kirmizi","lacivert","deger1"=> "yesil");
$yenidizi   =   array_merge_recursive($dizi1,$dizi2,$dizi3);

echo "<pre>";
print_r($dizi1);
echo "</pre><br />";

echo "<pre>";
print_r($dizi2);
echo "</pre><br />";

echo "<pre>";
print_r($dizi3);
echo "</pre><br />";

echo "<pre>";
print_r($yenidizi);
echo "</pre><br />";



















?>


</body>
</html>	