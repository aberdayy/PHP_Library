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
array_reverse()   :  dizi icerisinde bulunan eleman veya elemanlarin tersten siralanmasini saglayarak yeni bir dizi olusturur.
*/
/*
$isimler    =  ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc   =  array_reverse($isimler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------------
*/

/*
$isimler    =  ["a1"=>"ataberk","a2"=>"volkan","a3"=>"hakan","a4"=>"onur","a5"=>"serkan"];

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc   =  array_reverse($isimler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------------
*/

$isimler    =  ["ataberk","volkan","hakan","onur","serkan"];

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc   =  array_reverse($isimler, true); //php anahtar degerlini korur.

echo "<pre>";
print_r($sonuc);
echo "</pre>";


























?>
</body>
</html>	