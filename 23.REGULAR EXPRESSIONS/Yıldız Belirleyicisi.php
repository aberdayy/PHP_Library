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
*       :   duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin sifir defa veya daha fazla tekrarlanmis olmasi gerektigini belirtmek icin kullanilir.
*/
/*
$iceerik = "hakan - volka -- ataberk --- ali ---- mustafa ----- hsueo ------ safik --------";
$desen = "/-*\/";
preg_match_all($desen,$iceerik,$sonuc);

echo "orjina icerik : " . $iceerik . "<bre />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------

*/

$iceerik = "1-11-111-1111-11111-111111-1111111-11111111-111111111";
$desen = "/1*/";
preg_match_all($desen,$iceerik,$sonuc);

echo "orjina icerik : " . $iceerik . "<bre />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";






















?>


</body>
</html>	