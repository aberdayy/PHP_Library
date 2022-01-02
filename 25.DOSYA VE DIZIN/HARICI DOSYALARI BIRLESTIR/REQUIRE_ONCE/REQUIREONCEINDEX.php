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
include()       :   php dosyasina belirtilecek olan yeni bir php dosyasini dahil etmek /eklemek icin kullaulir
yeni dosyanin daha onceden eklenip eklenmedigi kontrol edilmez. herhangi bbir hata kodu donecek olursa kodlama okunmaya devam eder.
bu metod kullanilirken ayni dosya birden fazla defa kullanilabilir ancak eger kullanilmamsi gerekiyorsa buna dikkat edilmelidir. cunku metod yazmaya devam eder.


include_once()  :   php dosyasina belirtilecek olan yeni bir php dosyasini dahil etmek /eklemek icin kullaulir
yeni dosyanin daha onceden eklenip eklenmedigi kontrol edilir. herhangi bbir hata kodu donecek olursa kodlama okunmaya devam eder.

require()       :   php dosyasina belirtilecek olan yeni bir php dosyasini dahil etmek /eklemek icin kullaulir
yeni dosyanin daha onceden eklenip eklenmedigi kontrol edilmez. herhangi bbir hata kodu donecek olursa kodlama okunmaya devam etmez.


require_once()  :   php dosyasina belirtilecek olan yeni bir php dosyasini dahil etmek /eklemek icin kullaulir
yeni dosyanin daha onceden eklenip eklenmedigi kontrol edilir. herhangi bbir hata kodu donecek olursa kodlama okunmaya devam etmez.

*/
/*
echo "ilk satir.". "<br />";

require_once("dosya1.php");

echo "ARA satir. <br />";

require_once("dosya1.php");


echo "son satir.";
------------------------------------*/
/*
echo "Ana dosya 1. icerik <br />";


require_once("dosya1.php");

echo "ana dosya 2. icerik <br />";

require_once("dosya2.php");
------------------------*/
 

echo "Ana dosya 1. icerik <br />";

require_once("dosya1.php");

echo "ana dosya 2. icerik <br />";

require_once("deneme.php");  

echo "ana dosya son icerik <br />";
echo "ana dosya son icerik <br />";
echo "ana dosya son icerik <br />";
echo "ana dosya son icerik <br />";
echo "ana dosya son icerik <br />";





?>
</body>
</html>	