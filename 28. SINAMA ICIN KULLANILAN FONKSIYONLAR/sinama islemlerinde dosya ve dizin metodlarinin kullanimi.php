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
file_exists()       :   dosyanin belirtilecek olan path e bagli olarak varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_dir()            :   icerigin belirtilecek olan path e bagli olarak dizin oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_file()           :   icerigin belirtilecek olan path e bagli olarak dosya oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_readable()       :   belirtilecek olan path e bagli olarak dosyanin okunabilir oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_writeable()      :   belirtilecek olan path e bagli olarak dosyanin yazilabilir oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_writable()       :   belirtilecek olan path e bagli olarak dosyanin yazilabilir oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_executable()     :   belirtilecek olan path e bagli olarak dosyanin calistirilabilir oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
is_uploaded_file()  :   belirtilecek olan path e bagli olarak dosyanin yuklenebilir oldugunu sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner.
*/
/*
$dosya= "ornek.rtf";
$sorgula = file_exists($dosya);
if ($sorgula==true) {
    echo $dosya. " dosyasi mevcut!";
}else {
    echo $dosya. " dosyasi mevcut degil!";
}
----------------------------------------------*/
/*
$dosya= "deneme";
$sorgula = is_dir($dosya);
if ($sorgula==true) {
    echo $dosya. " klasoru mevcut!";
}else {
    echo $dosya. " klasoru mevcut degil!";
}
----------------------------------------------*/
/*
$dosya= "ornek.rtf";
$sorgula = is_file($dosya);
if ($sorgula==true) {
    echo $dosya. " dosyasi mevcut!";
}else {
    echo $dosya. " dosyasi mevcut degil!";
}
----------------------------------------------*/
/*
$dosya= "ornek.rtf";
$sorgula = is_readable($dosya);
if ($sorgula==true) {
    echo $dosya. " dosyasi okunabilir!";
}else {
    echo $dosya. " dosyasi okunabilir degil!";
}
----------------------------------------------*/
/*
$dosya= "ornek.rtf";
$sorgula = is_writeable($dosya);
if ($sorgula==true) {
    echo $dosya. " dosyasi yazilabilir!";
}else {
    echo $dosya. " dosyasi yazilabilir degil!";
}
----------------------------------------------*/
/*
//CALISMIYOR NEDENI BILINMIYOR
$dosya= "sublimetext.dmg";
$sorgula = is_executable($dosya);
if ($sorgula==true) {
    echo $dosya. " dosyasi calistirilabilir!";
}else {
    echo $dosya. " dosyasi calistirilabilir degil!";
}
----------------------------------------------*/

$dosya= "ornek.rtf";
$sorgula = is_uploaded_file($dosya);
if ($sorgula==true) {
    echo $dosya. " dosyasi yuklenebilir!";
}else {
    echo $dosya. " dosyasi yuklenebilir degil!";
}





?>
</body>
</html>	