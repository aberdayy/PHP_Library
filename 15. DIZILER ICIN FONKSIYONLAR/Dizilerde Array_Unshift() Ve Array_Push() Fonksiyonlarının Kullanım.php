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
array_unshift()     :   dizinin en basina yeni eleman veya elemanlar eklemek icin kullanilir. 
ayni zamanda eklenecek olan eleman veya elemanlarin diziye dahil edilmesiyle dizi iceriginin toplam eleman sayisi degerinin geriye dondurur.

array_push()        :   dizinin en sonuna yeni eleman veya elamanlar eklemek icin kullanuilir.
ayni zamanda eklenecek olan eleman veya elemanlarin diziye dahil edilmesiyle dizi iceriginin toplam eleman sayisi degerinin geriye dondurur.
*/
/*
$isimler    =   array("ataberk", "hakan","onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler,"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre>";
-------------------------------------------------
*/
/*
$isimler    =   array("isim1"=>"ataberk","isim2"=> "hakan","isim3"=>"onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler,"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre>";
----------------------------------------------------------
*/
/*
$isimler    =   array("isim1"=>"ataberk","hakan","isim3"=>"onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler,"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre>";
--------------------------------------------------------
*/
/*
$isimler    =   array("ataberk","hakan","onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler,"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler,"umit","faruk");

echo "<pre>";
print_r($isimler);
echo "</pre>";
----------------------------------------------------------
*/
/*
$isimler    =   array("ataberk", "hakan","onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =     array_unshift($isimler,"levent","serkan","oguz","faik");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

echo "islem isimli degiskenin icerdigi veri: " . $islem;
-----------------------------------------------------------
*/
/*
$isimler    =   array("ataberk", "hakan", array("hale", "banu", "lacin", "esra"),"onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler,"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre>";
-----------------------------------------------------
*/
/*
$isimler    =   array("ataberk", "hakan", array("hale", "banu", "lacin", "esra"),"onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

array_unshift($isimler[2],"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre>";
------------------------------------------------------------
*/
/*
$isimler    =   array("ataberk", "hakan", array("hale", "banu", "lacin", "esra"),"onur");

echo "<pre>";
print_r($isimler);
echo "</pre>";

$islem      =   array_unshift($isimler[2],"levent","serkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

echo "islem isimli degiskenin icerisindeki 2 anahtarina sahip degiskenin icerdigi veri: " . $islem;
*/

//array_push()  :   islemi icinde sonuclar aynidir... sadece dizenin SONUNA ekler...














?>


</body>
</html>	