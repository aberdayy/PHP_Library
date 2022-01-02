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
basename()  :   belirtilecek olan deger dogrultusunda kaynagin sadece dosya adini bularak buldugu degeri geriye dondurur.
dirname()   :  belirtilecek olan deger dogrultusunda kaynagin icerisinde bulundugu dizin veya dizinlerin adini bularak buldugu degeri geriye dondurur.
pathinfo()  :   belirtilecek olan deger dogrultusunda kaynagin icerisinde bulundugu dizin veya dizinlerin adini ve dosya adini bularak buldufug degrlerden yeni bir dizi olustururarak olusturdugu dizi degerini geriye dondurur.
realpath()  :   belirtilecek olan deger dogrultusunda kaynagin mutlak yolunu bularak buldugu degeri geriye dondurur.
*/
/*
$yol = "index.php";
$dosya = basename($yol);
echo "basename degeri : " . $dosya;
--------------------------*/
/*
$yol = "/Applications/MAMP/htdocs/index.php";
$dosya = basename($yol);
echo "absename degeri : " . $dosya;
------------------------------*/
/*
$yol = "/Applications/MAMP/htdocs/index.php";
$dosya = dirname($yol);
echo "dirname degeri : " . $dosya;
------------------------------------*/
/*
$yol = "/Applications/MAMP/htdocs/index.php";
$dosya = pathinfo($yol);
echo "<pre>";
print_r($dosya);
echo "</pre>";
----------------------*/

$yol = "/Applications/MAMP/htdocs/index.php";
$dosya = realpath($yol);
echo "realpath degeri : " . $dosya;















?>
</body>
</html>	