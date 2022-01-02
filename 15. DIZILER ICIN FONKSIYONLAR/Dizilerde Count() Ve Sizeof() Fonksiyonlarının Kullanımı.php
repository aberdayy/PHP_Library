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


count()         :    dizi icerisindeki eleman sayisini bulmak icin kullanilir.
sizeof()        :    dizi icerisindeki eleman sayisini bulmak icin kullanilir.
COUNT_RECURSIVE :   cok boyutlu dizilerde tum boyutlu diziler icersindeki elemanlarda sayma islemine dahil edilir.
*/
/*
$isimler    =   array("ataberk" , "hakan" ,"onur", "levent", "serkan","erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   count($isimler);
echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;
------------------------------------------------------------
*/
/*
$isimler    =   array("ataberk" , "hakan", "levent", "serkan","erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   sizeof($isimler);

echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;
--------------------------------------------------------------
*/

//anahtarlarla ile de kullanilabilir herhangio bir fark olmaz.

/*
$isimler    =   array("ataberk" , "hakan", "levent", "serkan",
array("ela","lacin","esra"),
"erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   count($isimler);
echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;
--------------------------------------------------------------------
*/
/*
$isimler    =   array("ataberk" , "hakan", "levent", "serkan",
array("ela","lacin","esra"),
"erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   sizeof($isimler);
echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;
*/
/*
------------------------------------------------------------------
$isimler    =   array("ataberk" , "hakan", "levent", "serkan",
array("ela","lacin",array("mavi", "kirmizi" ,"siyah"),"esra"),
"erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   count($isimler, COUNT_RECURSIVE);
 
echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;
----------------------------------------------------------------
*/
/*
$isimler    =   array("ataberk" , "hakan", "levent", "serkan",
array("ela","lacin",
array("mavi", "kirmizi" ,"siyah")
,"esra"),
"erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   count($isimler[4]);
 
echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;
-------------------------------------------------------------
*/
$isimler    =   array("ataberk" , "hakan", "levent", "serkan",
array("ela","lacin",
array("mavi", "kirmizi" ,"siyah")
,"esra"),
"erday", "faruk", "cafer");

echo "<pre>";
print_r($isimler);
echo "</pre>";


echo "<br />";
$dizininelemansayisi    =   count($isimler[4], COUNT_RECURSIVE);
 
echo "dizi icersindeki eleman sayisi :" . $dizininelemansayisi;

//ORNEKLERIN HEPSI SIZEOF LA DA GECERLIDIR.



















?>


</body>
</html>	