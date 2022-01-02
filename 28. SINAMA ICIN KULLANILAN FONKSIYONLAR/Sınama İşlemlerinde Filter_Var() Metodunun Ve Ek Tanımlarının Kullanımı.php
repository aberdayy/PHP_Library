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
filter_var()                    :   kendisine parametre olarak verilen deger dogrultusunda icerigi filtreleyerek, icerigin filtrelemeye uygun olup olmadigini sinamak icin kullanilir. islem sonucu daima boolean doner.

FILTER_VALIDATE_BOOLEAN         :   belirtilecek olan icerigin boolean yani mantiksal veri turunde olup olmadigini sinamak icin kullanir.  islem sonucu daima boolean doner. 
            true degerleri : true, 1, on, yes
            false degerleri: false, 0, off, no
            
FILTER_VALIDATE_INT             :   belirtilecek olan icerigin integer yani tamsayi veri turunde olup olmadigini sinamak icin kullanir.  islem sonucu daima boolean doner. 
FILTER_VALIDATE_IP              :   belirtilecek olan icerigin ip adresi turunde olup olmadigini sinamak icin kullanir.  islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
    FILTER_FLAG_IPV4            :   belirtilecek olan ip adresinin IPV4 uyumlu olup olmadigini sinamak icin kullanir. islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
    FILTER_FLAG_IPV6            :   belirtilecek olan ip adresinin IPV6 uyumlu olup olmadigini sinamak icin kullanir. islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
FILTER_VALIDATE_EMAIL           :   belirtilecek olan icerigin e-mail adresi turunde olup olmadigini sinamak icin kullanir.  islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
FILTER_VALIDATE_URL             :   belirtilecek olan icerigin URL adresi turunde olup olmadigini sinamak icin kullanir.  islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
    FILTER_FLAG_SCHENE_REQUIRED :   belirtilecek olan URL adresinin RFC(request for comment)(yorum talebi) uyumlu olup olmadigini sinamak icin kullanir. islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
    FILTER_FLAG_HOST_REQUIRED   :   belirtilecek olan URL adresinde host adinin olup olmadigini sinamak icin kullanir. islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
    FILTER_FLAG_PATH_REQUIRED   :   belirtilecek olan URL adresinde path yani yol degerinin olup olmadigini sinamak icin kullanir. islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
    FILTER_FLAG_QUERY_REQUIRED  :   belirtilecek olan URL adresinde query yani sorgu degerinin olup olmadigini sinamak icin kullanir. islem sonucu  basarili olursa degeri geriye dondurur. islem sonucu basariz olursa herhangi bir deger dondurmez
*/
/*
$deger = "ataberk erday";

if (filter_var($deger,FILTER_VALIDATE_BOOLEAN)) {
    echo "sinanan icerik boolean veri turundedir";
}else {
    echo "sinanan icerik boolean veri turunde degildir";
}
--------------------------------------------------------------------------------*/
/*
$deger = "ataberk erday";

if (filter_var($deger,FILTER_VALIDATE_INT)) {
    echo "sinanan icerik integer veri turundedir";
}else {
    echo "sinanan icerik integer veri turunde degildir";
}
--------------------------------------------------------------------------------*/
/*
$deger = "192.168.0.11";

if (filter_var($deger,FILTER_VALIDATE_IP)) {
    echo "sinanan icerik IP adresi turundedir";
}else {
    echo "sinanan icerik IP adresi turunde degildir";
}
--------------------------------------------------------------------------------*/
/*
$deger = "3FFE:1900:4545:3:200:F8FF:FE21:67CF";

if (filter_var($deger,FILTER_VALIDATE_IP)) {
    echo "sinanan icerik IP adresi turundedir";
}else {
    echo "sinanan icerik IP adresi turunde degildir";
}
--------------------------------------------------------------------------------*/
/*
$deger = "192.168.0.11";

if (filter_var($deger,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)) {
    echo "sinanan icerik IP V4 turundedir";
}else {
    echo "sinanan icerik IP V4 degildir";
}
--------------------------------------------------------------------------------*/
/*
$deger = "3FFE:1900:4545:3:200:F8FF:FE21:67CF";

if (filter_var($deger,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)) {
    echo "sinanan icerik IP V6 turundedir";
}else {
    echo "sinanan icerik IP V6 degildir";
}
--------------------------------------------------------------------------------*/
/*
$deger = "ataverl.eray@gmail.com";

if (filter_var($deger,FILTER_VALIDATE_EMAIL)) {
    echo "sinanan icerik email adresidir";
}else {
    echo "sinanan icerik email adresi degildir";
}
-----------------------------------------------------------------------------*/
/*
$deger = "adadasdadaadadadda";

if (filter_var($deger,FILTER_VALIDATE_EMAIL)) {
    echo "sinanan icerik email adresidir";
}else {
    echo "sinanan icerik email adresi degildir";
}
-----------------------------------------------------------------------------*/
/*
$deger = "https://www.hepsibuarada.com";

if (filter_var($deger,FILTER_VALIDATE_URL)) {
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-----------------------------------------------------------------------------*/
/*
$deger = "www.hepsibuarada.com";

if (filter_var($deger,FILTER_VALIDATE_URL)) {
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------*/
/*
$deger = "https://hepsibuarada.com";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED)) { //basinda http veya https takisi olmasini zorunlu kilar 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
---------------------------------------------------------------------------------*/
/*
$deger = "https://";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED)) { //basinda http veya https takisi olmasini zorunlu kilar 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------------*/
/*
$deger = "https://www.hepsibuarada.com";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED)) { 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------------*/
/*
$deger = "https://";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED)) {
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------------*/
/*
$deger = "https://www.hepsibuarada.com/anakartlar";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)) { 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------------*/
/*
$deger = "https://www.hepsibuarada.com";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)) { 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------------*/
/*
$deger = "https://www.hepsiburada.com/regal-cmi-9102-a-9-kg-1000-devir-camasir-makinesi-p-HBV00000VR81N?magaza=Hepsiburada";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)) { 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}
-------------------------------------------------------------------------------*/

$deger = "https://www.hepsibuarada.com";

if (filter_var($deger,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)) { 
    echo "sinanan icerik url adresidir";
}else {
    echo "sinanan icerik url adresi degildir";
}



?>
</body>
</html>	