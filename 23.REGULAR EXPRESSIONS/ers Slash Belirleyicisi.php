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
\ : duzenli ifadelerde ardindan gelecek olan karakterin ozel bir karakter olmadigini belirtmek icin kullanilir. 
*/


$deger = "11 + 111 isleminin sonucu 122'dir";
$desen = "/\+/";
preg_match_all($desen,$deger,$sonuc);

echo "orjinal icerik : " . $deger . " <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";










?>

</body>
</html>	