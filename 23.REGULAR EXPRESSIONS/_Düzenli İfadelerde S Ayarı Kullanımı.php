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
s   :  duzenli ifade dahilinde kontrol edilecek olan icerigin birden fazla satiri varsa tum satirlarin kontrol edilmesini saglar.
*/
$icerik = "merhaba benim adim ataberk erday,
ben bir PHP yazilimcisiyim
bana facebook uzerinden
ataberk erday seklinde arama yaparak ulasabilirsiniz.";

$desen = "/.*/s";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal icerik : " . $icerik."<br /<br /<br /<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";










?>


</body>
</html>	