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
TRUNCATE TABLE  :   MySQL sunucusundaki database icerisinde bulunan tablonun tum iceriklerini bosaltmak icin kullanilir.
*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti saglanamadi<br />";
    echo "hata : " . mysqli_connect_error()."<br />";
}else {
    echo "veritabanina baglanti saglandi";
}
$sorgu = mysqli_query($veritabanibaglantisi, "TRUNCATE TABLE deneme");

if ($sorgu) {
    echo "tum tablo icerigi bosaltildi";
} else {
    echo "sorgu hatasi";
}
----------------------------------------------------------------------*/

$veritabanibaglantisi = new mysqli("localhost","root","root","ataberk");
$veritabanibaglantisi->set_charset( "UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglanti saglanamadi<br />";
    echo "hata : " . $veritabanibaglantisi->connect_error."<br />";
}else {
    echo "veritabanina baglanti saglandi";
}
$sorgu =$veritabanibaglantisi->query( "TRUNCATE TABLE deneme");

if ($sorgu) {
    echo "tum tablo icerigi bosaltildi";
} else {
    echo "sorgu hatasi";
}



















?>
</body>
</html>	