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
abs()   :   herhangi bir sayinin mutlak degerini bularak buldugu degri geriye dondurur.
*/

$sayi1   =  5;
$sayi1mutlak    =   abs($sayi1);

echo "5 sayiisnin ilk hali : " . $sayi1 . "<br />";

echo "5 sayiisnin mutlak hali : " . $sayi1mutlak . "<br />";

$sayi2   =  1024.54;
$sayi2mutlak    =   abs($sayi2);

echo "1024.54 sayiisnin ilk hali : " . $sayi2 . "<br />";

echo "1024.54 sayiisnin mutlak hali : " . $sayi2mutlak . "<br /><br />";

$sayi3   =  -5;
$sayi3mutlak    =   abs($sayi3);

echo "-5 sayiisnin ilk hali : " . $sayi3 . "<br />";

echo "-5 sayiisnin mutlak hali : " . $sayi3mutlak . "<br />";

$sayi4   =  -1024.54;
$sayi4mutlak    =   abs($sayi4);

echo "-1024.54 sayiisnin ilk hali : " . $sayi4 . "<br />";

echo "-1024.54 sayiisnin mutlak hali : " . $sayi4mutlak . "<br />";

?>
</body>
</html>	