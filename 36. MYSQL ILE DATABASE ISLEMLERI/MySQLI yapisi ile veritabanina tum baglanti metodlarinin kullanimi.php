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
mysqli_connect()            :   kendisine parametre olarak verilen degerler dogrultusunda, MySQL sunucusuna yeni bir baglanti acmak icin kullanilir. Ayrica istenirse acilacak olan MySQL
 sunucusunun tum baglanti bilgilerini bulur ve buldugu degerlerden yeni bir dizi olusturarak, olusturdugu degeri geriye dondurur.

 mysqli_set_charset()        :   Kendisine parametre olarak verilmis olan degerler dogrultusunda daha onceden acilmis olan MySQL baglantisina varsayilan istemci karakter setini 
atamk tanimlamak icin kullanilir.

mysqli_selecet_db()         :   Kendisine parametre olarak verilmis olan degerler dogrultusunda daha onceden acilmis olan MySQL baglantisi uzerinden istenilen veritabanini secmek icin kullanilir
mysqli_connect_errno()      :   MySQL sunucusuna yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasilmasi durumunda hata kodu degerini bularak buldugu degeri geriye dondurur.
mysqli_connect_error()      :   MySQL sunucusuna yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasilmasi durumunda hata aciklama degerini bularak buldugu degeri geriye dondurur.
mysqli_close()              :   Kendisine parametre olarak verilen degerler dogrultusunda, daha onceden acilmis olan MySQL baglantisini kapatmak icin kullanilir.
*/
/*
$veritabanihostadresi          =   "localhost";
$veritabanikullanici           =   "root";
$veritabanikullanicisifresi    =   "root";
$veritabaniadi                 =    "RDYmedia";

$veritabanibaglantisi           =   mysqli_connect($veritabanihostadresi, $veritabanikullanici, $veritabanikullanicisifresi, $veritabaniadi);
mysqli_set_charset($veritabanibaglantisi, "utf-8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------*/
/*
$veritabanibaglantisi           =   mysqli_connect("localhost", "root", "root", "RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "utf-8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------*/
/*
$veritabanibaglantisi           =   mysqli_connect("127.0.0.1", "root", "root", "RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "utf-8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------*/
/*
$veritabanibaglantisi           =   mysqli_connect("localhost", "root", "root", "RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "utf-8");

if (mysqli_connect_errno($veritabanibaglantisi)) {
    echo "veritabanina baglanilamadi <br />";
    echo mysqli_connect_error();
}else {
    echo "veritabanina baglanildi!";
}
mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------*/
/*
$veritabanibaglantisi           =   mysqli_connect("localhost", "root", "root", "RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "utf-8");

if (mysqli_connect_errno($veritabanibaglantisi)) {
    echo "veritabanina baglanilamadi <br />";
    echo mysqli_connect_error();
}else {
    echo "veritabanina baglanildi!";
    mysqli_select_db($veritabanibaglantisi,"RDYmedia");
}
mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------*/
$VeritabaniBaglantisi			=	mysqli_connect("localhost", "root", "root", "RDYmedia");
mysqli_set_charset($VeritabaniBaglantisi, "UTF8");

if(mysqli_connect_errno($VeritabaniBaglantisi)){
    die("Sayın kullanıcımız şuanda veritabını sunucularımızda bakım çalışması yapılmaktadır, lütfen daha sonra tekrar deneyiniz.");
}else {
    echo "islem gerceklesti!";
}

mysqli_close($VeritabaniBaglantisi);
















?>
</body>
</html>	