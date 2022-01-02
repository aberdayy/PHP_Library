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
hypot() :   belirtilecek olan uzunluk degerlerine sahip bir dik ucgenin hupotenusunu hesaplayarak buldugu degeri dondurur.
*/

$xkenaruzunluk = 9;
$ykenaruzunluk = 5;

$hesapla = hypot($xkenaruzunluk,$ykenaruzunluk);
echo " x kenari uzhnllugu : " . $xkenaruzunluk . "ve y kenar uzunlugu : ".  $ykenaruzunluk . " olan uzunluk degrine sahip dik ucgenin hupotenusu : " . $hesapla;








?>
</body>
</html>	