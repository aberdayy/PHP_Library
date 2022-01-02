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
tan()   :   herhangi bir sayinin tanjantini bularak buldugu degeri geriye dondurur
tanh()  :   herhangi bir sayinin hiperbolik tanjantini bularak buldugu degeri geriye dondurur
atan()  :   herhangi bir sayinin ark tanjantini radyan degeri cinsinden buldugu degeri geriye dondurur
atanh() :   -1 ila 1 arasindako herhangi bir sayinin hiperbolik ark tanjantini bularak buldugu degeri geriye dondurur
atan2() :   herhangi iki sayinin ark tanjantini radyan degeri cinsinden buldugu degeri geriye dondurur
*/
/*
$sayi1 = 3;
$sayi2 = -2;
$sayi3 = 1.5;

$hesapla1 = tan($sayi1);
$hesapla2 = tan($sayi2);
$hesapla3 = tan($sayi3);

echo $sayi1 . "sayisinin tanjanti : " .$hesapla1 . " <br />";
echo $sayi2 . "sayisinin tanjanti : " .$hesapla2 . " <br />";
echo $sayi3 . "sayisinin tanjanti : " .$hesapla3 . " <br />";
------------------------------------
*/
/*
$sayi1 = 3;
$sayi2 = -2;
$sayi3 = 1.5;

$hesapla1 = tanh($sayi1);
$hesapla2 = tanh($sayi2);
$hesapla3 = tanh($sayi3);

echo $sayi1 . "sayisinin hiperbolik tanjanti : " .$hesapla1 . " <br />";
echo $sayi2 . "sayisinin hiperbolik tanjanti : " .$hesapla2 . " <br />";
echo $sayi3 . "sayisinin hiperbolik tanjanti : " .$hesapla3 . " <br />";

--------------------------------------------
*/
/*
$sayi1 = 3;
$sayi2 = -2;
$sayi3 = 1.5;

$hesapla1 = atan($sayi1);
$hesapla2 = atan($sayi2);
$hesapla3 = atan($sayi3);

echo $sayi1 . "sayisinin ark tanjantinin radyan degeri  : " .$hesapla1 . " <br />";
echo $sayi2 . "sayisinin ark tanjantinin radyan degeri  : " .$hesapla2 . " <br />";
echo $sayi3 . "sayisinin ark tanjantinin radyan degeri  : " .$hesapla3 . " <br />";
---------------------------------
*/
/*
$sayi1 = 1;
$sayi2 = -1;
$sayi3 = 0.5;

$hesapla1 = atanh($sayi1);
$hesapla2 = atanh($sayi2);
$hesapla3 = atanh($sayi3);

echo $sayi1 . "sayisinin hiperbolik ark tanjantinin : " .$hesapla1 . " <br />";
echo $sayi2 . "sayisinin hiperbolik ark tanjantinin  : " .$hesapla2 . " <br />";
echo $sayi3 . "sayisinin hiperbolik ark tanjantinin : " .$hesapla3 . " <br />";
-------------------------------------
*/

$sayi1A = 10;
$sayi1B = 20;

$sayi2A = -0.5;
$sayi2B = -0.5;

$sayi3A = 12.5;
$sayi3B = 4.5;

$hesapla1 = atan2($sayi1A,$sayi1B);
$hesapla2 = atan2($sayi2A,$sayi2B);
$hesapla3 = atan2($sayi3A,$sayi3B);

echo "x ="  .$sayi1A . " y =" .$sayi1B . " sayisinin ark tanjantinin radyan degeri : " .$hesapla1 . " <br />";
echo "x ="  .$sayi2A . " y =" .$sayi2B . " sayisinin ark tanjantinin radyan degeri : " .$hesapla1 . " <br />";
echo "x ="  .$sayi3A . " y =" .$sayi3B . " sayisinin ark tanjantinin radyan degeri : " .$hesapla1 . " <br />";




?>
</body>
</html>	