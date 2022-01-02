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
min()   :   degisken iceriklerinin veya dizi elamnlarinin rakamsal degerler icermesi durumunda en kucuk rakamsal degri bularak buldugu degeri geriye dondurur.
max()   :   degisken iceriklerinin veya dizi elamnlarinin rakamsal degerler icermesi durumunda en buyuk rakamsal degri bularak buldugu degeri geriye dondurur.
*/
/*
$rakamlar   =   [87,2,85,74,54,52,56,4157,6,123,412,646,4];

echo "<pre>";
print_r($rakamlar);
echo "</pre>";
$enkucukeleman = min($rakamlar);
echo "dizinin en kucuk elemani : " . $enkucukeleman . "<br />";

$rakamla2 = min(87,85,74,54,52,56,4157,6,123,412,646,4);
echo "degiskenn  en kucuk elemani : " . $rakamla2 . "<br />";
------------------------------------------
*/

//STRING ICEERIK TANIMLANAMAZ 

$rakamlar   =   [87,2,85,74,54,52,56,4157,6,123,412,646,4];

echo "<pre>";
print_r($rakamlar);
echo "</pre>";
$enkucukeleman = max($rakamlar);
echo "dizinin en kucuk elemani : " . $enkucukeleman . "<br />";

$rakamla2 = max(9999999,87,85,74,54,52,56,4157,6,123,412,646,4);
echo "degiskenn  en kucuk elemani : " . $rakamla2 . "<br />";



?>
</body>
</html>	