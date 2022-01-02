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
DROP DATABASE   :   MySQL sunucusu icerisindeki herhangi bir database i silmek icin kullanilir.
DROP TABLE      :   MySQL sunucusu icerisindeki herhangi bir database icerisindeki herhangi bir tabloyu silmek icin kullanilir.
*/

/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi <br />";
    echo "hata aciklamasi : " . mysqli_connect_error(). "<br />";
}else {
    echo "baglanti kuruldu <br />";
}

$sorgu          =   mysqli_query($veritabanibaglantisi,"DROP DATABASE RDYmedia") ;

if ($sorgu) {
   echo "veritabani silindi";
}else {
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);
---------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglanti hatasi <br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error. "<br />";
}else {
    echo "baglanti kuruldu <br />";
}

$sorgu          =   $veritabanibaglantisi->query("DROP DATABASE RDYmedia") ;

if ($sorgu) {
   echo "veritabani silindi";
}else {
    echo "sorgu hatasi";
}
$veritabanibaglantisi->close();
---------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi <br />";
    echo "hata aciklamasi : " . mysqli_connect_error(). "<br />";
}else {
    echo "baglanti kuruldu <br />";
}

$sorgu          =   mysqli_query($veritabanibaglantisi,"DROP TABLE ataberk.deneme2") ;

if ($sorgu) {
   echo "tablo silindi";
}else {
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);
---------------------------------------------------*/


$veritabanibaglantisi = new mysqli("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglanti hatasi <br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error. "<br />";
}else {
    echo "baglanti kuruldu <br />";
}

$sorgu          =   $veritabanibaglantisi->query("DROP TABLE ataberk.deneme") ;

if ($sorgu) {
   echo "veritabani silindi";
}else {
    echo "sorgu hatasi";
}
$veritabanibaglantisi->close();
















?>
</body>
</html>	