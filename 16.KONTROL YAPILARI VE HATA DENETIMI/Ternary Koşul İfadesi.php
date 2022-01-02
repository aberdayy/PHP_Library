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
?:      =   ternary operatoru (uclu operatoru)
yapisi  :
(kosul veya kosullar) ? gecrli ifade : gecersiz ifade ;
*/
/*
$deger = "ataberk";

$sonuc  =   ($deger=="ataberk") ? "dogru" : "yanlis";

echo $sonuc;
-------------------------------
*/
/*
$deger = "ataberk";

$sonuc  =   ($deger=="ataberk1") ? "dogru" : "yanlis";

echo $sonuc;
-----------------------------------
*/
/*
$deger = "ataberk";

echo ($deger=="ataberk") ? "dogru" : "yanlis";
------------------------------------
*/
/*
$deger = "ataberk";

echo ($deger=="ataber12k") ? "dogru" : "yanlis";
---------------------------------------
*/
/*
$deger = "1";

$mesaj1 = "merhaba ataberk nasilsin?";
$mesaj2 = "merhaba hakan nasilsin?";
echo ($deger=="1") ? $mesaj1 : $mesaj2;
------------------------------------
*/
/*
$deger = "1";

$mesaj1 = "merhaba ataberk nasilsin?";
$mesaj2 = "merhaba hakan nasilsin?";
$sonuc  =   ($deger=="1") ? $mesaj1 : $mesaj2;

echo $sonuc;
------------------------------------
*/

$deger1 = "10";
$deger2 = "20";
$deger3 = "30";

$dogru = "tum degerler eslesiyor";
$yanlis = "deger veya degerler eslestirilemedi";



$sonuc  =   (($deger1==10) and ($deger2==20)and ($deger3==30)) ? $dogru : $yanlis;

echo $sonuc;


























?>
</body>
</html>	