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
cos()   : herhangi bir sayinin kosinusunu bularak buldugu degri geriye dondurur.
cosh()  : herhangi bir sayinin hiperbolik kosinusunu bularak buldugu degri geriye dondurur.
acos()  : -1 ila 1 arasindaki herhangi bir sayinin ark kosinusunu bularak radyan degri geriye dondurur.
acosh() : herhangi bir sayinin hiperbolik  ark kosinusunu bularak buldugu degri geriye dondurur.
*/

/*
$deger1 = 5;
$deger2 = -5;
$deger3 = 5.5;

$sonuc1 = cos($deger1);
$sonuc2 = cos($deger2);
$sonuc3 = cos($deger3);

echo $deger1 . "sayisinin kosinusu : " .$sonuc1 . "<br />";
echo $deger2 . "sayisinin kosinusu : " .$sonuc2 . "<br />";
echo $deger3 . "sayisinin kosinusu : " .$sonuc3 . "<br />";
---------------------------------------
*/
/*
$deger1 = 5;
$deger2 = -5;
$deger3 = 5.5;

$sonuc1 = cosh($deger1);
$sonuc2 = cosh($deger2);
$sonuc3 = cosh($deger3);

echo $deger1 . "sayisinin hiperbolik kosinusunu : " .$sonuc1 . "<br />";
echo $deger2 . "sayisinin hiperbolik kosinusunu : " .$sonuc2 . "<br />";
echo $deger3 . "sayisinin hiperbolik kosinusunu : " .$sonuc3 . "<br />";
---------------------------------
*/
/*
$deger1 = 1;
$deger2 = -1;
$deger3 = 0.41543515;

$sonuc1 = acos($deger1);
$sonuc2 = acos($deger2);
$sonuc3 = acos($deger3);

echo $deger1 . "sayisinin ark kosinusunu : " .$sonuc1 . "<br />";
echo $deger2 . "sayisinin ark kosinusunu : " .$sonuc2 . "<br />";
echo $deger3 . "sayisinin ark kosinusunu : " .$sonuc3 . "<br />";
----------------------------------
*/


$deger1 = 5;
//negatif sayilarda hoperbolik ark kosinus hesaplanmaz
$deger3 = 5.5;

$sonuc1 = acosh($deger1);
$sonuc2 = acosh($deger2);
$sonuc3 = acosh($deger3);

echo $deger1 . "sayisinin hoperbolik ark kosinus : " .$sonuc1 . "<br />";
echo $deger2 . "sayisinin hoperbolik ark kosinus : " .$sonuc2 . "<br />";
echo $deger3 . "sayisinin hoperbolik ark kosinus : " .$sonuc3 . "<br />";



?>
</body>
</html>	