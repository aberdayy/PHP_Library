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
mkdir() :   belirtilecek olan deger ve dizinler dogrultusunda yeni bir dizin olusturmak icin kullanilir. ayrica istenirse boolean veri turunde de deger dondurebilir.
rmdir() :   belirtilecek olan deger ve dizinler dogrultusunda dizini silmek icin kullanilir. ayrica istenirse boolean veri turunde de deger dondurebilir.
*/
/*
$dizin = "resimler";
mkdir($dizin);
---------------------*/
/*
$dizin = "resimler1";
mkdir($dizin, 0777);
-----------------------
*/
/*
$dizin = "hoppala";
mkdir($dizin);
chmod($dizin,0777);
--------------------------*/
/*
$dizin = "resimler1";
$sonuc = mkdir($dizin);

if ($sonuc==1) {
    echo "dizin basariyla olusturuldu.";
}elseif ($sonuc==0) {
    echo "dizin olusturulamadi. ";
}else {
    echo "beklenmeyen birsey oldu.";
}
-------------------------------*/
/*
$yol = "resimler1/extra/egitim/";
$dizin = "resimcik/";
$birlestir = $yol.$dizin;
$sonuc = mkdir($birlestir);

if ($sonuc==1) {
    echo "dizin basariyla olusturuldu.";
}elseif ($sonuc==0) {
    echo "dizin olusturulamadi. ";
}else {
    echo "beklenmeyen birsey oldu.";
} 
---------------------------------*/
/*
$dizin = "resim";
rmdir($dizin);
--------------------*/
/*
$dizin = "resimler1";
$sonuc = rmdir($dizin);

if ($sonuc==1) {
    echo "dizin basariyla silindi.";
}elseif ($sonuc==0) {
    echo "dizin silinemedi. ";
}else {
    echo "beklenmeyen birsey oldu.";
}
--------------------------------*/

$yol = "resimler1/extra/egitim/";
$dizin = "resimcik/";
$birlestir = $yol.$dizin;
$sonuc = rmdir($birlestir);

if ($sonuc==1) {
    echo "dizin basariyla silindi.";
}elseif ($sonuc==0) {
    echo "dizin silinemedi. ";
}else {
    echo "beklenmeyen birsey oldu.";
} 
?>
</body>
</html>	