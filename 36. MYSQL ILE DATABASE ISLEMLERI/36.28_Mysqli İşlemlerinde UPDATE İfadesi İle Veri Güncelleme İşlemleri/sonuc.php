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


$gelenIDdegeri      = $_GET["id"];
$gelenadisoyadi     = $_POST["adisoyadi"];
$gelenemailadresi   = $_POST["emailadresi"];
$gelensifre         = $_POST["sifre"];
$gelentelefon       = $_POST["telefon"];
$gelenyas           = $_POST["yas"];
$gelencinsiyet      = $_POST["cinsiyet"];
$gelensehir         = $_POST["sehir"];








$guncelle = mysqli_query($veritabanibaglantisi,"UPDATE uyeler SET adisoyadi='$gelenadisoyadi' , emailadresi='$gelenemailadresi' , sifre='$gelensifre', telefon='$gelentelefon', yas='$gelenyas', cinsiyet='$gelencinsiyet', sehir='$gelensehir'   WHERE id=$gelenIDdegeri");
if ($guncelle) {
    echo "kayit guncellendi";
    echo "<a href='index.php'>Anasayfaya geri don</a>";
} else {
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);



    ?>
</body>
</html>	