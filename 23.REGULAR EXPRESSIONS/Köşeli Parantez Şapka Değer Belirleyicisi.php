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
[^abc] :  duzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan degerin belirtiline karakterler disindaki karakterlerden herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir.
*/
/*
$metin = "merhaba benim adim ataberk erday";
$desen = "/[^ataberk]/";
preg_match_all($desen,$metin,$sonuc);
echo "orjinal icerik : " . $metin . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";
------------------------------------*/

$metin = "merhaba benim adim ataberk erday";
$desen = "/[^aeiou]/";
preg_match_all($desen,$metin,$sonuc);
echo "orjinal icerik : " . $metin . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";


?>

</body>
</html>	