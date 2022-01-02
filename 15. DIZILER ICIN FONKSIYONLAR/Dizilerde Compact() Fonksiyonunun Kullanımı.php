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
compact()  :   dizi icerisinde bulunan elemanlari anahtar gibi gorererk daha onceden ayni isimle tanimlanmis olan degiskenlerden ilgili anhtarlara deger uretmek icin kullanilir.
*/

/*
$isim           =   "ataberk";
$soyisim        =   "erday";
$dogumtarihi    =   "2002";


$bilgiler       =   array("isim", "soyisim","dogumtarihi");

echo "<pre>";
print_r($bilgiler);
echo "</pre><br />";

$sonuc  =   compact($bilgiler);


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
---------------------------------------------------------------
*/
//anahtar verirsekde hicbir onemi yok
/*
$isim           =   "ataberk";
$soyisim        =   "erday";
$dogumtarihi    =   "2002";


$bilgiler       =   array("isim", "soyisim");

echo "<pre>";
print_r($bilgiler);
echo "</pre><br />";

$sonuc  =   compact($bilgiler, "dogumtarihi");


echo "<pre>";
print_r($sonuc);
echo "</pre><br />";
-------------------------------------------------------------
*/
$isim           =   "ataberk";
$soyisim        =   "erday";
$dogumtarihi    =   "2002";

$sonuc  =   compact("isim","soyisim" ,"dogumtarihi");

echo "<pre>";
print_r($sonuc);
echo "</pre><br />";


?>


</body>
</html>	