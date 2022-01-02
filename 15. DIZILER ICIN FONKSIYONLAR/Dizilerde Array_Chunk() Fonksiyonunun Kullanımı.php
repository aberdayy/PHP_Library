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

array_chunk()       :   dizinin belli bolumlerini alip parcalayarak yeni bir cok boyutlu dizi olusturmak icin kullanilir.

*/

/*
$isimler    =   array("ataberk", "volkan","hakan","onur","umit ","serkan","ali","kemal","mustafa","halil","hilal","merve");

echo "<pre>";
print_r($isimler);
echo "</pre>";


$sonuc  =   array_chunk($isimler, 3);




echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------------------------
*/


$isimler    =   array("a1"=>"ataberk","a2"=> "volkan","a3"=>"hakan","a4"=>"onur","a5"=>"umit ","a6"=>"serkan","a7"=>"ali","a8"=>"kemal","a9"=>"mustafa","a10"=>"halil","a=11"=>"hilal","a12"=>"merve");

echo "<pre>";
print_r($isimler);
echo "</pre>";


$sonuc  =   array_chunk($isimler, 3, true); //true anahtarlarin korunmasini saglar.


echo "<pre>";
print_r($sonuc);
echo "</pre>";














?>


</body>
</html>	