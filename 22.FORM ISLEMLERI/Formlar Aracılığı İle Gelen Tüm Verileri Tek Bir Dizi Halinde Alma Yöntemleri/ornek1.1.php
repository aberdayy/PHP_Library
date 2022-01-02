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
$gelensoyad = $_GET["soyad"];
$gelenmail = $_GET["email"];
$gelenteleon = $_GET["telefon"];

echo "adiniz : " . $gelenisimdegeri ."<br />";
echo "soyadiniz : " . $gelensoyad ."<br />";
echo "email : " . $gelenmail ."<br />";
echo "telefon : " . $gelenteleon ."<br /><br /><br /><br /><br />";

$gelentumdeger = $_GET;

echo "<pre>";
print_r($gelentumdeger);
echo "</pre>";

foreach ($gelentumdeger as $key => $value) {
    echo $key . " : " . $value . "<br />";
}


?>
</body>
</html>	