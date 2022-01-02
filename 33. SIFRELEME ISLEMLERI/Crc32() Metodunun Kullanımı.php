<?php
// header("Refresh:5")
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
crc32()     :   Belirtilecek olan icerigin crc32 temsilini hesaplayip bularak buldugu degeri geriye dondurur.   HER ZAMAN NUMERIC DEGER DONDURUR.
*/
/*
$sifre = "123456789";
$olustur = crc32($sifre);
echo $olustur;
--------------------------------------------*/

$sifre = "Ataberk ErDay";
$olustur = crc32($sifre);
echo $olustur;








?>
</body>
</html>	