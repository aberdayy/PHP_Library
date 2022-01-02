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
date_modify()       :   olusturulmus olan yeni bir tarih nesnesine , belirtilecek olan tarih degerini eklemek icin kullanilir
date_add()          :   olusturulmus olan yeni bir tarih nesnesine , belirtilecek olan tarih degerini eklemek icin kullanilir
date_interval_create_from_date_string() : date add metodu ile tarih degeri ekleme islemlerinde eklenecek olan degeri tanimlamak icin kullanir.
*/
/*
$zaman = date_create("1980-12-08"); //yil ay gun

echo "<pre>";
print_r($zaman);
echo "</pre>";

date_modify($zaman, "+3 hour 45 minutes");

echo "<pre>";
print_r($zaman);
echo "</pre>";
---------------------------------*/
/*
$zaman = date_create("1980-12-08"); //yil ay gun

echo "<pre>";
print_r($zaman);
echo "</pre>";

date_modify($zaman, "-3 hour 45 minutes");

echo "<pre>";
print_r($zaman);
echo "</pre>";
// yil dakika ay vs islemleri icinde aynidir.
-------------------------------------
*/

$zaman = date_create("1980-12-08"); //yil ay gun

echo "<pre>";
print_r($zaman);
echo "</pre>";

date_add($zaman, date_interval_create_from_date_string("-8 hour 45 minutes"));

echo "<pre>";
print_r($zaman);
echo "</pre>";






















?>
</body>
</html>	