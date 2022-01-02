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
\s  :   duzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan degerin sadece bosluk karakteri ile eslesmesi gerektigini belirtmek icin kullanilir. 
\S  :   duzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan degerin sadece bosluk karakteri disindaki herhnagi bir karakter ile eslesmesi gerektigini belirtmek icin kullanilir.    
*/
/*
$metin = "merhaba benim ataberk erday";
$desen = "/\s/";
preg_match_all($desen,$metin,$sonuc);
echo "orjinal metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------*/

$metin = "merhaba benim ataberk erday";
$desen = "/\S/";
preg_match_all($desen,$metin,$sonuc);
echo "orjinal metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";





?>

</body>
</html>	