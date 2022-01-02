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
CHECK TABLE     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun kontrol edilmesini saglar.
ANALYZE TABLE   :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun analiz edilmesini saglar.
REPAIR TABLE    :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun onarilmasini saglar.
OPTIMIZE TABLE  :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun optimize edilmesini saglar.
*/
/*
$veritabanibaglantisi  = mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi <br />";
    echo "hata ciktilamasi : " . mysqli_connect_error() . "<br />";
} else {
    echo "veritabanina baglandi";
}

$sorguA     =   mysqli_query($veritabanibaglantisi,"CHECK TABLE uyeler");
$sorguB     =   mysqli_query($veritabanibaglantisi,"ANALYZE TABLE uyeler");
$sorguC     =   mysqli_query($veritabanibaglantisi,"REPAIR TABLE uyeler");
$sorguD     =   mysqli_query($veritabanibaglantisi,"OPTIMIZE TABLE uyeler");
    if (($sorguA==true) and ($sorguB==true) and ($sorguC==true) and ($sorguD==true)) {
        echo "tablo bakimi basariyla gerceklestirildi";
    } else {
        echo "sorgu hatasi";
    }
mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------*/  
$veritabanibaglantisi  = mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi <br />";
    echo "hata ciktilamasi : " . mysqli_connect_error() . "<br />";
} else {
    echo "veritabanina baglandi<br />";
}

$sorgu = mysqli_query($veritabanibaglantisi,"SHOW TABLES");
    if ($sorgu) {
        while ($tabloadi=mysqli_fetch_array($sorgu)) {

        $sorguA     =   mysqli_query($veritabanibaglantisi,"CHECK TABLE ". $tabloadi[0]);
        $sorguB     =   mysqli_query($veritabanibaglantisi,"ANALYZE TABLE ". $tabloadi[0]);
        $sorguC     =   mysqli_query($veritabanibaglantisi,"REPAIR TABLE ". $tabloadi[0]);
        $sorguD     =   mysqli_query($veritabanibaglantisi,"OPTIMIZE TABLE ". $tabloadi[0]);
    if (($sorguA==true) and ($sorguB==true) and ($sorguC==true) and ($sorguD==true)) {
        echo $tabloadi[0]." isimli tablonun bakimi basariyla gerceklestirildi<br />";
    } else {
        echo "sorgu hatasi<br />";
    }


}
} else {
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);


















?>
</body>
</html>	