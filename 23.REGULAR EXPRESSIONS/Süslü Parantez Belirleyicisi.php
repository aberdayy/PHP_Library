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
{x} : duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunann degerin x defa tekrarlanmis olmasi gerektigini belirtmek icin kullanilir.
*/
/*
$icerik = "Ataberk Erday - extra egitim -- A'dan Z'ye gorsel egitim seti --- 2020 ";
$desen = "/-{2}/";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal icerik : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------
*/

$icerik = "Alfabenin ilk harfi a ile baslar.Alfabenin ilk harfi aa ile baslar.Alfabenin ilk harfi aaa ile baslar.Alfabenin ilk harfi aaaa ile baslar. ";
$desen = "/a{4}/";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal icerik : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";



?>


</body>
</html>	