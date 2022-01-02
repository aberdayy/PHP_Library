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
gettype()   :  herhangi bir degisken iceriginin veri turunu bularak buldugu degeri geriye dondurur.
*/
/*
$deger   =  "ataberk erday";
$sonuc   =  gettype($deger); 

echo $deger . "<br />";
echo "veri turu : " . $sonuc;
------------------------------------
*/
/*
$deger   =  988;
$sonuc   =  gettype($deger); 

echo $deger . "<br />";
echo "veri turu : " . $sonuc;
-----------------------------
*/
/*
$deger   =  9.88;
$sonuc   =  gettype($deger); 

echo $deger . "<br />";
echo "veri turu : " . $sonuc;
-------------------------------------
*/
/*
$deger   =  true;
$sonuc   =  gettype($deger); 

echo $deger . "<br />";
echo "veri turu : " . $sonuc;
----------------------------
*/
/*
$deger   =  ["ataberk erday",8, true];
$sonuc   =  gettype($deger); 
echo "<pre>";
print_r($deger);
echo "</pre>";


echo "veri turu : " . $sonuc;
-----------------------------------
*/
/*
class deger{
public $isim =  "ataberk erday";
}

$islem   =  new deger;
$sonuc   =  gettype($islem); 
echo $islem->isim . "<br />";
echo "veri turu : " . $sonuc;
----------------------------
*/


$deger   =  null;
$sonuc   =  gettype($deger); 

echo $deger . "<br />";
echo "veri turu : " . $sonuc;


?>
</body>
</html>	