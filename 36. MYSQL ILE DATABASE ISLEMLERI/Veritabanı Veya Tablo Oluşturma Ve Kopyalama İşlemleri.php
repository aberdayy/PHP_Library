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
CREATE DATABASE     :   MySQL sunucusuna yeni bir database ekleme / olusturmak icin kullanilir.
CREATE TABLE        :   MySQL sunucusundaki database icerisine yeni bir tablo eklemek icin kullanilir. ayrica istenirse herhangi bir tablo iceriklerini baska bir tabloyada kopyalamak icin kullanilir.
*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "hata olustu <br />";
    echo "hata : " . mysqli_connect_error() . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   mysqli_query($veritabanibaglantisi, "CREATE DATABASE RDYmedia");

if ($sorgu) {
    echo "veritabani olusturuldu.";
}else {
    echo "sorgu hatasi!";
}
mysqli_close($veritabanibaglantisi);
-------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "hata olustu <br />";
    echo "hata : " . mysqli_connect_error() . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   mysqli_query($veritabanibaglantisi, "CREATE DATABASE RDYmedia2 CHARACTER SET UTF8 COLLATE utf8_general_ci");

if ($sorgu) {
    echo "veritabani olusturuldu.<br />";
}else {
    echo "sorgu hatasi!";
}
mysqli_close($veritabanibaglantisi);
-------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =  new mysqli ("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "hata olustu <br />";
    echo "hata : " . $veritabanibaglantisi->connect_error . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   $veritabanibaglantisi->query("CREATE DATABASE RDYmedia3 CHARACTER SET UTF8 COLLATE utf8_general_ci");

if ($sorgu) {
    echo "veritabani olusturuldu.<br />";
}else {
    echo "sorgu hatasi!";
}
$veritabanibaglantisi->close();
-------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =  new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "hata olustu <br />";
    echo "hata : " . $veritabanibaglantisi->connect_error . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   $veritabanibaglantisi->query("CREATE TABLE deneme (

        id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        Soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        Emailadresi varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
        Durumu tinyint(1) UNSIGNED NOT NULL,
        Kayittarihi TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        YoneticiAciklamasi TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");

if ($sorgu) {
    echo "tablo olusturuldu.<br />";
}else {
    echo "sorgu hatasi!";
}
$veritabanibaglantisi->close();
-------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =  new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "hata olustu <br />";
    echo "hata : " . $veritabanibaglantisi->connect_error . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   $veritabanibaglantisi->query("CREATE TABLE deneme (
    
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        Adi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        Soyadi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        Emailadresi varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE KEY,
        Durumu tinyint(1) UNSIGNED NOT NULL,
        Kayittarihi TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        YoneticiAciklamasi TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        if ($sorgu) {
            echo "tablo olusturuldu.<br />";
        }else {
            echo "sorgu hatasi!";
        }
        $veritabanibaglantisi->close();
-------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =  new mysqli ("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "hata olustu <br />";
    echo "hata : " . $veritabanibaglantisi->connect_error . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   $veritabanibaglantisi->query("CREATE TABLE KOPYA LIKE deneme"); //icerikleri alamaz!!
        
if ($sorgu) {
            echo "tablo olusturuldu.<br />";
        }else {
            echo "sorgu hatasi!";
        }
        $veritabanibaglantisi->close();
-------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =  new mysqli ("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "hata olustu <br />";
    echo "hata : " . $veritabanibaglantisi->connect_error . "<br />";
}else{
    echo "veritabanina baglanti gerceklesti.";
}

$sorgu  =   $veritabanibaglantisi->query("CREATE TABLE ataberk.denemekopya LIKE RDYmedia.deneme");
        
if ($sorgu) {
            echo "tablo olusturuldu.<br />";
        }else {
            echo "sorgu hatasi!";
        }
$veritabanibaglantisi->close();
-------------------------------------------------------------------*/
/*
$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "root", "RDYmedia");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

if(mysqli_connect_errno()){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Mesajı : " . mysqli_connect_error() . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
}

$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "CREATE TABLE yenitablo LIKE deneme");
    if($Sorgu){
        echo "Tablo Oluşturuldu<br />";
        $SorguIki	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO yenitablo SELECT * FROM deneme");
        if($SorguIki){
            echo "Kayıtlar Kopyalandı";
            }else{
                echo "Sorgu Hatası";
            }
    }else{
        echo "Sorgu Hatası";
    }
    
mysqli_close($VeritabaniBaglantisi);
-------------------------------------------------------------------*/
/*
$VeritabaniBaglantisi	=	mysqli_connect("localhost", "root", "root");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

if(mysqli_connect_errno()){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Mesajı : " . mysqli_connect_error() . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
}

$Sorgu	=	mysqli_query($VeritabaniBaglantisi, "CREATE TABLE ataberk.yenitablo LIKE RDYmedia.deneme");
    if($Sorgu){
        echo "Tablo Oluşturuldu<br />";
        $SorguIki	=	mysqli_query($VeritabaniBaglantisi, "INSERT INTO ataberk.yenitablo SELECT * FROM RDYmedia.deneme");
        if($SorguIki){
            echo "Kayıtlar Kopyalandı";
            }else{
                echo "Sorgu Hatası";
            }
    }else{
        echo "Sorgu Hatası";
    }
    
    mysqli_close($VeritabaniBaglantisi);
-------------------------------------------------------------------*/
$VeritabaniBaglantisi	= new	mysqli("localhost", "root", "root");
$VeritabaniBaglantisi->set_charset("UTF8");

if($VeritabaniBaglantisi->connect_errno){
    echo "Veritabanı Bağlantı Hatası<br />";
    echo "Hata Mesajı : " . $VeritabaniBaglantisi->connect_error . "<br />";
}else{
    echo "Veritabanına Bağlantı Kuruldu<br />";
}

$Sorgu	=	$VeritabaniBaglantisi->query("CREATE TABLE ataberk.yenitablo LIKE RDYmedia.deneme");
    if($Sorgu){
        echo "Tablo Oluşturuldu<br />";
        $SorguIki	=	$VeritabaniBaglantisi->query("INSERT INTO ataberk.yenitablo SELECT * FROM RDYmedia.deneme");
        if($SorguIki){
            echo "Kayıtlar Kopyalandı";
            }else{
                echo "Sorgu Hatası";
            }
    }else{
        echo "Sorgu Hatası";
    }
    $VeritabaniBaglantisi->close();

    
    ?>
    </body>
</html>	