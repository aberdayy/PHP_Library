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
base_convert()  :   herhangi bir sayinin binary(kkilik), octal(sekizlik), decimal(onluk), hexadecimal(onaltili) sayi sistemleri karsiligini bularak buldugu degeri geriye dondurur.
*/
/*
$deger = 145;

$binarydonustur      = base_convert($deger, 10,2);
$octaldonustur       = base_convert($deger, 10,8);
$hexadecimaldonustur = base_convert($deger, 10,16);


echo $deger . "decimal (onluk) sayinin binnary (ikilik) sayi sistemi karsiligi : " . $binarydonustur ."<br />";
echo $deger . "decimal (onluk) sayinin octal (sekizlik) sayi sistemi karsiligi : " . $octaldonustur ."<br />";
echo $deger . "decimal (onluk) sayinin hexadecimal (onaltilik) sayi sistemi karsiligi : " . $hexadecimaldonustur ."<br />";
-----------------------------------------------
*/
/*
$deger = "8AC";

$binarydonustur      = base_convert($deger, 16,2);
$octaldonustur       = base_convert($deger, 16,8);
$hexadecimaldonustur = base_convert($deger, 16,16);


echo $deger . " hexadecimal (onaltilik) sayinin binnary (ikilik) sayi sistemi karsiligi : " . $binarydonustur ."<br />";
echo $deger . " hexadecimal (onaltiliksayinin octal (sekizlik) sayi sistemi karsiligi : " . $octaldonustur ."<br />";
echo $deger . " hexadecimal (onaltiliksayinin decimal (onluk)sayi sistemi karsiligi : " . $hexadecimaldonustur ."<br />";
-------------------------------------------
*/

$deger = 706;

$binarydonustur      = base_convert($deger, 8,2);//once hangi sayi sisteminde oldugu ondan sorna donusturulecek olan degr yapilir. 
$octaldonustur       = base_convert($deger, 8,10);
$hexadecimaldonustur = base_convert($deger, 8,16);


echo $deger . " octal (sekizlik) sayinin binnary (ikilik) sayi sistemi karsiligi : " . $binarydonustur ."<br />";
echo $deger . "octal (sekizlik) sayinin  decimal (onluk)sayi sistemi karsiligi : " . $octaldonustur ."<br />";
echo $deger . "octal (sekizlik) sayinin hexadecimal (onaltilik) sayi sistemi karsiligi : " . $hexadecimaldonustur ."<br />";







?>
</body>
</html>	