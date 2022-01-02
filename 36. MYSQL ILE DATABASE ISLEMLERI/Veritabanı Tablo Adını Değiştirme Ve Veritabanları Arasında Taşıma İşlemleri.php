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
RENAME      :   MySQL sunucusu icerisindeki database de bulunan herhangi bir tablonun adini degistirmek icin kullanilir.    Ayrica istenirse herhangi bir tabloyu icerisinde bulundugu database den baska 
bir database e tasimak icin kullanilir.
*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi<br />";
    echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
}else {
    echo "baglanti kuruldu<br />";
}

$sorgu = mysqli_query($veritabanibaglantisi, "RENAME TABLE deneme TO Degisti");
if ($sorgu) {
    echo "tablo adi guncellendi";
}else {
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);
--------------------------------------------------------------------------------------*/

$veritabanibaglantisi = mysqli_connect("localhost","root","root");
mysqli_set_charset($veritabanibaglantisi, "UTF8");
if (mysqli_connect_errno()) {
    echo "baglanti hatasi<br />";
    echo "hata aciklamasi : " . mysqli_connect_error() . "<br />";
}else {
    echo "baglanti kuruldu<br />";
}

$sorgu = mysqli_query($veritabanibaglantisi, "RENAME TABLE RDYmedia.Degisti TO ataberk.yenidendegisti ");
if ($sorgu) {
    echo "tablo adi guncellendi";
}else {
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);



?>
</body>
</html>	