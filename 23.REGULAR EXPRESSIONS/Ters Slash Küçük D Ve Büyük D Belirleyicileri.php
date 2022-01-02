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
\d  :      duzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan degerin, sadece rakam karakterlerinin herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir, 
\D  :   duzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan degerin, sadece rakam karakterleri disindaki karakterlerden herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir
*/
/*
$icerik = "ataberk erday 2002  dogumludur.";
$desen = "/\d/";
preg_match_all($desen,$icerik,$sonuc);
echo "orjinal icerik : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------
*/

$icerik = "ataberk erday 2002  dogumludur.";
$desen = "/\D/";
preg_match_all($desen,$icerik,$sonuc);
echo "orjinal icerik : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";











?>

</body>
</html>	