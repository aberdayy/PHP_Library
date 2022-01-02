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

$gelenisimdegeri    = $_POST["KullaniciIsmi"]??"HATA" ;
$gelensoyisimdegeri = $_POST["KullaniciSoyismi"]??"HATA" ;

echo "formdan gelen isim degeri :" .$gelenisimdegeri ."<br />";

echo "formdan gelen soyisim degeri :" .$gelensoyisimdegeri ."<br />";





?>
</body>
</html>	