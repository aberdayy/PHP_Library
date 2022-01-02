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


array_intersect()           :   birden fazla dizi icerisinde bulunan ve ayni eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.   
array_intersect_key         :   birden fazla dizi icerisinde bulunan ve ayni anahtar isimlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.   
array_intersect_assoc       :   birden fazla dizi icerisinde bulunan ve ayni anahtar isimlerine ve aymi eleman degerlerine sahip elemanlardan yeni bir dizi olusturmak icin kullanilir.   
*/
/*
$deger1     =   array("ataberk","volkan ","hakan","onur","levent","umit ","serkan","levent","huseyin");
$deger2     =   array("ali","veli","aslan","kemal","ataberk","halil","mustafa","serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect($deger1,$deger2);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------------
*/


/*
$deger1     =   array("a1"=>"ataberk","a2"=>"volkan ","a3"=>"hakan","a4"=>"onur","a5"=>"levent","a6"=>"umit ","a6"=>"serkan","a7"=>"levent","a8"=>"huseyin");
$deger2     =   array("b1"=>"ali","b2"=>"veli","b3"=>"aslan","b4"=>"kemal","b5"=>"ataberk","b6"=>"halil","b7"=>"mustafa","b8"=>"serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect($deger1,$deger2);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
---------------------------------------------------------
*/
/*
$deger1     =   array("a1"=>"ataberk","a2"=>"volkan ","a3"=>"hakan","a4"=>"onur","a5"=>"levent","a6"=>"umit ","a6"=>"serkan","a7"=>"levent","a8"=>"huseyin");
$deger2     =   array("b1"=>"ali","b2"=>"veli","b3"=>"aslan","b4"=>"kemal","b5"=>"ataberk","b6"=>"halil","b7"=>"mustafa","b8"=>"serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect($deger2,$deger1);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
---------------------------------------------------------
---------------------------------------------------------
---------------------------------------------------------
*/
/*
$deger1     =   array("ataberk","volkan ","hakan","onur","levent","umit ","serkan","levent","huseyin");
$deger2     =   array("ali","veli","aslan","kemal","ataberk","halil","mustafa","serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect_key($deger1,$deger2);
 
echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-------------------------------------------------------------
*/
/*
$deger1     =   array("a1"=>"ataberk","e1"=>"volkan ","a3"=>"hakan","a4"=>"onur","a5"=>"levent","a6"=>"umit ","a6"=>"serkan","a7"=>"levent","e2"=>"huseyin");
$deger2     =   array("b1"=>"ali","e1"=>"veli","b3"=>"aslan","e2"=>"kemal","b5"=>"ataberk","b6"=>"halil","b7"=>"mustafa","b8"=>"serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect_key($deger1,$deger2);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-----------------------------------------------------------
*/
/*
$deger1     =   array("a1"=>"ataberk","e1"=>"volkan ","a3"=>"hakan","a4"=>"onur","a5"=>"levent","a6"=>"umit ","a6"=>"serkan","a7"=>"levent","e2"=>"huseyin");
$deger2     =   array("b1"=>"ali","e1"=>"veli","b3"=>"aslan","e2"=>"kemal","b5"=>"ataberk","b6"=>"halil","b7"=>"mustafa","b8"=>"serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect_key($deger2,$deger1);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
--------------------------------------------------------------
*/
/*
$deger1     =   array("ataberk","volkan ","hakan","onur","levent","umit ","serkan","levent","huseyin");
$deger2     =   array("ali","veli","aslan","kemal","ataberk","halil","mustafa","serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect_assoc($deger1,$deger2);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
----------------------------------------------------

*/
/*
$deger1     =   array("deneme1"=>"ataberk","volkan ","isim1"=>"hakan","onur","levent","umit ","serkan","levent","huseyin");
$deger2     =   array("ali","veli","deneme1"=>"ataberk","isim1"=>"hakan","aslan","kemal","ataberk","halil","mustafa","serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect_assoc($deger1,$deger2);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
---------------------------------------------------
*/
$deger1     =   array("deneme1"=>"ataberk","volkan ","isim1"=>"hakan","onur","levent","umit ","serkan","levent","huseyin");
$deger2     =   array("ali","veli","deneme1"=>"ataberk","isim1"=>"hakan","aslan","kemal","ataberk","halil","mustafa","serkan");

echo "<pre>";
print_r($deger1);
echo "</pre>";

echo "<pre>";
print_r($deger2);
echo "</pre><br />";

$sonuc      =   array_intersect_assoc($deger2,$deger1);//ilk dizi baz alinir.


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";












?>


</body>
</html>	