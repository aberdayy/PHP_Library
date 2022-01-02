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
ceil()  :   herhangi bir ondalikli sayiyi yukariya yuvarlayarak yuvarlama sonucunda olusan yuvarlama sonucunu geriye dondurur.   
floor() :   herhangi bir ondalikli sayiyi asagiya yuvarlayarak yuvarlama sonucunda olusan yuvarlama sonucunu geriye dondurur.   
round() :   herhangi bir ondalikli sayiyi kendisine en yakin tam sayiyi kontrol ederek tukariya veya assagiya yuvarlayarak yuvcarlama sonucunu geriye dondurur.
*/
/*
echo ceil(8.000000000000001);
-------------------
*/
/*
$deger  = ceil(7.000000000000001);  
echo $deger;
-------------------------
*/
/*
$deger  = 9.000000000000001;
$degeryuvarla   =   ceil($deger);

echo $degeryuvarla;
------------------------
*/
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
/*
echo floor(8.99);
-----------------
*/
/*
$deger  = floor(7.000000000000001);  
echo $deger;
---------------------
*/
/*
$deger  = 9.000000000000001;
$degeryuvarla   =   floor($deger);

echo $degeryuvarla;
---------------------------
*/
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
/*
echo round(8.49) . "<br />";
echo round(8.50);
------------------------
*/
/*
$deger  = round(7.58);  
$deger2  = round(7.49);  
echo $deger ." <br />" .$deger2;
---------------------------
*/
/*
$deger  = 9.01;
$deger2  = 9.51;
$degeryuvarla   =   round($deger);
$degeryuvarla2   =   round($deger2);

echo $degeryuvarla . "<br />" . $degeryuvarla2;
-----------------------
*/
 /*
$deger  = 9.4476;

$degeryuvarla   =   round($deger,2 ); //virgulden sonraki alan kactane ondalik alan kalamsini istedigimizi beliritr.

echo "orjinal deger :" . $deger . "<br />";
echo " round() metodu ile yuvarlanmis deger : " . $degeryuvarla;
------------------------------
*/
/*
$deger  = 9.4446;

$degeryuvarla   =   round($deger,2 ); //virgulden sonraki alan kactane ondalik alan kalamsini istedigimizi beliritr.

echo "orjinal deger :" . $deger . "<br />";
echo " round() metodu ile yuvarlanmis deger : " . $degeryuvarla;
----------------------------------
*/
/*
$deger  = 94446;

$degeryuvarla   =   round($deger, -2 ); // 

echo "orjinal deger :" . $deger . "<br />";
echo " round() metodu ile yuvarlanmis deger : " . $degeryuvarla;
------------------------
*/

$deger  = 94476;

$degeryuvarla   =   round($deger, -2 ); // 

echo "orjinal deger :" . $deger . "<br />";
echo " round() metodu ile yuvarlanmis deger : " . $degeryuvarla;










?>
</body>
</html>	