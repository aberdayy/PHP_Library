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
is_string()     :   belirtilecek olan degisken iceriginin string (alfanumerik) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_int()        :   belirtilecek olan degisken iceriginin integer (tamsayi) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_integer()    :   belirtilecek olan degisken iceriginin integer (tamsayi) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_long()       :   belirtilecek olan degisken iceriginin integer (tamsayi) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_double()     :   belirtilecek olan degisken iceriginin double/float (ondalikli) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_float()      :   belirtilecek olan degisken iceriginin double/float (ondalikli) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner  
is_real()       :   belirtilecek olan degisken iceriginin double/float (ondalikli) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner  
is_numeric()    :   belirtilecek olan degisken iceriginin numeric (sayisal) veri turlerinden biri olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner  
is_bool()       :   belirtilecek olan degisken iceriginin boolean (mantiksal) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_null()       :   belirtilecek olan degisken iceriginin null (bos/degersiz) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_resource()   :   belirtilecek olan degisken iceriginin resource (kaynak) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_callable()   :   belirtilecek olan degisken iceriginin callable (geri cagirimlar/geri cagirabilenler) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_array()      :   belirtilecek olan degisken iceriginin array (dizi) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
is_object()     :   belirtilecek olan degisken iceriginin object (nesne) veri turunde olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean veri turunde doner
*/
/*
$deger = "ataberk erday";
echo is_string($deger);
---------------------------------------------------------------------*/
/*
$deger = "ataberk erday";
$sorgula = is_string($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi string veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi string veri turunde degildir';
}
---------------------------------------------------------------------*/
/*
$deger = 3;
$sorgula = is_string($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi string veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi string veri turunde degildir';
}
---------------------------------------------------------------------*/
//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
$deger = 3;
$sorgula = is_int($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi integer veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi integer veri turunde degildir';
}
---------------------------------------------------------------------*/ // IS_INT/LONG/INTEGER CALISMA MANTIGI AYNIDIR

/*
$deger = ["ali"];
$sorgula = is_int($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi integer veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi integer veri turunde degildir';
}
---------------------------------------------------------------------*/

//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/

/*
$deger = 3.23;
$sorgula = is_double($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi double veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi double veri turunde degildir';
}
---------------------------------------------------------------------*/ //  IS_DOUBLE/FLOAT/REAL CALISMA MANTIGI AYNIDIR

/*
$deger = ["MUSTAFA"];
$sorgula = is_double($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi double veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi double veri turunde degildir';
}
---------------------------------------------------------------------*/

//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
$deger = 3.23;
$sorgula = is_numeric($deger);
if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi NUMERIC veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi NUMERIC veri turunde degildir';
}
---------------------------------------------------------------------*/ //BUTUN SAYI RULERINI BULAABILIR.
/*
$deger = ["MUSTAFA"];
$sorgula = is_numeric($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi NUMERIC veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi NUMERIC veri turunde degildir';
}
---------------------------------------------------------------------*/
//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
$deger = true;
$sorgula = is_bool($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi BOOLEAN veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi BOOLEAN veri turunde degildir';
}
---------------------------------------------------------------------*/
/*
$deger = "sikis";
$sorgula = is_bool($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi BOOLEAN veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi BOOLEAN veri turunde degildir';
}
---------------------------------------------------------------------*/

//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
$deger = null;
$sorgula = is_null($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi NULL veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi NULL veri turunde degildir';
}
---------------------------------------------------------------------*/ //ICERISINDE SADECE NULL YAZMALIDIR 
/*
$deger = "";
$sorgula = is_null($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi NULL veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi NULL veri turunde degildir';
}
---------------------------------------------------------------------*/
//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
$dosya = fopen("ornek.rtf","r");
$sorgula = is_resource($dosya);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi RESOURCE veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi RESOURCE veri turunde degildir'; //DOSYA OLMADIGI  SURECE HER ZAMAN FALSE DONER OINCE DOSYANIN OLUSTURULMASI GERERKIR.
}
---------------------------------------------------------------------*/
/*
$dosya = fopen("ornek2.rtf","r");
$sorgula = is_resource($dosya);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi RESOURCE veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi RESOURCE veri turunde degildir'; //DOSYA OLMADIGI  SURECE HER ZAMAN FALSE DONER OINCE DOSYANIN OLUSTURULMASI GERERKIR.
}
---------------------------------------------------------------------*/
//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
function deneme(){
    
}
$sorgula = is_callable("deneme");

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi CALLABLE veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi CALLABLE veri turunde degildir'; 
}
---------------------------------------------------------------------*/
/*
$sorgula = is_callable("deneme");

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi CALLABLE veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi CALLABLE veri turunde degildir'; 
}
---------------------------------------------------------------------*/
//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
$deger = ["MUSTAFA"];
$sorgula = is_array($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi ARRAY veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi ARRAY veri turunde degildir';
}
---------------------------------------------------------------------*/
/*
$deger = 12;
$sorgula = is_array($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi ARRAY veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi ARRAY veri turunde degildir';
}
---------------------------------------------------------------------*/
//---------------------------------------------------------------------*/---------------------------------------------------------------------*/---------------------------------------------------------------------*/
/*
class deneme{
}
$deger = new deneme;
$sorgula = is_object($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi OBJECT veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi OBJECT veri turunde degildir';
}
---------------------------------------------------------------------*/
$deger = "falan";
$sorgula = is_object($deger);

if ($sorgula==true) {
    echo '$deger adindaki degiskenin icerigi OBJECT veri turundedir';
}else {
    echo '$deger adindaki degiskenin icerigi OBJECT veri turunde degildir';
}






?>
</body>
</html>	