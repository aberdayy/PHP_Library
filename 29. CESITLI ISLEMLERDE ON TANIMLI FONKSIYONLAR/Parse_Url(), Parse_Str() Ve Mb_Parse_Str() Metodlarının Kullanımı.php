<?php 
 header("Refresh:20")
?>
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
parse_url()     :   belirtilecek olan URL degerini parcalarina ayristirarak islem sonucunda buldugu degerlerden yeni bir dizi olusturarak olsuturdugu degeri geriye dondurur.
    PHP_URL_SCHEME  :   Belirtilecek olan URL adresinin protokol bilgisi degeirni elde etmek icin kullanilir.
    PHP_URL_HOST    :   Belirtilecek olan URL adresinin domain(alan adi) bilgisi degerini elde etmek icin kullanilir.
    PHP_URL_PORT    :   belirtilecek olan URL adresinin port bilgisi degerinin elde etmek icin kullanilir.
    PHP_URL_USER    :   Belirtilecek olan URL adresinin kullanici adi bilgisini elde etmek icjn kullanilir.
    PHP_URL_PASS    :   Belirtilecek olan URL adresinin kullanici siferesini elde etmek icin kullanilir.
    PHP_URL_PATH    :   Belirtilecek olan URL adresinin path (yol) bilgisini elde etmek icin kullanilir.
    PHP_URL_QUERY   :   Belirtilecek olan URL adresinin query(sorgu) bilgisini elde etmek icin kullanilir.
    PHP_URL_FRAGMENT:   Belirtilecek olan URL adresinin # (diyez) (orgu iminden) sonrasi degerini elde etmek icin kullanilir.
parse_str()     :   Belirtilecek olan URl degeri icerisindeki degisken degerlerini cozumleyerek cozumledigi degiskenin degerini geriye dondurur.
mb_parse_str()  :   Belirtilecek olan URL degeri icerisindeki degisken degerlerini kendi icerisindeki belirtilecek olan yeni bir degiskene cozumleyerek, 
cozumledigi degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
*/
/*
$urladresi  =   "https://coinotag.com";

$sonuc      =   parse_url($urladresi);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://www.extraegitim.com:80";   //porta erisim icindir.

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80";   //user ve pass degerlerini verir.

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/dersler";  //path yol degerini verir

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/dersler?egitimturu=yazilim&egitimalani=web";  //query sorgu cumlesini verir.

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/dersler?egitimturu=yazilim&egitimalani=web#guvenlikyadacapa";  //fragment degerini verir

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/egitim-setleri?egitimturu=yazilim&ozellikler[]=scriptdili&ozellikler[]=ortaseviye&egitimalani=web#guvenlikyadacapa";  //fragment degerini verir

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre>";
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/egitim-setleri?egitimturu=yazilim&ozellikler[]=scriptdili&ozellikler[]=ortaseviye&egitimalani=web#guvenlikyadacapa";  //fragment degerini verir

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre><br /><br /><br /><br /><br />";



$ozelsonuc  =   $Sonuc["query"];
echo "query cumlesi : " .$ozelsonuc;
-------------------------------------------------*/
/*
$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/egitim-setleri?egitimturu=yazilim&ozellikler[]=scriptdili&ozellikler[]=ortaseviye&egitimalani=web#guvenlikyadacapa";  //fragment degerini verir

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre><br /><br /><br /><br /><br />";



$ozelsonuc  =   $Sonuc["query"];
echo "query cumlesi : " .$ozelsonuc;

echo "<br /><br /><br /><br /><br />";

parse_str($ozelsonuc);


echo "querynin egitim turu degeri : " . $egitimturu . "<br />";
echo "querynin ozellikler 0. eleman degeri : " . $ozellikler[0] . "<br />";
echo "querynin ozellikler 1. eleman degeri : " . $ozellikler[1] . "<br />";
echo "querynin egitim alani degeri : " . $egitimalani . "<br />";
-------------------------------------------------*/

$URLAdresi	=	"https://admin:123456@www.extraegitim.com:80/egitim-setleri?egitimturu=yazilim&ozellikler[]=scriptdili&ozellikler[]=ortaseviye&egitimalani=web#guvenlikyadacapa";  //fragment degerini verir

$Sonuc		=	parse_url($URLAdresi);

echo "<pre>";
print_r($Sonuc);
echo "</pre><br /><br /><br /><br /><br />";



$ozelsonuc  =   $Sonuc["query"];
echo "query cumlesi : " .$ozelsonuc;

echo "<br /><br /><br /><br /><br />";

mb_parse_str($ozelsonuc,$ozeldegisken);

echo "<pre>";
print_r($ozeldegisken);
echo "</pre><br /><br /><br /><br /><br />";


// echo "querynin egitim turu degeri : " . $egitimturu . "<br />";
// echo "querynin ozellikler 0. eleman degeri : " . $ozellikler[0] . "<br />";
// echo "querynin ozellikler 1. eleman degeri : " . $ozellikler[1] . "<br />";
// echo "querynin egitim alani degeri : " . $egitimalani . "<br />";



































?>
</body>
</html>	
	
	