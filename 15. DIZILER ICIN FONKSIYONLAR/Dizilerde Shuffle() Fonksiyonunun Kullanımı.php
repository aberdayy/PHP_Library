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
shuffle()   :   dizi iedrisinde bulunan elamnlarin siralarini karistirmak icin kullanilir.
*/
/*
$isimler    =   ["ataberk","hakan","onur","levent","serkan","gokhan"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

shuffle($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";
---------------------------------------------
*/

/*
$isimler    =   ["a1"=>"ataberk","a2"=>"hakan","a3"=>"onur","a4"=>"levent","a5"=>"serkan","a6"=>"gokhan"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

shuffle($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";
//anahtarlar gozardi edilir.
*/
/*
$isimler    =   ["ataberk","hakan",["hale","asli","banu","selin"],"onur","levent","serkan","gokhan"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

shuffle($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";
------------------------------------------------------
*/

/*
$isimler    =   ["ataberk","hakan",["hale","asli","banu","selin"],"onur","levent","serkan","gokhan"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

shuffle($isimler[2]);

echo "<pre>";
print_r($isimler);
echo "</pre>";
---------------------------------------------------
*/


$isimler    =   ["ataberk","hakan",["hale","asli","banu","selin"],"onur","levent","serkan","gokhan"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

shuffle($isimler[2]);
shuffle($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";






































?>
</body>
</html>	