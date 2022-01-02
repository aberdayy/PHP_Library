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


key()       :   dizinin gostericisi konumundaki elemanin anahtarini bulmak icin kullanilir.
*/
/*
$isimler       = array("ataberk" ,"hakan" ,"onur");
echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   key($isimler);
echo "dizinin gostericsii konumun daki elemanin anahtar degeri :" . $sonuc;
-----------------------------------------------------------
*/



/*
$isimler       = array("a1"=>"ataberk","a2" =>"hakan" ,"a3"=>"onur");
echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   key($isimler);
echo "dizinin gostericsii konumun daki elemanin anahtar degeri :" . $sonuc;
--------------------------------------------------------
*/


/*
$isimler       = array(array("asli" ,"hale"),"ataberk" ,"hakan" ,"onur");
echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   key($isimler);
echo "dizinin gostericsii konumun daki elemanin anahtar degeri :" . $sonuc;
----------------------------------------------------------
*/
/*
$isimler       = array("a1"=>array("asli" ,"hale"),"a2"=>"ataberk" ,"a3"=>"hakan" ,"a4"=>"onur");
echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   key($isimler);
echo "dizinin gostericsii konumun daki elemanin anahtar degeri :" . $sonuc;
---------------------------------------------------------
*/


/*
$isimler       = array("a1"=>array("b1"=>"asli" ,"b2"=>"hale"),"a2"=>"ataberk" ,"a3"=>"hakan" ,"a4"=>"onur");
echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   key($isimler);
echo "dizinin gostericsii konumun daki elemanin anahtar degeri :" . $sonuc;
-----------------------------------------------------
*/


$isimler       = array("a1"=>array("b1"=>"asli" ,"b2"=>"hale"),"a2"=>"ataberk" ,"a3"=>"hakan" ,"a4"=>"onur");
echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   key($isimler["a1"]);
echo "dizinin gostericsii konumun daki elemanin anahtar degeri :" . $sonuc;








?>


</body>
</html>	