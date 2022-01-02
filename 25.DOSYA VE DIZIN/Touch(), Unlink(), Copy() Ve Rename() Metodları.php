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
Touch()     :   belirtilecek olan deger dogrultusunda yeni bir deger olusturmak icin kullanir. ayrica istenirse islem sonucunu boolean(mantiksal) veri turunde dondurmek icinde kullanilir. 
Unlink()    :   belirtilecek olan deger dogrultusunda dosya silmek icin kullanilir. ayricaa islem soucunu boolean(mantiksal) veri turunde dondurmek icinde kullanilir. 
Copy()      :   belirtilecek olan deger dogrultusunda dosya kopyalamak icin kullanilir. ayricaa islem soucunu boolean(mantiksal) veri turunde dondurmek icinde kullanilir
Rename()    :   belirtilecek olan deger dogrultusunda dosyayi yada dizini yeniden adlandirmak icin kullanilir veya tasimak icin kullanilir. ayricaa islem soucunu boolean(mantiksal) veri turunde dondurmek icinde kullanili
*/
/*
$yol = "araba";
touch($yol); //var olan dosya olusturulmak istenirse var olan dosyaya dokunmaz ve yeni bir dosya olusturmaz
------------------------------*/
/*
$yol = "araba3";
$olsutur = touch($yol); 
if ($olsutur==1) {
    echo "dosya basariyla olusturuldu.";
}elseif ($olsutur==0) {
    echo "dosya olusturulamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
-----------------------------*/
/*
$dosya = "aa.php";
$dizin = "dosya/ ";
$birlestir = $dizin.$dosya;
$olsutur = touch($birlestir); 

if ($olsutur==1) {
    echo "dosya basariyla olusturuldu.";
}elseif ($olsutur==0) {
    echo "dosya olusturulamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
} 
------------------------------*/
/*
$dosya = "index2.php";
unlink($dosya); 
--------------------------------------*/
/*
$dosya = "araba";
$sil = unlink($dosya); 
if ($sil==1) {
    echo "dosya basariyla silindi.";
}elseif ($dosya==0) {
    echo "dosya silinedi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
----------------------------*/
/*
$dosya = "index.php";
$kopyadosya = "extra.php";
copy($dosya, $kopyadosya); //once orjinal dosya sonra kopyalandiktan sonraki 
-------------------------------*/
/*
$dosya = "index.php";
$kopyadosya = "extra.php";

$kopyala = copy($dosya, $kopyadosya); //once orjinal dosya sonra kopyalandiktan sonraki 

if ($kopyala==1) {
    echo "dosya basariyla kopyalandi.";
}elseif ($kopyala==0) {
    echo "dosya kopyalanamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
---------------------------------*/
/*
$dosyayolu  = "gecici/";
$dosya = "index.php";
$dosyayoluveadi =   $dosyayoluveadi.$dosya;

$kopyadosyayolu = "dosya/";
$kopyadosya = "ataberk.php";
$kopyadosyayoluveadi =   $kopyadosyayolu.$kopyadosya;

$kopyala = copy($dosyayoluveadi, $kopyadosyayoluveadi); //once orjinal dosya sonra kopyalandiktan sonraki 

if ($kopyala==1) {
    echo "dosya basariyla kopyalandi.";
}elseif ($kopyala==0) {
    echo "dosya kopyalanamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
--------------------------------------------- */

/*
$dosya              = "extra.php";
$yenidosyadi        = "ataberk2.php";

rename($dosya, $yenidosyadi);
----------------------------------------*/
/*
$dosya              = "extra.php";
$yenidosyadi        = "ataberk2.php";

$degistir = rename($dosya, $yenidosyadi);


if ($degistir==1) {
    echo "dosya adi basariyla degistirildi.";
}elseif ($degistir==0) {
    echo "dosya adi degistirilemedi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
---------------------------------------------*/
/*
$dizin              = "gecici/";
$yenidizinadi       = "resimler";

$isimdegistir = rename($dizin, $yenidizinadi);


if ($isimdegistir==1) {
    echo "dizin adi basariyla degistirildi.";
}elseif ($isimdegistir==0) {
    echo "dizin adi degistirilemedi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
---------------------------------------------*/
/*
$dizin              = "dosyalar/";
$dosya              = "ataberk.php";
$birlestir          = $dizin.$dosya;

$yenidizin          = "rarlar/";
$yenidosya          = "ataberk.php";
$yenibirlestir      = $yenidizin.$yenidosya;


$tasi = rename($birlestir, $yenibirlestir);


if ($tasi==1) {
    echo "dosya basariyla tasindi degistirildi.";
}elseif ($tasi==0) {
    echo "dosya tasinamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
---------------------------------------------*/
/*
$dizin              = "dosyalar";

$yenidizin          = "rarlar/dosyalar";

$tasi = rename($dizin, $yenidizin);


if ($tasi==1) {
    echo "dizin basariyla tasindi .";
}elseif ($tasi==0) {
    echo "dizin tasinamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}
---------------------------------------------*/

$dizin              = "dosyalar";

$yenidizin          = "rarlar/ornek";

$tasi = rename($dizin, $yenidizin);


if ($tasi==1) {
    echo "dizin basariyla tasindi .";
}elseif ($tasi==0) {
    echo "dizin tasinamadi.";
}else{
    echo "Aman! Bilinmeyen birsey oldu!!";
}


























?>
</body>
</html>	