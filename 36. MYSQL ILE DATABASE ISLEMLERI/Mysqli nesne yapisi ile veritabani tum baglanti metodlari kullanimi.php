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
set_charset()       :   Kendisine parametre olarak verilen deger dogrultusunda daha onceden nesnesel yapi ile acilmis olan MySQL baglantisina varsayilan istemci karakter setini atamak / tanimlamak icin kullanilir.
select_db()         :   Kendisine parametre olarak verilen deger dogrultusunda daha onceden nesnesel yapi ile acilmis olan MySQL baglantisi uzerinden istenilen veritabanini secmek icin kullanilir.
connect_errno()     :   MySQL sunucusuna yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasilmasi durumunda hata kodu degerini bularak buldugu degeri geriye dondurur.
connect_error()     :   MySQL sunucusuna yeni bir baglanti acma islemi sirasinda olasi bir hata ile karsilasilmasi durumunda hata aciklama degerini bularak buldugu degeri geriye dondurur.
close()             :   Daha onceden nesnesel yapi ile acilmis olan MySQL baglantisini kapatmak / sonlandirmak icin kullanilir.
*/
/*
$veritabanihostadresi    =   "localhost";
$veritabanikullaniciadi  =   "root";
$veritabanisifresi       =   "root";
$veritabaniadi           =   "RDYmedia";

$veritabanibaglantisi    = new mysqli($veritabanihostadresi,$veritabanikullaniciadi,$veritabanisifresi,$veritabaniadi);
$veritabanibaglantisi->set_charset("utf-8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

$veritabanibaglantisi->close();
----------------------------------------------------------*/
/*
$veritabanibaglantisi    = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

$veritabanibaglantisi->close();
----------------------------------------------------------*/
/*
$veritabanibaglantisi    = new mysqli("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi) {
    echo " veritabanina baglati kuruldu";
    $veritabanibaglantisi->select_db("RDYmedia");
}else {
    echo "veritabanina baglanilamadi";
}

$veritabanibaglantisi->close();
----------------------------------------------------------*/
/*
$veritabanibaglantisi    = new mysqli("localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi->connect_errno) {
    echo "veritabanina baglanilamadi <br />";
    echo "MySQL hata aciklamasi : " . $veritabanibaglantisi->connect_error;
}else {
    echo " veritabanina baglati kuruldu";
    $veritabanibaglantisi->select_db("RDYmedia");
}

$veritabanibaglantisi->close();
----------------------------------------------------------*/
$veritabanibaglantisi    = new mysqli("localhost","dadaroot","root");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi->connect_errno) {
   die("baglanilamadi");
}else {
    echo " veritabanina baglati kuruldu";
}
$veritabanibaglantisi->close();



?>
</body>
</html>	