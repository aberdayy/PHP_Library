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
getdate()       :   gecerli zaman bilgileri degerlerinden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur
localtime()     :   yerel zaman bilgileri degerlerinden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur
*/
/*
$zaman  = getdate();
echo "<pre>";
print_r($zaman);
echo "</pre>";
--------------------*/
/*
$zaman  = getdate();
echo "yil : " . $zaman["year"] . "<br />";
echo "ay : " . $zaman["mon"] . "<br />";
echo "gun : " . $zaman["mday"] . "<br />";

echo "saat : " . $zaman["hours"] . "<br />";
echo "dakika : " . $zaman["minutes"] . "<br />";
echo "saniye : " . $zaman["seconds"] . "<br />";

echo "bugun aylardan : " . $zaman["month"] . "<br />";
echo "bugun gunleden : " . $zaman["weekday"] . "<br />";

echo "bugun yilin : " . $zaman["yday"] . ". gunudur.<br />";
echo "bugun haftanin : " . $zaman["wday"] . "gunudur.<br />";
echo "bugunun zaman damgasi : " . $zaman[0] . "<br />";
----------------------------------------
*/
/*
$zaman  = localtime();
echo "<pre>";
print_r($zaman);
echo "</pre>";
---------------------------------
*/
/*
$zaman  = localtime();
echo "yil : " . $zaman[5] . "(yilin baslangici 1900 olarka kabul edilir ve deger 1900 yilindan sonra kac yil gectigidir)". "<br />";
echo "ay : " . $zaman[4]."bu deger 0 dan baslar . ocak0 subat1 mart 2 vs seklinde ilerler 11 de biter" . "<br />";
echo "gun : " . $zaman[3]  ."<br />";
echo "saat : " . $zaman[2] . "<br />";
echo "dakika : " . $zaman[1] . "<br />";
echo "saniye : " . $zaman[0] . "<br />";
echo "bugun yilin : " . $zaman[7] . ". gunudur.<br />";
echo "bugun haftanin : " . $zaman[6] . "gunudur.<br />";
echo "yaz saaati uygulamasi " . $zaman[0] ."(1 veya 0 degeri dondurur.)" . "<br />";
--------------------------------*/
/*
$zamandamgasi = date("U");
echo "zaman damgasi : " . $zamandamgasi;

$zaman  = localtime($zamandamgasi,true); //belirtilen zaman damgasina goredir. 
echo "<pre>";
print_r($zaman);
echo "</pre>";
--------------------------------*/
/*
$zamandamgasi = date("U");
echo "zaman damgasi : " . $zamandamgasi;

$zaman  = localtime($zamandamgasi,true);

echo "yil : " . $zaman["tm_year"] . "(yilin baslangici 1900 olarka kabul edilir ve deger 1900 yilindan sonra kac yil gectigidir)". "<br />";
echo "ay : " . $zaman["tm_mon"]."bu deger 0 dan baslar . ocak0 subat1 mart 2 vs seklinde ilerler 11 de biter" . "<br />";
echo "gun : " . $zaman["tm_mday"]  ."<br />";
echo "saat : " . $zaman["tm_hour"] . "<br />";
echo "dakika : " . $zaman["tm_min"] . "<br />";
echo "saniye : " . $zaman["tm_sec"] . "<br />";
echo "bugun yilin : " . $zaman["tm_yday"] . ". gunudur.<br />";
echo "bugun haftanin : " . $zaman["tm_wday"] . "gunudur.<br />";
echo "yaz saaati uygulamasi " . $zaman["tm_isdst"] ."(1 veya 0 degeri dondurur.)" . "<br />";
----------------------------------*/


$zaman  = localtime(true); //zaman damgasi belirtilmedigi icin 1 ocak 1970 tarihi default olarka kabul edilir. 
echo "<pre>";
print_r($zaman);
echo "</pre>";













?>
</body>
</html>	