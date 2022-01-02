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

sort()      : dizinin elemanlarini buyuk harf kucuk harf duyarli olacak sekilde a-z yada kucukten buyuge siralamak icn kullanilir.
rsort()     : dizinin elemanlarini buyuk harf kucuk harf duyarli olacak sekilde z-a yada buyukten kucuge siralamak icn kullanilir.
asort()     : dizinin elemanlarini buyuk harf kucuk harf duyarli olacak sekilde ve anahtarlini bozmayacak sekilde a-z yada kucukten buyuge siralamak icn kullanilir.
arsort()    :dizinin elemanlarini buyuk harf kucuk harf duyarli olacak sekilde ve anahtarlini bozmayacak sekilde z-a yada buyukten kucuge siralamak icn kullanilir.
*/
/*
$degerler  =   ["Ataberk","hakan","onur","ataberk","serkan","ATABERK",    "riza"];

echo "<pre>";
print_r($degerler);
echo "<pre>";

sort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
---------------------------------------------
*/
/*
$degerler  =   [5454,5454,4,5,48,1,371,846,483,6454,642,135,4534354,77];

echo "<pre>";
print_r($degerler);
echo "<pre>";

sort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
----------------------------------------------------------
*/
/*
$degerler  =   ["Ataberk","hakan","onur","ataberk","serkan","ATABERK",    "riza"];

echo "<pre>";
print_r($degerler);
echo "<pre>";

rsort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
-------------------------------------------------------
*/
/*
$degerler  =   [5454,5454,4,5,48,1,371,846,483,6454,642,135,4534354,77];

echo "<pre>";
print_r($degerler);
echo "<pre>";

rsort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
---------------------------------------------------------
*/
/*
$degerler  =   ["a1"=>"Ataberk","a2"=>"hakan","a3"=>"onur","a4"=>"ataberk","a5"=>"serkan","a6"=>"ATABERK", "a7"=>"riza"];

echo "<pre>";
print_r($degerler);
echo "<pre>";

asort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
---------------------------------------------------------
*/
/*
$degerler  =   ["a1"=>454564,"a2"=>3,"a3"=>353,"a4"=>7503,"a5"=>434543510,"a6"=>44354213, "a7"=>3242];

echo "<pre>";
print_r($degerler);
echo "<pre>";

asort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
-------------------------------------------------
*/
/*
$degerler  =   ["a1"=>"Ataberk","a2"=>"hakan","a3"=>"onur","a4"=>"ataberk","a5"=>"serkan","a6"=>"ATABERK", "a7"=>"riza"];

echo "<pre>";
print_r($degerler);
echo "<pre>";

arsort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";
------------------------------------------------
*/

$degerler  =   ["a1"=>454564,"a2"=>3,"a3"=>353,"a4"=>7503,"a5"=>434543510,"a6"=>44354213, "a7"=>3242];

echo "<pre>";
print_r($degerler);
echo "<pre>";

arsort($degerler);

echo "<pre>";
print_r($degerler);
echo "<pre>";





?>
</body>
</html>	