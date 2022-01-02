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
preg_filter()   : kendisine parametre olarak verilen duzenli ifadeli deger veya degerler dogrultusunda
 icerigi kontrol eder ve aranan deger veya degerlerin eslesmesi durumunda
  eslesen degeri veya degerleri degisimini saglayarak yeni bir icerik veya dizi olusturarak
   olusturdugu icerigi veya diziyi geriye dondurur.

preg_replace()  : kendisine parametre olarak verilen duzenli ifadeli deger veya degerler dogrultusunda
 icerigi kontrol eder ve aranan deger veya degerlerin eslesmesi durumunda
  eslesen degeri veya degerleri degisimini saglayarak yeni bir icerik veya dizi olusturarak
   olusturdugu icerigi veya diziyi geriye dondurur.
*/

//IKISIDE AYNI ISLEMI YAPAR ANCAK REPLACE ONERILIR.

/*
$icerik = "merhaba benim adim ataberk erday ben bir front end developerim beni facebook uzerinden ataberk erday olarak bulabilirsiniz. ";

$ara         = "/ataberk/";
$degistir    = "sadik";
$sonuc       = preg_filter($ara, $degistir, $icerik);

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";

echo "degisen icerik : <br />" . $sonuc ;
-----------------------------------------------
*/
/*
$icerik = "merhaba benim adim ataberk erday ben bir front end developerim beni facebook uzerinden ataberk erday olarak bulabilirsiniz. ";

$ara         = "/ataberk/";
$degistir    = "sadik";
$sonuc       = preg_replace($ara, $degistir, $icerik);

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";

echo "degisen icerik : <br />" . $sonuc ;
------------------------------------
*/
/*
$icerik = "merhaba benim adim ataberk erday ben bir front end developerim beni facebook uzerinden ataberk erday olarak bulabilirsiniz. ";
 
$ara         = array("/ataberk/");
$degistir    = array("sadik");
$sonuc       = preg_filter($ara, $degistir, $icerik);

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";

echo "degisen icerik : <br />" . $sonuc ;
----------------------------------------------
*/
/*
$icerik = "merhaba benim adim ataberk erday ben bir front end developerim beni facebook uzerinden ataberk erday olarak bulabilirsiniz. ";

$ara         = array("/ataberk/");
$degistir    = array("sadik");
$sonuc       = preg_replace($ara, $degistir, $icerik);

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";

echo "degisen icerik : <br />" . $sonuc ;
----------------------------------------
*/
/*
$icerik = "merhaba benim adim ataberk erday, ben bir front end developerim beni facebook uzerinden ataberk erday olarak bulabilirsiniz. ";
 
$ara         = array("/ataberk/", "/front/", "/,/");
$degistir    = array("sadik", "ANANI", ":");
$sonuc       = preg_filter($ara, $degistir, $icerik);

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";

echo "degisen icerik : <br />" . $sonuc ;
---------------------------------------
*/
/*
$icerik = "merhaba benim adim ataberk erday, ben bir front end developerim beni facebook uzerinden ataberk erday olarak bulabilirsiniz. ";
 
$ara         = array("/ataberk/", "/front/", "/,/");
$degistir    = array("sadik", "ANANI", ":");
$sonuc       = preg_replace($ara, $degistir, $icerik);

echo "orjinal icerik : <br />" . $icerik . "<br /><br />";

echo "degisen icerik : <br />" . $sonuc ;
--------------------------------------
*/

/*
$icerik = array(20,2151,45,427,"29:43:14");
$ara         = array("/2/");
$degistir    = array("1");
$sonuc       = preg_filter($ara, $degistir, $icerik);

echo "orjinal icerik : <br />";
echo "<pre>";
print_r($icerik);
echo "</pre>";

echo "degisen icerik : <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------------------
*/
/*
$icerik = array(20,2151,45,427,"29:43:14");
$ara         = array("/2/");
$degistir    = array("1");
$sonuc       = preg_replace($ara, $degistir, $icerik);

echo "orjinal icerik : <br />";
echo "<pre>";
print_r($icerik);
echo "</pre>";

echo "degisen icerik : <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------------------
*/
/*
$icerik = array(20,21.51,45,4.27,"29:43:14");
$ara         = array("/2/", "/\./", "/:/");
$degistir    = array("1",",","-");
$sonuc       = preg_filter($ara, $degistir, $icerik);

echo "orjinal icerik : <br />";
echo "<pre>";
print_r($icerik);
echo "</pre>";

echo "degisen icerik : <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------------
*/

$icerik = array(20,21.51,45,4.27,"29:43:14");
$ara         = array("/2/", "/\./", "/:/");
$degistir    = array("1",",","-");
$sonuc       = preg_replace($ara, $degistir, $icerik);

echo "orjinal icerik : <br />";
echo "<pre>";
print_r($icerik);
echo "</pre>";

echo "degisen icerik : <br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";




?>


</body>
</html>	