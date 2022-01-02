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
array_replace()             :   birden fazla dizi icderisinde bulunan eleman veya elemanlarin, ilk dizi icerisine olanlari baz alinarak kendisinden sonra gelecek olan dizi veya diziler icerisinde bulunan eleman / elemanarla guncelleyrek yeni bir dizi olusutrmak icin kullanir.
array_replace_recursive     :   birden fazla dizi icderisinde bulunan eleman veya elemanlarin, ilk dizi icerisine olanlari baz alinarak kendisinden sonra gelecek olan dizi veya diziler icerisinde bulunan eleman / elemanarla guncelleyrek yeni bir dizi olusutrmak icin kullanir.(GELISMIS.)

*/

/*
$isimler1        =     array("ataberk","hakan","volkan","cafer","levent");
$isimler2        =     array("asli","banu","sila","cansu","emine");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
--------------------------------------------------------
*/

/*
$isimler1        =     array("ataberk","hakan","volkan","cafer","levent");
$isimler2        =     array("asli","banu","sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------------
*/


/*
$isimler1        =     array("a1"=>"ataberk","a2"=>"hakan","a3"=>"volkan","a4"=>"cafer","a5"=>"levent");
$isimler2        =     array("b1"=>"asli","b2"=>"banu","b3"=>"sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
---------------------------------------------------------------
*/
/*
$isimler1        =     array("a1"=>"ataberk","b2"=>"hakan","a3"=>"volkan","a4"=>"cafer","a5"=>"levent");
$isimler2        =     array("b1"=>"asli","b2"=>"banu","b3"=>"sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
------------------------------------------------------------------
*/


/*
$isimler1        =     array("ataberk","hakan","volkan","cafer","levent");
$isimler2        =     array("asli","banu");
$isimler3        =     array("derya","cansu","emine");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";


echo "<pre>";
print_r($isimler3);
echo "</pre><br />";



$sonuc      =       array_replace($isimler1,$isimler2,$isimler3);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
--------------------------------------------------------------
*/
/*
$isimler1        =     array(array("ataberk","hakan"),"volkan",array("cafer","levent"));
$isimler2        =     array("asli","banu","sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
----------------------------------------------------------------
*/

/*
$isimler1        =     array("ataberk","hakan","volkan","cafer","levent");
$isimler2        =     array("asli","banu","sila","cansu","emine");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace_recursive($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------------
*/

/*
$isimler1        =     array("ataberk","hakan","volkan","cafer","levent");
$isimler2        =     array("asli","banu","sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace_recursive($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";

-----------------------------------------------------------------
*/
/*
$isimler1        =     array("a1"=>"ataberk","a2"=>"hakan","a3"=>"volkan","a4"=>"cafer","a5"=>"levent");
$isimler2        =     array("b1"=>"asli","b2"=>"banu","b3"=>"sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace_recursive($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
----------------------------------------------------------------------
*/

/*
$isimler1        =     array("a1"=>"ataberk","b2"=>"hakan","a3"=>"volkan","a4"=>"cafer","a5"=>"levent");
$isimler2        =     array("b1"=>"asli","b2"=>"banu","b3"=>"sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace_recursive($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------------
*/

/*
$isimler1        =     array("ataberk","hakan","volkan","cafer","levent");
$isimler2        =     array("asli","banu");
$isimler3        =     array("derya","cansu","emine");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";


echo "<pre>";
print_r($isimler3);
echo "</pre><br />";



$sonuc      =       array_replace_recursive($isimler1,$isimler2,$isimler3);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
----------------------------------------------------------------
*/
/*
$isimler1        =     array(array("ataberk","hakan"),"volkan",array("cafer","levent"));
$isimler2        =     array("asli","banu","sila");


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace_recursive($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------------------
*/

$isimler1    =     array(array("ataberk","hakan"),"volkan",array("cafer","levent"));
$isimler2    =     array(array("asli","banu"),"sila",array("damla"));


echo "<pre>";
print_r($isimler1);
echo "</pre><br />";

echo "<pre>";
print_r($isimler2);
echo "</pre><br />";

$sonuc      =       array_replace_recursive($isimler1,$isimler2);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";




?>


</body>
</html>	