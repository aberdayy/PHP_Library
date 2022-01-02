<?php 
 header("Refresh:2")
?>
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
str_shuffle()   :   belirtilecek olan icerigin tum karakterlerini rastgele karistirarak, karistirilmis olan degeri geriye dondurur.
strrev()        :   belirtilecek olan icerigi sondan basa olmak uzere ters cevirerek, cevrilmis olan degeri geriye dondurur.
str_repeat()    :   belirtilecek olan icerigi, belirtilecek olan sayi degeri kadar tekrarlayarak, olsuturulmus olan degeri geriye dondurur.
*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br />";

$karistir   =   str_shuffle($icerik);
echo $karistir;
-----------------------------------------------*/
/*
$icerik = "1234567890";
echo $icerik . "<br />";

$karistir   =   str_shuffle($icerik);
echo $karistir;
-----------------------------------------------*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br />";

$terscevir   =   strrev($icerik);
echo $terscevir;
-----------------------------------------------*/
/*
$icerik = "1234567890";
echo $icerik . "<br />";

$terscevir   =   strrev($icerik);
echo $terscevir;
-----------------------------------------------*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br /><br /><br />";

$cogalt   =   str_repeat($icerik,1000);
echo $cogalt;
-----------------------------------------------*/
$TekrarlamaDegeri		=	":-";
$Baslik					=	" PHP Eğitim Seti ";

$Sonuc		=	str_repeat($TekrarlamaDegeri, 50);

echo $Sonuc . $Baslik . $Sonuc;	






















?>
</body>
</html>	
	
	