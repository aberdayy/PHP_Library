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
()      : duzenli ifadelerde grup tanimlamak icin kullanilir.
(x|y)   : duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin x yada y karakterlerinden herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir.
*/
/*
$deger = "benim adim ataberk erday'dir ve ben bir PHP yazilimcisiyim.";
$desem = "/(ataberk)/";
preg_match_all($desem,$deger,$sonuc);

echo "orjinal deger : " . $deger . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------
*/
/*
$deger = "benim adim ataberk erday'dir ve ben bir PHP yazilimcisiyim.";
$desem = "/(a)(t)(a)(b)(e)(r)(k)/";
preg_match_all($desem,$deger,$sonuc);

echo "orjinal deger : " . $deger . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------
*/
/*
$deger = "benim adim volkan erday'dir ve ben bir PHP yazilimcisiyim. abimin adi hakan alakenttir ve bir asp yazilimcisidir . arkadasimin adi serkan alakenttir java yazilimcisidir.";
$desem = "/(vol)kan/";
preg_match_all($desem,$deger,$sonuc);

echo "orjinal deger : " . $deger . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
------------------------------------
*/

$deger = "benim adim volkan erday'dir ve ben bir PHP yazilimcisiyim. abimin adi hakan alakenttir ve bir asp yazilimcisidir . arkadasimin adi serkan alakenttir java yazilimcisidir.";
$desem = "/(vol|ha|ser)kan/";
preg_match_all($desem,$deger,$sonuc);

echo "orjinal deger : " . $deger . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";

 







?>


</body>
</html>	