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
unset()     :   belirtilecek olan degiskeni, dizi anahtarini ve elemanini veya session'i silmek yok etmek icin kullanilir.
*/
/*
$isim = "ataberk";
echo $isim;
unset($isim);
echo $isim; // hata kodu dondurur cunku unset metodu ile isim adindaki degisken yok edildi.
---------------------------------------------*/
/*
$isim = "ataberk";
$soyisim = "erday";
echo $isim . " " . $soyisim . "<br />";
unset($isim);
unset($soyisim);
echo $isim . " " . $soyisim . "<br />"; // hata kodu dondurur cunku unset metodu ile isim ve soyisim adindaki degiskenler yok edildi.
---------------------------------------------*/
/*
$isim = "ataberk";
$soyisim = "erday";
echo $isim . " " . $soyisim . "<br />";
unset($isim,$soyisim);
echo $isim . " " . $soyisim . "<br />"; // hata kodu dondurur cunku unset metodu ile isim ve soyisim adindaki degiskenler yok edildi.
---------------------------------------------*/
//---------------------------------------------*/---------------------------------------------*/---------------------------------------------*/
/*
$isim = ["ataberk"];

echo "<pre>";
print_r($isim);
echo "</pre>";

unset($isim);

echo "<pre>";
print_r($isim);
echo "</pre>";
---------------------------------------------*/
/*
$isimler = ["ataberk","sadik","esra","lacin","roka","okay","kayla"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

unset($isimler[3]);

echo "<pre>";
print_r($isimler);
echo "</pre>";

---------------------------------------------*/
/*
$isimler = ["ataberk","sadik","esra","lacin","roka","okay","kayla"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

unset($isimler[3],$isimler[0]);

echo "<pre>";
print_r($isimler);
echo "</pre>";
---------------------------------------------*/
/*
$isimler = ["isim1"=>"ataberk","isim2"=>"sadik","isim3"=>"esra","isim4"=>"lacin","isim5"=>"roka","isim6"=>"okay","isim7"=>"kayla"];

echo "<pre>";
print_r($isimler);
echo "</pre>";

unset($isimler["isim5"],$isimler["isim1"]);

echo "<pre>";
print_r($isimler);
echo "</pre>";
---------------------------------------------*/
//---------------------------------------------*/---------------------------------------------*/---------------------------------------------*/
/*
$_SESSION["kullanici"]      =   "ataberk";
$_SESSION["Email"]          =   "ataberkerday@gmail.com";

echo $_SESSION["kullanici"] . "<br />";
echo $_SESSION["Email"] . "<br />";

unset($_SESSION["kullanici"]);


echo $_SESSION["kullanici"] . "<br />";
echo $_SESSION["Email"] . "<br />";
---------------------------------------------*/
$_SESSION["kullanici"]      =   "ataberk";
$_SESSION["Email"]          =   "ataberkerday@gmail.com";

echo $_SESSION["kullanici"] . "<br />";
echo $_SESSION["Email"] . "<br />";

unset($_SESSION["kullanici"],$_SESSION["Email"]);


echo $_SESSION["kullanici"] . "<br />";
echo $_SESSION["Email"] . "<br />";


?>
</body>
</html>	