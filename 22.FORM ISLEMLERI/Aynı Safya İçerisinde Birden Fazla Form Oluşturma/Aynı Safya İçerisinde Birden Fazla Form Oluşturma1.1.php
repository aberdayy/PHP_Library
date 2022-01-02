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

$gelenisimdegeri = $_GET["isim"];
$gelensoyisimdegeri = $_GET["soyisim"];
$gelentelefomdegeri = $_GET["telefon"];
$gelenmaildegeri = $_GET["mail"];

echo "adiniz :" . $gelenisimdegeri . "<br />";
echo "soyadiniz :" . $gelensoyisimdegeri . "<br />";
echo "telefon :" . $gelentelefomdegeri . "<br />";
echo "email :" . $gelenmaildegeri . "<br />";



?>
</body>
</html>	