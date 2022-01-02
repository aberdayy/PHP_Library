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
rad2deg() : radyan degeri cinsinden herhangi bir sayinin derece degeri cinsinden karsiligini bularak buldugu degri geriye dondurur. 
deg2rad() : derece degeri cinsinden herhangi bir sayinin radyan degeri cinsinden karsiligini bularak buldugu degri geriye dondurur.
*/
/*
$deger = 1.5;
$sonuc = rad2deg($deger);

echo  $deger . "radyan degerininin derece degeri = ".$sonuc;
---------------------------------
*/
/*
$deger = 180;
$sonuc = deg2rad($deger);

echo  $deger . "derece degerininin radyan degeri = ".$sonuc;
--------------------------------
*/

$deger      = 360;
$radyanyap  = deg2rad($deger);
$gericevir  = rad2deg($radyanyap);


echo "orjinal deger : " . $deger . "<br />";
echo "radyan degeri : " . $radyanyap . "<br />";
echo "derece degeri : " . $gericevir . "<br />";
?>
</body>
</html>	