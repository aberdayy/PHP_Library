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
array_combine()     :   iki farkli diziyi iliskisel olarak birlestirerk yeni bir idzi olusturmsak icin kullanilir.

*/
/*
$dizi1  =   array("beyaz","lacivert","kirmizi");
$dizi2  =   array("supra","rx-7","silvia s14");
$sonuc  =   array_combine($dizi1,$dizi2);

echo "<pre>";
echo print_r($dizi1);
echo "</pre><br />";


echo "<pre>";
echo print_r($dizi2);
echo "</pre><br />";


echo "<pre>";
echo print_r($sonuc);
echo "</pre><br />";
-------------------------------------------------
*/

/*
$dizi1  =   array("renk1"=>"beyaz","ernk2"=>"lacivert","renk3"=>"kirmizi");
$dizi2  =   array("a1"=>"supra","a2"=>"rx-7","a3"=>"silvia s14");
$sonuc  =   array_combine($dizi1,$dizi2);

echo "<pre>";
echo print_r($dizi1);
echo "</pre><br />";


echo "<pre>";
echo print_r($dizi2);
echo "</pre><br />";


echo "<pre>";
echo print_r($sonuc);
echo "</pre><br />";
           ANAHTARLARIN HICBIR DEGERI YOKTUR CUNKU ARRAY COMBIUNE ZATEN O ISI HALLEDELER.
--------------------------------------------------
*/

/*
$dizi1  =   array("araclar","esyalar","isimler");
$dizi2  =   array(array("supra","rx-7","silvia s14"),"masa",array("toyota","subaru","nissan"));
$sonuc  =   array_combine($dizi1,$dizi2);

echo "<pre>";
echo print_r($dizi1);
echo "</pre><br />";


echo "<pre>";
echo print_r($dizi2);
echo "</pre><br />";


echo "<pre>";
echo print_r($sonuc);
echo "</pre><br />";

---------------------------------------------------
*/





$dizi1  =   array("araclar","esyalar","isimler");
$dizi2  =   array(array("a1"=>"supra","a2"=>"rx-7","a3"=>"silvia s14"),"b1"=>"masa",array("c1"=>"toyota","c2"=>"subaru","c3"=>"nissan"));
$sonuc  =   array_combine($dizi1,$dizi2);

echo "<pre>";
echo print_r($dizi1);
echo "</pre><br />";


echo "<pre>";
echo print_r($dizi2);
echo "</pre><br />";


echo "<pre>";
echo print_r($sonuc);
echo "</pre><br />";








?>


</body>
</html>	