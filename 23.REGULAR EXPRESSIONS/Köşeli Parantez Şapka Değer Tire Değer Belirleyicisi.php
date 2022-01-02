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
[^x-y]  :   duzneli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin belirtilen karakter araligi disindaki karakterlerin herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir. 
*/

$metin = "merhaba benim adim ataberk ben bir PHP yazilimiciyim.";
$desen = "/[^a-d]/"; //bu harfler haric butun hepsi ile esles demek.
preg_match_all($desen,$metin,$sonuc);
echo "orjinal icerik : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";














?>

</body>
</html>	