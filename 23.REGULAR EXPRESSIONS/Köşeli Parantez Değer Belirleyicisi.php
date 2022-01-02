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
[abc]  :  duzneli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin belirtilen karakterlerden herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir.
*/
/*
$metin = "merhaba benim adim ataberk erday";
$desen = "/[tae]/";

preg_match_all($desen,$metin,$sonuc);

echo "orjinal icerik : " . $metin . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------------*/

$metin = "merhAbA benim Adim aTaberk erday";
$desen = "/[at]/i";

preg_match_all($desen,$metin,$sonuc);

echo "orjinal icerik : " . $metin . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";



?>

</body>
</html>	