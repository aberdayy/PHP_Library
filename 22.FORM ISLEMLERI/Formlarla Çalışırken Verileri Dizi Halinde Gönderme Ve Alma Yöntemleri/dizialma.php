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

$gelenadisoyadi = $_GET["isim"];
$gelenhobiler = $_GET["hobiler"];

echo "adiniz soyadiniz :" .$gelenadisoyadi . "<br />";
echo "hobileriniz : <br />";

foreach ($gelenhobiler as $bilgiler ) {
    echo $bilgiler . "<br />";
}

?>
</body>
</html>	