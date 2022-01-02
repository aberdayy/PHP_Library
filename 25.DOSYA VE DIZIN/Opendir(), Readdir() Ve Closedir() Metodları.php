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
opendir()   :    belirtilecek olan dizini acarak, actigi dizini bellege almak icin kullanilir.   
readdir()   :   opendir() metodu ile acilmis ve bellege alinmis olan dizini kontrol ederek, ilgili dizin icerisinde bulunan tum alt dizin ve dosya bilgilerini (isimler ve varsa uzantilar) okuyarak okudugu tum bilgileri depolar
ayrica depoladigi tum bilgiler dongu yardimi ile elde edilebilir. 
closedir()  :   opendir() metodu ile acilmis ve bellege alinmis dizini  kapatarak, bellegi bosaltir.

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-GLOB VE SCANDIR METODLARINDAN FARKI VERIYI DEGISKEN ICERISINE DEGIL BELLEGE DEPOLAR-!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

*/
/*
$dizin = "./"; 
$dizinac = opendir($dizin);
while (($oku = readdir($dizinac)) != false ){
    echo "dosya adi :" . $oku . "<br /> turu : " . filetype($dizin.$oku). "<br /><br />";
}
closedir($dizinac);
--------------------------------*/
/*
$dizin = "./"; 
$dizinac = opendir($dizin);
while (($oku = readdir($dizinac)) != false ){
    $dosyamidizinmi =  filetype($dizin.$oku);
    if ($dosyamidizinmi=="dir") {
        echo "dizin adi :" . $oku . "<br />";
    }
}
closedir($dizinac);
------------------------------*/

$dizin = "./"; 
$dizinac = opendir($dizin);
while (($oku = readdir($dizinac)) != false ){
    $dosyamidizinmi =  filetype($dizin.$oku);
    if ($dosyamidizinmi=="file") {
        echo "dosya adi :" . $oku . "<br />";
    }
}
closedir($dizinac);








?>
</body>
</html>	