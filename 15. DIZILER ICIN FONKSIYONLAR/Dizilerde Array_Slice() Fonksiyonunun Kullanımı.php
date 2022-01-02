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
array_slice()       :   dizinin belli bolumlerini alarak yeni bir dizi olusturmak icin kullanilir.
*/
/*
$isimler    =   array("toyota","opel","vosvps","nissan","subaru","tofas");

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc      =   array_slice($isimler, 3);

echo "<pre>";
print_r($sonuc);
echo "<pre>";
--------------------------------------------------
*/

/*
$isimler    =   array("a1"=>"toyota","a2"=>"opel","a3"=>"vosvps","a4"=>"nissan","a5"=>"subaru","a6"=>"tofas");

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc      =   array_slice($isimler, 3);

echo "<pre>";
print_r($sonuc);
echo "<pre>";
-------------------------------------------
*/
/*
$isimler    =   array("toyota","opel","vosvos","nissan","subaru","tofas","merco","chreysler","ford","ferrari");

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc      =   array_slice($isimler, 5, 4); //ilk virgul kacinci idiks den alacagi ikinci viurgul ise kac tane deger alacagini gosteririr.

echo "<pre>";
print_r($sonuc);
echo "<pre>";
-------------------------------------------------------\
*/

/*
$isimler    =   array("toyota","opel","vosvos","nissan","subaru","tofas","merco","chreysler","ford","ferrari");

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc      =   array_slice($isimler, -4, 2); //sondan eksi ile alir. 

echo "<pre>";
print_r($sonuc);
echo "<pre>";

----------------------------------------------------------------------
*/

/*

$isimler    =   array("a1"=>"toyota","a2"=>"opel","a3"=>"vosvos","a4"=>"nissan","a5"=>"subaru","a6"=>"tofas","a7"=>"merco","a8"=>"chreysler","a9"=>"ford","a10"=>"ferrari");

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc      =   array_slice($isimler,4,5); 

echo "<pre>";
print_r($sonuc);
echo "<pre>";
--------------------------------------------------\
*/
$isimler    =   array("toyota","opel","vosvos","nissan","subaru","tofas","merco","chreysler","ford","ferrari");

echo "<pre>";
print_r($isimler);
echo "<pre>";

$sonuc      =   array_slice($isimler,4,5,true); //sondaki true anahtarlarin korunmasini saglar. ORTADAKI VIRGULE COUNT($) YAZARSAK SONUNA KADAR ALIR!

echo "<pre>";
print_r($sonuc);
echo "<pre>";





?>


</body>
</html>	