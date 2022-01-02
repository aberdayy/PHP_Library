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
?   :   duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin sifir defa yada bir defa tekrarlanmis olmasi gerektigini belirtmek icin kullanilir.  
*/
/*
$deger = "ataberk - erday -- sadik ---  erday ----";
$desen = "/-?/";
preg_match_all($desen,$deger,$sonuc);

echo "Orjinal metin : " .$deger . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------
*/

$deger = "a aa aaa aaaa aaaaa aaaaaa";
$desen = "/a?/";
preg_match_all($desen,$deger,$sonuc);

echo "Orjinal metin : " .$deger . "<br />";

echo "<pre>";
print_r($sonuc);
echo "</pre>";















?>


</body>
</html>	