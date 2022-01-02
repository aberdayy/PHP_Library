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
Bindec()    :   herhangi bir binary(ikilik) sayinin, decimal(onluk) sayi sistemi karsiligini bularak buldugu degeri dondurur.
Octdec()    :   herhangi bir octal(sekizlik) sayinin, decimal(onluk) sayi sistemi karsiligini bularak buldugu degeri dondurur.
Hexdec()    :   herhangi bir hexdecimal(onaltilik) sayinin, decimal(onluk) sayi sistemi karsiligini bularak buldugu degeri dondurur.
*/
/*
$sayi = 10010001;
$sonuc = bindec($sayi);
echo $sayi ."binary(ikilik) sayinin, decimal(onluk) sayi sistemi karsiligi" .$sonuc;
-------------------------------
*/

/*
$sayi = 221;
$sonuc = octdec($sayi);
echo $sayi ."octal(sekizlik) sayinin, decimal(onluk) sayi sistemi karsiligi" .$sonuc;
-------------------------------
*/
/*
$sayi = 91;
$sonuc = octdec($sayi);
echo $sayi ."hexdecimal(onaltilik sayinin, decimal(onluk) sayi sistemi karsiligi" .$sonuc;
-------------------------------------
*/



$ikiliksayi = 10110101101; //0 ila baslatilamaz veya " kullanilmak zorunda
$sekizliksayi = 2655;
$onaltiliksayi = "5AD";

$sonuc1 = bindec($ikiliksayi);
$sonuc2 = octdec($sekizliksayi);
$sonuc3 = hexdec($onaltiliksayi);





echo $ikiliksayi ." binary(ikilik) sayinin, decimal(onluk) sayi sistemi karsiligi " .$sonuc1. "<br />";
echo $sekizliksayi ." octal(sekizlik) sayinin, decimal(onluk) sayi sistemi karsiligi " .$sonuc2. "<br />";
echo $onaltiliksayi ." hexdecimal(onaltilik sayinin, decimal(onluk) sayi sistemi karsiligi " .$sonuc3. "<br />";














?>
</body>
</html>	