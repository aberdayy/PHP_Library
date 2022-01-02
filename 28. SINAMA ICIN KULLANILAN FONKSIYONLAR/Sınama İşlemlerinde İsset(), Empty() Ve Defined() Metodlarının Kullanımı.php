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
defined()       :   belirtilecek olan sabitin varligini sinamak  icin kullanir.islem sonucu  daima boolean yani mantiksal veri turunde doner.
İsset()         :   belirtilecek olan degiskeni veya dizi icerisinde belirtilecek olan anahtarin varligini sinamak icin kullanilir. islem sonucu daima boolean yani mantiksal veri turunde doner.
Empty()         :   belirtilecek olan degiskenin veya dizi icerisinde belirtilecek olan anahtarin daha onceden tanimlanmis oldugunu sinamak icin kullanilir islem sonucu daima boolean yani mantiksal veri turunde doner.
*/
/*
$kontrol = defined("ISIM");
if ($kontrol==true) {
    echo "isim adinda bir sabit bulunmaktadir babacim";
}else {
    echo "isim adinda bir sabit yok babacim bosuna arama";
}
--------------------------*/
/*
define("ISIM", "ataberk erday");

$kontrol = defined("ISIM");
if ($kontrol==true) {
    echo "isim adinda bir sabit bulunmaktadir babacim";
}else {
    echo "isim adinda bir sabit yok babacim bosuna arama";
}
------------------------------*/
/*
const ISIM = "ataberk erday";

$kontrol = defined("ISIM");
if ($kontrol==true) {
    echo "isim adinda bir sabit bulunmaktadir babacim";
}else {
    echo "isim adinda bir sabit yok babacim bosuna arama";
}
---------------------------------------*/

//---------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!---------------------------------------------
/*
$kontrol = isset($metin);  
if ($kontrol==true) {
    echo "isim adinda bir degisken bulunmaktadir babacim";
}else {
    echo "isim adinda bir degisken yok babacim bosuna arama";
}
---------------------------------------*/
/*
$isim = "ataberk erday";
$kontrol = isset($isim);  
if ($kontrol==true) { 
    echo "isim adinda bir degisken bulunmaktadir babacim icerigide : " . $isim . "'dir";
}else {
    echo "isim adinda bir degisken yok babacim bosuna arama";
}
---------------------------------------*/

/*
$kontrol = isset($isim[2]);  
if ($kontrol==true) { 
    echo "isim adindaki dizi icerisinde 2 anahtari bulunmaktadir";
}else {
    echo "isim adindaki dizi icerisinde 2 anahtari bulunmamaktadir";
}
---------------------------------------*/
/*
$isim = ["ataberk","esra","sadik","lacin"];

$kontrol = isset($isim[2]);  
if ($kontrol==true) { 
    echo "isim adindaki dizi icerisinde 2 anahtari bulunmaktadir";
}else {
    echo "isim adindaki dizi icerisinde 2 anahtari bulunmamaktadir";
}
--------------------------------*/
/*
$isimler = ["isim1"=>"ataberk","isim2"=>"esra","isim3"=>"sadik","isim4"=>"lacin"];

$kontrol = isset($isimler["isim2"]);  
if ($kontrol==true) { 
    echo "isimler adindaki dizi icerisinde isim2 anahtari bulunmaktadir";
}else {
    echo "isimler adindaki dizi icerisinde isim2 anahtari bulunmamaktadir";
}
--------------------------------*/
//---------------------------!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!---------------------------------------------
/*
$kontrol = empty($isim);
if ($kontrol==true) {
    echo "isim adinda bir sabit yok babacim bosuna arama";
}else {
    echo "isim adinda bir sabit bulunmaktadir babacim";
}
--------------------------------------*/
/*
$isim = "ataberk";
$kontrol = empty($isim);
if ($kontrol==true) {
    echo "isim adinda bir sabit yok babacim bosuna arama";
}else {
    echo "isim adinda bir sabit bulunmaktadir babacim";
}
-----------------------------------------*/

$isimler = ["isim1"=>"ataberk","isim2"=>"esra","isim3"=>"sadik","isim4"=>"lacin"];

$kontrol = empty($isimler["isim2"]);  
if ($kontrol==true) { 
    echo "isimler adindaki dizi icerisinde isim2 anahtari bulunmamaktadir";
}else {
    echo "isimler adindaki dizi icerisinde isim2 anahtari bulunmaktadir";
}

?>
</body>
</html>	