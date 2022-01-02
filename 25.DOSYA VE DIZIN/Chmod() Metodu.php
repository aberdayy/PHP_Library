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
chmod()    :    belirtilecek olan deger ve izin dogrultusunda ilgili kaynagin dosya yada dizin erisim izinlerini ayarlamak icin kullanilir. ayrica istenirse islem boolean veri turunde de dondurebilir.
*/
/*
$dosya = "extra.php"; 
$izinler = fileperms($dosya);
echo "erisim izni degeri : " . $izinler . "<br /> ";

$bicimlendir = substr(sprintf("%o",$izinler),-4);

echo "erisim izni degeri : " . $bicimlendir . "<br /> ";
----------------------------------------------------*/
/*
$dosya = "extra.php"; 

chmod($dosya, 0777);

$izinler = fileperms($dosya);
echo "erisim izni degeri : " . $izinler . "<br /> ";

$bicimlendir = substr(sprintf("%o",$izinler),-4);

echo "erisim izni degeri : " . $bicimlendir . "<br /> ";
--------------------------------*/
/*
$dosya = "resimler"; 

chmod($dosya, 0777);

$izinler = fileperms($dosya);
echo "erisim izni degeri : " . $izinler . "<br /> ";

$bicimlendir = substr(sprintf("%o",$izinler),-4);

echo "erisim izni degeri : " . $bicimlendir . "<br /> ";
---------------------------------*/

$dosya = "extra.php"; 

$islemyap = chmod($dosya, 0777);

if ($islemyap==1) {
    $izinler = fileperms($dosya);
echo "erisim izni degeri : " . $izinler . "<br /> ";

$bicimlendir = substr(sprintf("%o",$izinler),-4);

echo "erisim izni degeri : " . $bicimlendir . "<br /> ";
}else {
    echo "chmod ayari uygulanamadi!";
}




















?>
</body>
</html>	