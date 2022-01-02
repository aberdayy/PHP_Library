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

$gelendosya = $_FILES["dosya"];

$dosyaninadi        = $gelendosya ["name"];
$dosyaninaturu      = $gelendosya ["type"];
$dosyanintempadi    = $gelendosya ["tmp_name"];
$dosyaninhatadurumu = $gelendosya ["error"];
$dosyaninboyutu     = $gelendosya ["size"];

$yol = "resimler/";

$dosyayoluveadi = $yol.$dosyaninadi;
if (move_uploaded_file($dosyanintempadi, $dosyayoluveadi)) {
    echo "dosya basariyla yuklendi. <br />";
    echo "dosyanin adi : " . $dosyaninadi . "<br />";
    echo "dosyanin turu adi : " . $dosyaninaturu . "<br />";
    echo "dosyanin gecici dizini ve adi : " . $dosyanintempadi . "<br />";
    echo "dosyanin hata durumu : " . $dosyaninhatadurumu . "<br />";
    echo "dosyanin boyutu : " . $dosyaninboyutu . "<br />";
    echo "<img src='{$dosyayoluveadi}'>";
}else {
    echo "HATA!!! YUKLEYEMEDIN AMUA GODUUUM AHAHAHAHAHHAHAHAHHA <br />";
}


//AYNI DOSYA ADINDA DSOYA GELIRSE SILER VE UZERINE YAZAR.







?>
</body>
</html>	