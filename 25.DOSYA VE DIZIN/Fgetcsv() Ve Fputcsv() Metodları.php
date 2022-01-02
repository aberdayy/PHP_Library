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
Fgetcsv()   :   belirtilecek olan csv dosyasi icerigini kontrol ederek ve bilgileri satir satir bularak buldugu degeri geriye dondurur. 
ayrica tum dosya iceriginde bulunan satir verileri herhanghi bir dongu yardimi ile elde edilebilir. 
Fputcsv()   :   belirtilecek olan csv dosyasina, belirtilecek olan verileri yazmak icin kullanilir. ayrica istenirse islem sonucunda yazilan karakter sayisi degerini bularak buldugu degeri geriye dondurur.
*/
/*
$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "r");  

while ($cozumle     = fgetcsv($dosyaac)) {
    $oku = $cozumle[0];
    echo $oku . "<br />";
}
 

fclose($dosyaac);
--------------------------------------*/
/*
$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "r");  
while ($cozumle     = fgetcsv($dosyaac)) {
    $oku    =    $cozumle[0];
    $duzelt =    iconv("iso-8859-9","utf-8", $oku);
    $dizi   =    explode(";",$duzelt);
    echo "<pre>";
    print_r($dizi);
    echo "</pre>";
    }
 

fclose($dosyaac);
------------------------------------------*/

/*
$icerik     = "sadik,erday,sadikeday@gmail.com,05056971551,istanbul,ceo";
$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "w");  
fputcsv($dosyaac, explode(",", $icerik), ";");


fclose($dosyaac);
--------------------------------------*/
/*
$icerik     = "sadik,erday,sadikeday@gmail.com,05056971551,istanbul,ceo";
$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "w");  
fputcsv($dosyaac, explode(",",iconv("utf-8","iso-8859-9",$icerik)), ";");


fclose($dosyaac);
-------------------------------------------*/
/*
$icerik     = "sadik,erday,sadikeday@gmail.com,05056971551,istanbul,ceo";
$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "a");  
fputcsv($dosyaac, explode(",",$icerik), ";");


fclose($dosyaac);
--------------------------------------------*/
/*
$icerik     = array("sadik","erday","sadikeday@gmail.com","05056971551","istanbul","ceo");

$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "a");  

$yeniicerik = "";

foreach ($icerik as $deger) {
    $yeniicerik .= iconv("utf-8", "iso-8859-9", $deger) . ";";
}
fputcsv($dosyaac, explode(";", $yeniicerik), ";");

fclose($dosyaac);
------------------------------------------------*/

$icerikler = array("ataberk,erday,5443869794,ataberkerrrday@gmail.com,istanbul,yazilimci","emil,aharon,yok,emilkara@gmail.com,istanbul,muzisyen","cem,bilen,216444200,cembil@gmail.com,istanbul,issiz","sadik,erday,sadikeday@gmail.com,05056971551,istanbul,ceo");

$dosya      = "ornek.csv";
$dosyaac    = fopen($dosya, "w");  

foreach ($icerikler as $deger ) {
    fputcsv($dosyaac,explode(",", $deger), ";");
}


fclose($dosyaac);





?>
</body>
</html>	