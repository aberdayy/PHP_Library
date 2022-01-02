<?php
// header("Refresh:5")
?>
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

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

$gelenadisoyadi     = $_POST["adisoyadi"];
$gelenemail         = $_POST["email"];
$gelensifre         = $_POST["sifre"];
$gelentelefon       = $_POST["telefon"];
$gelenyas           = $_POST["yas"];
$gelencinsiyet      = $_POST["cinsiyet"];
$gelensehir         = $_POST["sehir"];


$ekle = mysqli_query($veritabanibaglantisi,"INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('$gelenadisoyadi','$gelenemail ','$gelensifre ','$gelentelefon ','$gelenyas','$gelencinsiyet','$gelensehir')");
    if ($ekle) {
        header("location:index.php");
        exit();
    }else {
        echo "kayit eklenemedi!<br /><br />";
    }


mysqli_close($veritabanibaglantisi);




    ?>
</body>
</html>	