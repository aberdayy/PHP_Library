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
mysqli_init()           :   MySQL sunucusuna yeni bir baglanti acmak icin kullanilir.
mysqli_real_connect()   :   mysqli_init metodu kullanilarak acilmis olan yeni MySQL baglantisina baglanti bilgilerini atamak icin kullanilir.
real_connect()          :   ysqli_init metodu kullanilarak nesnesel yapi ile acilmis olan yeni MySQL baglantisina baglanti bilgilerini atamak icin kullanilir.
*/
/*
$veritabanihostadresi       =   "localhost";
$veritabanikullaniciadi     =   "root";
$veritabanisifresi          =   "root";
$veritabaniadi              =   "RDYmedia";

$veritabanibaglantisi       = mysqli_init();
mysqli_real_connect($veritabanibaglantisi,$veritabanihostadresi,$veritabanikullaniciadi,$veritabanisifresi,$veritabaniadi);
mysqli_set_charset($veritabanibaglantisi,"UTF8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

mysqli_close($veritabanibaglantisi);
--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
mysqli_real_connect($veritabanibaglantisi, "localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

mysqli_close($veritabanibaglantisi);
--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
mysqli_real_connect($veritabanibaglantisi, "localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if ($veritabanibaglantisi) {
    
    echo "baglanti kuruldu";
    mysqli_select_db($veritabanibaglantisi,"RDYmedia");

}else {
    echo "baglanti hatasi!";
}


mysqli_close($veritabanibaglantisi);
--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
mysqli_real_connect($veritabanibaglantisi, "localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if (mysqli_connect_errno($veritabanibaglantisi)) {
    echo "baglanti hatasi! <br />";
    echo "hata aciklamasi : " . mysqli_connect_error();
}else {
    echo "baglanti kuruldu";
    mysqli_select_db($veritabanibaglantisi,"RDYmedia");
    
}


mysqli_close($veritabanibaglantisi);


--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
mysqli_real_connect($veritabanibaglantisi, "localhost","root","root");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if (mysqli_connect_errno($veritabanibaglantisi)) {
    echo "baglanti hatasi! <br />";
    echo "hata aciklamasi : " . mysqli_connect_error();
}else {
    echo "baglanti kuruldu";
    mysqli_select_db($veritabanibaglantisi,"RDYmedia");
    
}
mysqli_close($veritabanibaglantisi);
--------------------------------------------------------------------------*/
/*
$veritabanihostadresi       =   "localhost";
$veritabanikullaniciadi     =   "root";
$veritabanisifresi          =   "root";
$veritabaniadi              =   "RDYmedia";

$veritabanibaglantisi       = mysqli_init();
$veritabanibaglantisi->real_connect($veritabanihostadresi,$veritabanikullaniciadi,$veritabanisifresi,$veritabaniadi);
$veritabanibaglantisi->set_charset("UTF8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";



$veritabanibaglantisi->close();
--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
$veritabanibaglantisi->real_connect( "localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");

echo "<pre>";
print_r($veritabanibaglantisi);
echo "</pre>";

$veritabanibaglantisi->close();
--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
$veritabanibaglantisi->real_connect( "localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi) {
    
    echo "baglanti kuruldu";
    $veritabanibaglantisi->select_db("RDYmedia");
    
}else {
    echo "baglanti hatasi!";
}

$veritabanibaglantisi->close();
--------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       = mysqli_init();
$veritabanibaglantisi->real_connect( "localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi->connect_errno) {
    echo "baglanti hatasi! <br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error;
    
}else {
        echo "baglanti kuruldu";
    $veritabanibaglantisi->select_db("RDYmedia");

}

$veritabanibaglantisi->close();
--------------------------------------------------------------------------*/

$veritabanibaglantisi       = mysqli_init();
$veritabanibaglantisi->real_connect( "localhost","root","root");
$veritabanibaglantisi->set_charset("UTF8");

if ($veritabanibaglantisi->connect_errno) {
    echo "baglanti hatasi! <br />";
    echo "hata aciklamasi : " . $veritabanibaglantisi->connect_error;
    
}else {
        echo "baglanti kuruldu";
    $veritabanibaglantisi->select_db("RDYmedia");

}

$veritabanibaglantisi->close();


















?>
</body>
</html>	