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
u  : duzneli ifade dahilinde kontrol ediledcek olan icerigin unicode(evrensel kod) tanimlamasi ile kontrol edilmesini saglar.
*/
/*
$metin = "merhabá benim adîm Ataberk Erday, ben bir front end developerim";
$desen = "//";

$sonuc = preg_split($desen,$metin);

echo "orjinal metin : " . $metin . "<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------
*/
/*
$metin = "merhabá benim adîm Ataberk Erday, ben bir front end developerim";
$desen = "//u";

$sonuc = preg_split($desen,$metin);

echo "orjinal metin : " . $metin . "<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------
*/
$metin = "merhabá benim adîm Ataberk Erday, ben bir front end developerim";
$desen = "//u";

$sonuc = preg_split($desen,$metin);

echo "orjinal metin : " . $metin . "<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";









?>


</body>
</html>	