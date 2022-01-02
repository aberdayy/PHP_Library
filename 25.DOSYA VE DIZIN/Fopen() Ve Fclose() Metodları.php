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
fopen()    :   belirtilecek olan dosyayi veya URL i belirtilecek olan modda acamk icin kullanilir.
        r   :   okuma amacli acaar.
        r+  :   hem okuma hemde yazma amacli acar.
        w   :   yazma amacli acar. dosya verisini bosaltarak yeniden yazar dosya mevcut degilse olusturulur.
        w+  :   hem okuma hem yazma amacli acar dosya verisinin bosaltarak yeniden yazar dosya vecut degilse yeniden olsuturur.
        a   :   yazma amacli acar. dosya verisini dokunmadan sonuna ek yaparak yazar dosya mevcut degilse yeniden yazar.
        a+  :   hem okuma hemde yazma amacli acar. dosya verisine dokunmadan sonuna ek yaparak yazar dosya mevcut degilse yeniden yazar.
        x   :   yazma amacli acar. dosya mevcut degilse fopen metodu false degeri dondurerek hata uretir.
        x+  :   hem okuma hem yazma amacli acar.  dosya mevcut degilse fopen metodu false degeri dondurerek hata uretir.
fclose()    :   fopen metodu ile acilmis olan dosyayi veya URL i kapatmak icn kullanilir. ayrica boolean veri turunde de deger dondurebilir. 
*/
/*
$dosya = "extra.php";
$dosyaac = fopen($dosya,"r");

if ($dosyaac) {
        echo $dosya . "isimli dosya acildi.";
}else {
        echo $dosya . "isimli dosya acilamadi.";
}
fclose($dosyaac);
----------------------------------------*/
/*
$dosya = "extra.php";
$dosyaac = fopen($dosya,"r");

if ($dosyaac) {
        echo $dosya . " isimli dosya acildi.<br />";
}else {
        echo $dosya . " isimli dosya acilamadi.<br />";
}
$dosyakapat = fclose($dosyaac);
         
if ($dosyakapat==1) {
        echo $dosya . " isimli dosya basariyla kapatildi.";
}else {
        echo $dosya . " isimli dosya kapatilamadi.";
}
------------------------------------------*/
/*
$urladresi = "https://extraakademi.com/index.php";
$urlac = fopen($urladresi,"r");

if ($urlac) {
        echo $urladresi . " isimli URL acildi.<br />";
}else {
        echo $urladresi . " isimli URL acilamadi.<br />";
}
fclose($urlac);
---------------------------------------*/

$dosya = "extra.php";
$dosyaac = fopen($dosya,"x");

if ($dosyaac) {
        echo $dosya . "isimli dosya acildi.";
}else {
        echo $dosya . "isimli dosya acilamadi.";
}
fclose($dosyaac);
















?>
</body>
</html>	