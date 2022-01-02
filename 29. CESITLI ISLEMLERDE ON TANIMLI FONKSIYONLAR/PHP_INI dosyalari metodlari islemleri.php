<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>ataberk erday php calisma gunlugu</title>
</head>
<body>
<?php
/*
php_ini_loaded_file()       :   php yapilandirma yonergelerinin bulundugu php.ini dosyasinin icerisinde bulundugu dizin veya dizinlerin adini veya adlarini bularak buldugu degeri geriye dondurur.
ini_get_all()               :   php yazilimi icerisinde kullanilabilecek ve sisteme tanimli olan tum yapilandirma yonergeleri listesini bulur ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu diziyi geriye dondurur. ayrica belirtilecek olan deger dogrultusunda tum yapilandirma yonergeleri yerine sadece ilgili yaoilandirma yonergesi degerini de dondurebilir.
ini_get()                   :   php yazilimi icerisinde kullanilabilecek ve sisteme tanimli olan bir yapilandirma yonergesini degerini bularak, buldugu degeri geriye dondurur.
ini_set()                   :   php yazilimi icerisinde kullanilabilecek ve sisteme tanimli olan bir yapilandirma yonergesine deger atamak icin kullanilir.
ini_restore()               :   php yazilimi icerisinde kullanilabilecek ve sisteme tanimli olan bir yapilandirma yonergesinin, ini_Set() metodu kullanilarak degistirilmis olan degerini varsayilan haline geri dondurmek icin kullanilir.
parse_ini_file()            :   php yazilimi icerisinde kullanilabilecek ve yazilimci tarafindan olusturulmus olan tum yapilandirma yonergeleri listesini bulur ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu diziyi geriye dondurur
*/
/*
echo "php.ini dosyasinin yeri :".php_ini_loaded_file();
---------------------------------------*/
/*
echo "<pre>";
print_r(ini_get_all());
echo "</pre>";
---------------------------------------*/                           //MERT YARRAMA SELAMLAR!!!!!!! EGER BURAYA KADAR GELDIYSEN ADAMSIN ULAN
/*
echo "<pre>";
print_r(ini_get_all("session")); // buraya yazilan degere sahip php.ini dosyasi icerigini gosterir.!!!!!!!!!!!!     EKLENTILER HARIC!!!! ORNEGIN UPLOAD MAX FILESIZE
echo "</pre>";
---------------------------------------*/
/*
echo "<pre>";
print_r(ini_get_all("session",false)); 
echo "</pre>";
---------------------------------------*/
/*
echo "upload max filesize degeri:"    . ini_get("upload_max_filesize"). "<br />";
echo "max_file_uploads degeri:"       . ini_get("max_file_uploads"). "<br />";
echo "display_errors degeri:"         . ini_get("display_errors"). "<br />";
---------------------------------------*/
/*
echo "display_errors degeri:"         . ini_set("display_errors",0). "<br />"; //display errors degerini kapatir. true false yontemiyle calisir sunucudan sunucuya degisir.
---------------------------------------*/
/*
echo "display_errors degeri:"         . ini_get("display_errors"). "<br />"; 
ini_set("display_errors",0);
echo "display_errors degeri:"         . ini_get("display_errors"). "<br />"; 
ini_restore("display_errors");                      //set le degisen degeri varsayilana dondurur.
---------------------------------------*/

echo "<pre>";
print_r(parse_ini_file("ta.ini"));
echo "</pre>";









?>
</body>
</html>	