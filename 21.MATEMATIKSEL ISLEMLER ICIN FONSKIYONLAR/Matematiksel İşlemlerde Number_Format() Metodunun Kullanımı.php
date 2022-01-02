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
number_format() :   herhangi bir sayiyi belirtilecek ayraclar dogrultusunda bicimlendirerek bicimlendirdigi degeri geriye dondurur.
*/
/*
$sayi = 865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi);

echo "sayinin formatlanmis hali : " . $formatla ;
------------------------------
*/
/*
$sayi = 865.4635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi);

echo "sayinin formatlanmis hali : " . $formatla ;
-------------------------------
*/
/*
$sayi = 865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi, 1);

echo "sayinin formatlanmis hali : " . $formatla ;
------------------------------
*/
/*
$sayi = 865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi, 2);

echo "sayinin formatlanmis hali : " . $formatla ;
-=----------------------------------
*/
/*
$sayi = 1014865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi, 2); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis hali : " . $formatla . "<br />" ;


$formatla2 = number_format($sayi, 2, ",", "." ); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis ayracli hali : " . $formatla2 ;
----------------------------------------
*/
/*
$sayi = 1014865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi, 2); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis hali : " . $formatla . "<br />" ;


$formatla2 = number_format($sayi, 2, " + * 8 ) $   " , " @ " ); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis ayracli hali : " . $formatla2 ;
---------------------------------
*/
/*
$sayi = 1014865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi, 2); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis hali : " . $formatla . "<br />" ;


$formatla2 = number_format($sayi, 2, " KURUS " , " LIRA "); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis ayracli hali : " . $formatla2 ;
------------------------------------
*/

$sayi = 1014865.7635;

echo "sayinin orjinal hali : " . $sayi  ."<br />";

$formatla = number_format($sayi, 2); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis hali : " . $formatla . "<br />" ;


$formatla2 = number_format($sayi, 0, " KURUS " , " LIRA "); //ilk virgulden sonraki kurus ayraci ikinci virgulden sonraki deger ise binlik deger ayracini beliritr.

echo "sayinin formatlanmis ayracli hali : " . $formatla2 ;











?>
</body>
</html>	