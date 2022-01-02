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
mysqli_query()      :   MySQL sunucusuna acilmis olan bir baglanti dahilinde yeni bir sorgu yapmak icin kullanilir. Ayrica istenirse sorgu islemi ile alakali tum 
bilgileri bulur ve buldugu degerlerden yeni bir dizi olusturur. olusturdugu dizi degerini geriye dondurur.
query()             :   MySQL sunucusuna nesnesel yapi ile acilmis olan bir baglanti dahilinde yeni bir sorgu yapmak icin kullanilir. Ayrica istenirse sorgu islemi ile alakali tum 
bilgileri bulur ve buldugu degerlerden yeni bir dizi olusturur. olusturdugu dizi degerini geriye dondurur.
*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi <br />";
    echo "hata aciklamsi : " . mysqli_connect_error();
}else {
    echo "baglanti saglandi <br />";
}
$sorgu          =   mysqli_query($veritabanibaglantisi,"SELECT * FROM kayitlar");
if ($sorgu) {
    echo "<pre>";
    print_r($sorgu);
    echo "</pre>";
}else {
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);
---------------------------------------------------*/

$veritabanibaglantisi       = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglanti hatasi <br />";
    echo "hata aciklamsi : " . $veritabanibaglantisi->connect_error();
}else {
    echo "baglanti saglandi <br />";
}


$sorgu          =   $veritabanibaglantisi->query("SELECT * FROM kayitlar");
if ($sorgu) {
    echo "<pre>";
    print_r($sorgu);
    echo "</pre>";
}else {
    echo "sorgu hatasi";
}
$veritabanibaglantisi->close();
?>
</body>
</html>	