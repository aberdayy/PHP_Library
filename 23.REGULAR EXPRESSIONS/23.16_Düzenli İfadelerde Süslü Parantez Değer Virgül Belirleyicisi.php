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
{x,} : duzenli ifade dahilinde kontrol edilecek olan icerigiin karakter diziliminde bulunan degerin x defa yada fazla tekrarlanmis olamsi gerektigini belirtmek icin kullanilir.
*/
/*
$icerik = "Ataberk Erday - extra egitim -- adan z ye php gorsel egitim seti --- 2020";
$desen = "/-{2,}/";
preg_match_all($desen,$icerik,$sonuc);
echo "orjinal icerik :" . $icerik . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------
*/

$icerik = "1 11 111 1111 11111 111111 1111111 11111111 111111111111 1111111111111 ";
$desen = "/1{2,}/";
preg_match_all($desen,$icerik,$sonuc);
echo "orjinal icerik :" . $icerik . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";




















?>


</body>
</html>	