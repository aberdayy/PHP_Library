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
?=  :   duzneli ifade dahilinde kontrol edilecek olan 
icerigin karakter dizilimi icerisindeki belirtilen
bir referans degerin onunde duzneli ifade ile eslesebilecek degerleri
aramak icn kullanilir.

?!  :   duzneli ifade dahilinde kontrol edilecek olan 
icerigin karakter dizilimi icerisindeki belirtilen
bir referans deger ile takip edilmeyen  duzneli ifade ile eslesemeyecek degerleri
aramak icn kullanilir.
*/
/*
$icerik = "PHP dunya uzerinde en yaygin olarak kullanilan bir web programlama dilidir. ve php'yi ogrenmesi cok kolaydir.";

$desen = "/PHP(?='yi)/i";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal metin: " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------
*/
/*
$icerik = "PHP dunya uzerinde en yaygin olarak kullanilan bir web programlama dilidir. ve php'yi ogrenmesi cok kolaydir.";

$desen = "/PHP(?= )/i";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal metin: " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------
*/
/*
$icerik = "PHP dunya uzerinde en yaygin olarak kullanilan bir web programlama dilidir. ve php'yi ogrenmesi cok kolaydir.";

$desen = "/PHP(?!')/i";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal metin: " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------
*/

$icerik = "PHP dunya uzerinde en yaygin olarak kullanilan bir web programlama dilidir. ve php'yi ogrenmesi cok kolaydir.";

$desen = "/PHP(?! )/i";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal metin: " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";











?>


</body>
</html>	