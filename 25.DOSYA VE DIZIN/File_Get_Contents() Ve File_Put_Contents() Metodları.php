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
File_Get_Contents()     :   belirtilecek dosya veya url icerigini kontrol ederek ve bilgileri tek bir defada bularak buldugu degeri geriye dondurur.
File_Put_Contents()     :   belirtilecek dosyaya belirtilecek olan verileri yazmak icin kullanilir. ayrica istenirse  islem sonucunda yazilian karakter sayisi degerini bularak buldugu degeri geriye dondurur.
    FILE_APPEND         :   eski icerikler silinmeden yeni icerikler sona eklenir.
*/
/*
$dosya  = "belge.txt";
$oku    = file_get_contents($dosya);
echo $oku;
---------------------------------*/
/*
$dosya  = "https://www.sahibinden.com";
$oku    = file_get_contents($dosya);
echo $oku;
------------------------------*/
/*
$icerik = "file put contents egitim videosu";
$dosya  = "belge.txt";
file_put_contents($dosya,$icerik);
---------------------------------------*/
 /*
$icerik =   "file put contents egitim videosu";
$dosya  =   "belge.txt";
file_put_contents($dosya,$icerik, FILE_APPEND);
----------------------------------------*/
/*
$icerik =   "file put contents egitim videosu";
$dosya  =   "belge.txt";
$yaz    =   file_put_contents($dosya,$icerik, FILE_APPEND);

echo $yaz;
----------------------------------------*/

$URL    = "https://www.hepsiburada.com";
$oku    = file_get_contents($URL);

$dosya  =   "belge.txt";
$yaz    =   file_put_contents($dosya, $oku); 

if ($yaz>0) {
    echo "icerik  basariyla dosyaya yazildi.";
}else{
    echo "icerik yazilirken bir hata oldu!";
}














?>
</body>
</html>	