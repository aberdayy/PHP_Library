<?php 
header("Refresh:5")
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
ucwords()   :   belirtilecek icerikte bulunan tum kelimelerin ilk harflerini buyuk harf olacak sekilde degistirerek degistirilmis olan degeri geriye dondurur.
ucfirst()   :   belirtilecek icerigin ilk harfini buyuk harf olacak sekilde degistirerek degistirilmis olan degeri geriye dondurur.
lcfirst()   :   belirtilecek icerigin ilk harfini kucuk harf olacak sekilde degistirerek degistirilmis olan degeri geriye dondurur.
*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti - istanbul";
echo $icerik . "<br />";
$metin      =   ucwords($icerik); 
echo $metin;
-------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti - istanbul";            //BIR ONCEKI DERSTE YAZILMIS OLAN FONKSIYON BURADA DA KULLANILIR.
echo $icerik . "<br />";
$metin      =   ucfirst($icerik); 
echo $metin;
-------------------------------------------------------------------------*/
$icerik = "EXTRA EGITIM - ATABERK ERDAY - A'DAN Z'YE PHP GORSEL EGITIM SETI - ISTANBUL";
echo $icerik . "<br />";
$metin      =   lcfirst($icerik); 
echo $metin;




 ?>
</body>
</html>	