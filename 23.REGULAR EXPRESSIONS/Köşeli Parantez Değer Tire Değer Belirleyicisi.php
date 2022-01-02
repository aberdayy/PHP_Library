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
[x-y]  :   duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminde bulunan degerin belirtilen karakter araligindan herhangi birisi ile eslesmesi gerektigini belirtmek icin kullanilir.
*/
/*
$metin = "Merhaba benim adim Ataberk Erday'dir. Arkadasimin adi ümit'tir";
$desen = "/[a-z]/i";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 
--------------------------------*/
/*
$metin = "Merhaba benim adim Ataberk Erday'dir. Arkadasimin adi ümit'tir";
$desen = "/[a-zA-Z]/";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 
------------------------------------*/


//koseli parantez kullanildigi zaman unicode "u" bu sekilde yapilir.
/*
$metin = "Merhaba benim adim Ataberk Erday'dir. Arkadasimin adi ümit'tir";
$desen = "/[a-zA-Z !!!BURAYA turkce karakterler eklenir!!!]/u";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 
-----------------------------------------------
*/
/*
$metin = "Merhaba benim adim Ataberk Erday'dir. ben 2002 06/04 tarihinde dogdum";
$desen = "/[0-9]/";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 
-----------------------------------------------
*/
/*
$metin = "Merhaba benim adim Ataberk Erday'dir. ben 2002 06/04 tarihinde dogdum";
$desen = "/[a-z0-9A-Z]/i";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 
-------------------------------------*/
/*
$metin = "Merhaba benim adim Ataberk Erday'dir. ben 2002 06/04 tarihinde dogdum";
$desen = "/[a-z0-9A-Z'\.]/i";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 
----------------------------------------*/

$metin = "Merhaba benim adim Ataberk Erday'dir. ben 2002 06/04 tarihinde dogdum";
$desen = "/[f-kA-C]/i";
preg_match_all($desen,$metin,$sonuc);
echo "metin : " . $metin . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>"; 


?>

</body>
</html>	