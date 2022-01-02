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

include("dosya1.php");

echo "son satir.";
----------------------------*/
/*
echo "ilk satir.". "<br />";

include"dosya1.php";

echo "son satir.";
---------------------------*/

/*
echo "ilk satir.". "<br />";

include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");

echo "son satir.";
//include metodu en altta en ustte vs. heryerde kullanilabilir.
----------------------------------*/
/*
echo "ilk satir.". "<br />";

include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");

echo "son satir.";

include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
include("dosya1.php");
----------------------------------------*/

echo "ilk satir.". "<br />";


include("dosya1.php");

echo "son satir.". "<br />";

include("dosya2.php");

echo "son satir.". "<br />";

include("dosya3.php");












?>
</body>
</html>	