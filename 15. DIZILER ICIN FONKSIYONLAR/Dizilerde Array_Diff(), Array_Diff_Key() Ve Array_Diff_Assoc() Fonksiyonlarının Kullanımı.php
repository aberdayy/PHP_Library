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
array_diff()            :   birden fazla dizi icerisinde bulunan ve farkli eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
array_diff_key()        :   birden fazla dizi icerisinde bulunan ve farkli anahtar isimlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
array_diff_assoc()      :   birden fazla dizi icerisinde bulunan ve farkli anahtar isimlerine ve farkli eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.
*/
/*
$renkler1    =   array("siyah","beyaz","sari","mavi","yesil","kirmizi");
$renkler2    =  array("pembe","lacivert","eflatun","mor","bordo","yesil","kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff($renkler1,$renkler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------------------
*/

/*
$renkler1    =   array("a1"=>"siyah","a2"=>"beyaz","a3"=>"sari","a4"=>"mavi","a5"=>"yesil","a6"=>"kirmizi");
$renkler2    =  array("b1"=>"pembe","b2"=>"lacivert","b3"=>"eflatun","b4"=>"mor","b5"=>"bordo","b6"=>"yesil","b7"=>"kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff($renkler1,$renkler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------------------
*/
/*
$renkler1    =   array("siyah","beyaz","sari","mavi","yesil","kirmizi");
$renkler2    =  array("pembe","lacivert","eflatun","mor","bordo","yesil","kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff($renkler2,$renkler1);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------------------
*/
/*
$renkler1    =   array("siyah","beyaz","sari","mavi","yesil","kirmizi");
$renkler2    =  array("pembe","lacivert");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff_key($renkler1,$renkler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------------------
*/
/*
$renkler1    =   array("a1"=>"siyah","a2"=>"beyaz","a3"=>"sari","a4"=>"mavi","a5"=>"yesil","a6"=>"kirmizi");
$renkler2    =  array("b1"=>"pembe","b2"=>"lacivert","b3"=>"eflatun","b4"=>"mor","b5"=>"bordo","b6"=>"yesil","b7"=>"kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff_key($renkler1,$renkler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
----------------------------------------------------------------
*/
/*
$renkler1    =   array("a1"=>"siyah","a2"=>"beyaz","a3"=>"sari","a4"=>"mavi","a5"=>"yesil","a6"=>"kirmizi");
$renkler2    =  array("a2"=>"pembe","b2"=>"lacivert","b3"=>"eflatun","b4"=>"mor","b5"=>"bordo","b6"=>"yesil","b7"=>"kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff_key($renkler1,$renkler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------------------------------
*/
/*
$renkler1    =   array("siyah","beyaz","sari","mavi","yesil","kirmizi");
$renkler2    =  array("pembe","lacivert","eflatun","mor","bordo","yesil","kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff_assoc($renkler1,$renkler2);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
*/

$renkler1    =   array("a1"=>"siyah","a2"=>"beyaz","a3"=>"sari","a4"=>"mavi","a5"=>"yesil","a6"=>"kirmizi");
$renkler2    =  array("a2"=>"pembe","b2"=>"lacivert","b3"=>"eflatun","b4"=>"mor","b5"=>"bordo","b6"=>"yesil","b7"=>"kirmizi");



echo "<pre>";
print_r($renkler1);
echo "</pre>";



echo "<pre>";
print_r($renkler2);
echo "</pre>";


$sonuc      =   array_diff_assoc($renkler2,$renkler1);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
























?>


</body>
</html>	