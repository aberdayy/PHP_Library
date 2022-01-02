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



$gelenadsoyaddegeri = $_GET["adsoyad"];
$gelenemaildegeri = $_GET["emailadresi"];
$gelentelefondegeri = $_GET["telefon"];
$gelencinsiyetdegeri = $_GET["cinsiyet"];
$gelenyasdegeri = $_GET["yas"];

echo "adiniz soyadiniz : " . $gelenadsoyaddegeri . "<br />";
echo "email adresiniz : " . $gelenemaildegeri . "<br />";
echo "telefonunuz : " . $gelentelefondegeri . "<br />";
echo "cinsiyet : " . $gelencinsiyetdegeri . "<br />";
echo " yasiniz  : " . $gelenyasdegeri . "<br />";
 













?>
</body>
</html>	