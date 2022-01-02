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
function_exists()   :   belrtilecek olan fonksiyonun varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
class_exists()      :   belrtilecek olan classin varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
method_exists()     :   belrtilecek olan class icerisinde belirtilecek olan metodun(fonksiyonun) varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
property_exists()   :   belrtilecek olan class icerisinde belirtilecek olan ozelligin(dehiskenler) varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
trait_exists()      :   belrtilecek olan class'a ait  olan trait(ozelligin) varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
interface_exists()  :   belrtilecek olan class icerisinde belirtilecek olan interfacein(arayuzun) varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
is_subclass_off()   :   belrtilecek olan classdan tureyen, belirtilecek olan subclass(altsinif) varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
is_a()              :   belrtilecek olan class'in nesnel ornegini varligini sinamak icin kullanilir. islem sonucu daima boolean veri turunde dondurur.  
*/
/*
function deneme(){

}
$sorgula = function_exists("deneme");

if ($sorgula==1) {
    echo "fonksiyon mevcut!";
}else {
    echo "fonksiyon mevcut degil!";
}
---------------------------------------*/
/*
$sorgula = function_exists("deneme");

if ($sorgula==1) {
    echo "fonksiyon mevcut!";
}else {
    echo "fonksiyon mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
/*
class deneme{
    
}
$sorgula = class_exists("deneme");

if ($sorgula==1) {
    echo "class mevcut!";
}else {
    echo "class mevcut degil!";
}
---------------------------------------*/
/*
$sorgula = class_exists("deneme");

if ($sorgula==1) {
    echo "class mevcut!";
}else {
    echo "class mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
/*
class deneme{
    public function method(){
        
    }
}
$islem = new deneme;
$sorgula = method_exists($islem ,"method");

if ($sorgula==1) {
    echo "method mevcut!";
}else {
    echo "method mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
/*
class deneme{
    public $demo;
}
$islem = new deneme;
$sorgula = property_exists("deneme" ,demo);

if ($sorgula==1) {
    echo "degisken mevcut!";
}else {
    echo "degisken mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
/*
trait deneme{
}
$sorgula = trait_exists("deneme");

if ($sorgula==1) {
    echo "trait mevcut!";
}else {
    echo "trait mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
/*
interface deneme{
}
$sorgula = interface_exists("deneme");

if ($sorgula==1) {
    echo "interface mevcut!";
}else {
    echo "interface mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
/*
class denemebir{
    public $isim = "ataberk";
     
 }
 class denemeiki extends denemebir {
     
 }
 $sinirbir = new denemebir;
 $sinifiki = new denemeiki;

$sorgula = is_subclass_of($sinifiki, "denemebir");

if ($sorgula==1) {
    echo "subclass mevcut!";
}else {
    echo "subclass mevcut degil!";
}
---------------------------------------*/
//---------------------------------------*/---------------------------------------*/---------------------------------------*/
class denemebir{
   
 }
 $sinirbir = new denemebir;
$sorgula = is_a($sinirbir, "denemebir");

if ($sorgula==1) {
    echo "nesnel ornek mevcut!";
}else {
    echo "nesnel ornek mevcut degil!";
}




























?>
</body>
</html>	