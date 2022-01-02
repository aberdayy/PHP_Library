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
array_shift()   :   dizi icerisinde bulunan ilk elemani silmek icin kullanilir. ayni zxsmsnda dizi iceriginden sildigi elemanin degrinin geriye dondurur.   
array_pop()     :   dizi icerisinde bulunan son elemani silmek icin kullanilir. ayni zxsmsnda dizi iceriginden sildigi elemanin degrinin geriye dondurur.
*/
/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_shift($isimler);


echo "<pre>";
print_r($isimler);
echo "</pre>";
------------------------------------------------------------------
*/
/*
$isimler    =   array( 2=> "volkan", 0=> "ataberk", 1=> "salih", 7=>"onur", 6=>"tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_shift($isimler);


echo "<pre>";
print_r($isimler);
echo "</pre>";
---------------------------------------------------
*/
/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_shift($isimler);
array_shift($isimler);


echo "<pre>";
print_r($isimler);
echo "</pre>";
--------------------------------------------------------
*/
/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


$silbir =   array_shift($isimler);

echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $silbir ."<br />";
echo "</pre>";

$siliki =   array_shift($isimler);

echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $siliki ."<br />";
echo "</pre>";

$siluc =   array_shift($isimler);

echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $siluc ."<br />";
echo "</pre>";
------------------------------------------------------------
*/
/*

$isimler    =   array("volkan", "ataberk",
array("hale", "asli", "banu", "derya"), "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_shift($isimler[2]);


echo "<pre>";
print_r($isimler);
echo "</pre>";
----------------------------------------------------
*/
/*
$isimler    =   array("volkan", "ataberk",
array("hale", "asli", "banu", "derya"), "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


$silbir  =   array_shift($isimler[2]);


echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $silbir ."<br />";
echo "</pre>";
----------------------------------------------------
*/
//-------------------ARRAY_POP----------------------

/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_pop($isimler);


echo "<pre>";
print_r($isimler);
echo "</pre>";
-----------------------------------------------------------
*/
/*
$isimler    =   array( 2=> "volkan", 0=> "ataberk", 1=> "salih", 7=>"onur", 6=>"tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_pop ($isimler);


echo "<pre>";
print_r($isimler);
echo "</pre>";
--------------------------------------------------
*/
/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_pop($isimler);
array_pop($isimler);
array_pop($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";
--------------------------------------------
*/

/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


$silbir =   array_pop($isimler);

echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $silbir ."<br />";
echo "</pre>";

$siliki =   array_pop($isimler);

echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $siliki ."<br />";
echo "</pre>";

$siluc =   array_pop($isimler);

echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $siluc ."<br />";
echo "</pre>";
-----------------------------------------------------------
*/

/*
$isimler    =   array("volkan", "ataberk",
array("hale", "asli", "banu", "derya"), "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_pop($isimler[2]);


echo "<pre>";
print_r($isimler);
echo "</pre>";
-----------------------------------------------------
*/
/*
$isimler    =   array("volkan", "ataberk",
array("hale", "asli", "banu", "derya"), "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


$silbir  =   array_pop($isimler[2]);


echo "<pre>";
print_r($isimler);
echo "silinen elemanin degeri :" . $silbir ."<br />";
echo "</pre>";
------------------------------------------------
*/
/*
$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";


array_shift($isimler);
array_pop($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre>";
------------------------------------------------------------------
*/

$isimler    =   array("volkan", "ataberk", "salih", "onur", "tugkan");

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$ilkelemanisil  =   array_shift($isimler);
$sonelemanisil  =   array_pop($isimler);

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

echo "silinen ilk elemanin degeri :" . $ilkelemanisil ."<br />"; 
echo "silinen son elemanin degeri :" . $sonelemanisil ."<br />";
























?>


</body>
</html>	