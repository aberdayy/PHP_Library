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
/*
$veritabanibaglantisibir = mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisibir,"UTF8");
if (mysqli_connect_errno()) {
    echo "1. veritabanina baglanti kurulamadi <br />";
    echo "hata : " . mysqli_connect_error() . "<br />";
}else {
    echo "1. veritabanina baglanti kuruldu <br />";
    mysqli_select_db($veritabanibaglantisibir,"RDYmedia");
}

$veritabanibaglantisiiki = mysqli_connect("localhost","root","root","RDYmedia2");
mysqli_set_charset($veritabanibaglantisiiki,"UTF8");
if (mysqli_connect_errno()) {
    echo "2. veritabanina baglanti kurulamadi <br />";
    echo "hata : " . mysqli_connect_error() . "<br />";
}else {
    echo "2. veritabanina baglanti kuruldu <br />";
    mysqli_select_db($veritabanibaglantisiiki,"RDYmedia2");
}
mysqli_close($veritabanibaglantisibir);
mysqli_close($veritabanibaglantisiiki);
---------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisibir = new mysqli("localhost","root","root");
$veritabanibaglantisibir->set_charset("UTF8");
if ($veritabanibaglantisibir->connect_errno) {
    echo "1. veritabanina baglanti kurulamadi <br />";
    echo "hata : " . $veritabanibaglantisibir->connect_error . "<br />";
}else {
    echo "1. veritabanina baglanti kuruldu <br />";
    $veritabanibaglantisibir->select_db("RDYmedia");
}

$veritabanibaglantisiiki = new mysqli("localhost","root","root");
$veritabanibaglantisiiki->set_charset("UTF8");
if ($veritabanibaglantisiiki->connect_errno) {
    echo "2. veritabanina baglanti kurulamadi <br />";
    echo "hata : " . $veritabanibaglantisiiki->connect_error . "<br />";
}else {
    echo "2. veritabanina baglanti kuruldu <br />";
    $veritabanibaglantisiiki->select_db("RDYmedia2");
}
$veritabanibaglantisibir->close();
$veritabanibaglantisiiki->close();
---------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi   =   mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "veri tabanina baglanti saglanamadi. <br />";
    echo "hata : " . mysqli_connect_error() . "<br />";
}else {
    echo "veri tabanina baglanti saglandi <br />";
}
$sorgubir = mysqli_query($veritabanibaglantisi,"SELECT * FROM RDYmedia.kayitlar");// gelismis yapi ile birden fazla veritabani baglantisi bu sekidle yapilir mumkunse bu yapiyi kullan
$sorguiki = mysqli_query($veritabanibaglantisi,"SELECT * FROM RDYmedia2.uyeler");

mysqli_close($veritabanibaglantisi);
---------------------------------------------------------------------------------------*/

$veritabanibaglantisi   =  new mysqli("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "veri tabanina baglanti saglanamadi. <br />";
    echo "hata : " . $veritabanibaglantisi->connect_error . "<br />";
}else {
    echo "veri tabanina baglanti saglandi <br />";
}
$sorgubir = $veritabanibaglantisi->query("SELECT * FROM RDYmedia.kayitlar");// gelismis yapi ile birden fazla veritabani baglantisi bu sekidle yapilir mumkunse bu yapiyi kullan
$sorguiki = $veritabanibaglantisi->query("SELECT * FROM RDYmedia2.uyeler");

$veritabanibaglantisi->close();








?>
</body>
</html>	