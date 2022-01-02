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
natsort()       : dizinin elemanlarini buyuk harf kucuk harf duyarli olacak ve dogal sirlama seklinde a-z yada kucukten buyuge siralamak icjn kullanilir
natcasesort()   : dizinin elemanlarini  a-z yada kucukten buyuge siralamak icjn kullanilir 

*/
/*
$resim1  =   ["resim1","resim3","resim14","resim2","resim142","resim273","resim2645","resim372"];
$resim2  =   ["resim1","resim3","resim14","resim2","resim142","resim273","resim2645","resim372"];

echo "<pre>";
print_r($resim1);
echo "</pre><br />";

echo "<pre>";
print_r($resim2);
echo "</pre><br />";


sort($resim1);
echo "standart siralama <br />";
echo "<pre>";
print_r($resim1);
echo "</pre><br />";

natsort($resim2);

echo "dogal siralama <br />";
echo "<pre>";
print_r($resim2);
echo "</pre><br />";
--------------------------------------------
*/
/*
$resim1  =   ["a1"=>"resim1","a2"=>"resim3","a3"=>"resim14","a4"=>"resim2","a5"=>"resim142","a6"=>"resim273","a7"=>"resim2645","a8"=>"resim372"];
$resim2  =   ["a1"=>"resim1","a2"=>"resim3","a3"=>"resim14","a4"=>"resim2","a5"=>"resim142","a6"=>"resim273","a7"=>"resim2645","a8"=>"resim372"];

echo "<pre>";
print_r($resim1);
echo "</pre><br />";

echo "<pre>";
print_r($resim2);
echo "</pre><br />";


sort($resim1);
echo "standart siralama <br />";
echo "<pre>";
print_r($resim1);
echo "</pre><br />";

natsort($resim2);

echo "dogal siralama <br />";
echo "<pre>";
print_r($resim2);
echo "</pre><br />";
-------------------------------------------------------
*/
/*
$resim1  =   ["RESim1","resim3","RESIM14","reSim2","resim142","resim273","resim2645","resim372"];
$resim2  =   ["resiM1","RESIM3","resim14","REsim2","resiM142","resim273","resim2645","resim372"];

echo "<pre>";
print_r($resim1);
echo "</pre><br />";

echo "<pre>";
print_r($resim2);
echo "</pre><br />";


sort($resim1);
echo "standart siralama <br />";
echo "<pre>";
print_r($resim1);
echo "</pre><br />";

natsort($resim2);

echo "dogal siralama <br />";
echo "<pre>";
print_r($resim2);
echo "</pre><br />";
---------------------------------------------------------

*/

$resim1  =   ["RESim1","resim3","RESIM14","reSim2","resim142","resim273","resim2645","resim372"];
$resim2  =   ["resiM1","RESIM3","resim14","REsim2","resiM142","resim273","resim2645","resim372"];

echo "<pre>";
print_r($resim1);
echo "</pre><br />";

echo "<pre>";
print_r($resim2);
echo "</pre><br />";


sort($resim1);
echo "standart siralama <br />";
echo "<pre>";
print_r($resim1);
echo "</pre><br />";

natcasesort($resim2);

echo "dogal siralama <br />";
echo "<pre>";
print_r($resim2);
echo "</pre><br />";







?>
</body>
</html>	