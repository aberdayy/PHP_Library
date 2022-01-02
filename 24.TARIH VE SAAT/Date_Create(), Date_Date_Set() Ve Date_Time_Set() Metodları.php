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
Date_Create()       :   belirtilecek olan tarih degerlerine gore yeni ir tarih nesnesi dizisi olusturarak olusturdugu dizi degerini geriye dondurur.
Date_Date_Set()     :   olusuturulmus olan yeni bir tarih nesnesini, belirtilecek olan yeni bir tarihi atamak icin kullanilir.
Date_Time_Set()     :   olusuturulmus olan yeni bir tarih nesnesini, belirtilecek olan yeni bir saati atamak icin kullanilir.   
*/

/*
$tarih = date_create();// yil ay gun siralamasi

echo "<pre>";
print_r($tarih);
echo "<pre>";
------------------------*/
/*
$tarih = date_create();
foreach ($tarih as $anahtar => $icerik) {
   echo $anahtar . ":" . $icerik . "<br />";
}
--------------------------------------*/
/*
$tarih = date_create("1980-12-08"); //saniye degerleri tanimlanamaz.

echo "<pre>";
print_r($tarih);
echo "<pre>";
---------------------------------*/
/*
$tarih = date_create("1980-12-8"); 
date_date_set($tarih,1978,07,05);//tarihin atanacagi degisken adi,yil,ay,gun
//bazi sunucularda 0 lar sikinti cikarabilir.
echo "<pre>";
print_r($tarih);
echo "<pre>";
-------------------------*/
/*
$tarih = date_create(); 
date_date_set($tarih,1980,12,8);//0 varken calismadi her zmaan kontrol et

echo "<pre>";
print_r($tarih);
echo "<pre>";
--------------------------------------*/
/*
$tarih = date_create("1980-12-8"); 
date_date_set($tarih,1978,07,05);
date_time_set($tarih,13,55,34);//saaat dakika saniye
echo "<pre>";
print_r($tarih);
echo "<pre>";
-----------------------------------*/

$tarih = date_create("1980-12-8"); 
date_time_set($tarih,13,55,34);//saaat dakika saniye
echo "<pre>";
print_r($tarih);
echo "<pre>";



















?>
</body>
</html>	