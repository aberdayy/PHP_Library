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
date()      : tarih ve saat bilgilerini bularak buldugu bilgileri geriye dondurur. Ayrica tarih ve saat bilgilerini istege bagli olarak bicimlendirmek icinde kullanilir.
checkdate() : belirtilecek olan zamani miladi(gregoryen) takvime gore dogrulamasini yapar(boolean olarak 0-1) geriye dondurmek icin kullanilir.
*/
/*
$zaman = date("d.m.Y H:i:s"); // gun ay yil saat dakika saniye
echo "zaman : " . $zaman;
---------------------------*/
/*
$zaman = date("d/m/Y H:i:s");
echo "zaman : " . $zaman;
-------------------*/
/*
$zaman = date("d F Y l ");
echo "zaman : " . $zaman;
-----------------------*/
/*
$zaman = date("U");
echo "zaman damgasi : " . $zaman;
--------------------------*/
/*
$zamandamgasi = date("U");
$zaman = date("d.m.Y H:i.s");
echo "zaman (" . $zamandamgasi .")  " . $zaman;
------------------------------*/
/*
$zamandamgasi = 1018049520;
$zaman = date("d.m.Y H:i.s" ,$zamandamgasi);
echo "zaman (" . $zamandamgasi .")  " . $zaman;
--------------------*/

$deger = checkdate(12,8,1980);//once ay degeri giriliyor.
if ($deger==1) {
    echo " girilen tarih deger gecerlidir.";
}else {
    echo "girilen tarih degeri gecerli degildir.";
}
















?>
</body>
</html>	