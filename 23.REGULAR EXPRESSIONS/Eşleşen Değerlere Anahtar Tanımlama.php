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

$icerik= "ataberk erday";
$desen = "/(?<isim>ataberk) (?<soyisim>erday)/";
preg_match($desen,$icerik,$sonuc);
echo "orjinal icerik : " .$icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";

?>
</body>
</html>	