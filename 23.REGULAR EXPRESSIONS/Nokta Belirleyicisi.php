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
.   :   duzneli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan degerin yeni satir karakteri haric herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir.
*/
$deger = "merhaba benim ataberk erday.\n Ben bir php yazilimcisiyim.\r 1 + 2 * 5 isleminin sonucu 11'dir.";
$desen = "/./";
preg_match_all($desen,$deger,$sonuc);
echo "orjinal metin : " . $deger . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 









?>

</body>
</html>	