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
Decbin()    :   herhangi bir decimal(onluk) sayinin binary(ikilik) sayi sistemi karsiligini bularak buldugu degeri geriye dondurur.
Decoct()    :   herhangi bir decimal(onluk) sayinin octal(sekizlk) sayi sistemi karsiligini bularak buldugu degeri geriye dondurur.
Dechex()    :   herhangi bir decimal(onluk) sayinin hexadecimal(onaltilik) sayi sistemi karsiligini bularak buldugu degeri geriye dondurur.
*/
/*
$sayi = 145;
$donustur = decbin($sayi);

echo $sayi ." decimal(onluk) sayinin binary(ikilik) sayi sistemi karsiligi = " . $donustur . "<br />";
-------------------------
*/
/*
$sayi = 145;
$donustur = decoct($sayi);

echo $sayi ." herhangi bir decimal(onluk) sayinin octal(sekizlk) sayi sistemi karsiligi = " . $donustur . "<br />";
------------------------
*/
/*
$sayi = 145;
$donustur = dechex($sayi);

echo $sayi ." herhangi bir decimal(onluk) sayinin hexadecimal(onaltilik) sayi sistemi karsiligi = " . $donustur . "<br />";
-----------------------------
*/




$sayi = 1453;
$binaryyap = decbin($sayi);
$octalyap = decoct($sayi);
$hexadecimalyap = dechex($sayi);
echo $sayi ." decimal(onluk) sayinin binary(ikilik) sayi sistemi karsiligi = " . $binaryyap . "<br />";
echo $sayi ."  herhangi bir decimal(onluk) sayinin octal(sekizlk) sayi sistemi karsiligi =" . $octalyap . "<br />";
echo $sayi ."  herhangi bir decimal(onluk) sayinin hexadecimal(onaltilik) sayi sistemi  karsiligi = " . $hexadecimalyap . "<br />";




















?>
</body>
</html>	