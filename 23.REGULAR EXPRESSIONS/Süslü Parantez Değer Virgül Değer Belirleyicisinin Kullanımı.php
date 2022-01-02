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
{x,y}   :   duzneli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin en az x defa yada en fazla y defa tekrarlanmis olmasi gerektiogini belirtmek icin kullanillir.


*/
/*
$icerik = "ataberk - erday -- a dan --- z ye ---- php7 ----- gorsel ------ egitim ------- seti --------";
$desen = "/-{2,5}/";

preg_match_all($desen,$icerik,$sonuc);

echo "orjinal icerik : " . $icerik . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------*/

$icerik = "1 11 111 1111 11111 111111 1111111 1111111 1111111 11111111 1111111111";
$desen = "/1{8,10}/";

preg_match_all($desen,$icerik,$sonuc);

echo "orjinal icerik : " . $icerik . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";








?>


</body>
</html>	