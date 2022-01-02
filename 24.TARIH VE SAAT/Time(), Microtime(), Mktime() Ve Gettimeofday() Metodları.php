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
time()          :   gecerli zamanin unix zaman damgasi degerini bularak buldugu degeri geriye dondurur.   
mktime()        :   belirtilecek olan zamanin unix zaman damgasini bulur ve geriye dondurur.
microtime()     :   gecerli zamaninin unix zaman damgasiini degeri ve micro saniye degerini bularak geriye dondurur.
gettimefday()   :   gecerli zamanin unix zaman damgasi degeri, micro saniye degeri, gunisigi(yaz saati) uygulamasi ve greenwitch batisi degerlerinden yeni bir dizi olusturur ve olusturdugu dizi degerini geriye dondurur. ayrica istenilirse string yani alfanumerik metin olarakn da gecerli zamanin unix zaman damgasi ve micro saniye degerini geriye dondurebilir
*/
/*
$zamandamgasi = time();
echo "zaman damgasi : ".$zamandamgasi;
------------------------
*/
/*
$zamandamgasi = mktime();
echo "zaman damgasi : ".$zamandamgasi;
-----------------------*/
/*
$zamandamgasi = mktime(15,20,55,12,9,1980); //saat, daakika saniye ay gun yil 
echo "zaman damgasi : ".$zamandamgasi . "<br />";

$gericevir = date("d.m.Y H.i.s",$zamandamgasi);
echo $gericevir;
-------------------------------
*/
/*
$zaman = getdate(mktime(15,20,55,12,9,1980)); //saat, daakika saniye ay gun yil 
echo "<pre>";
print_r($zaman);
echo "</pre>";
--------------------------------------------
*/
/*
$deger = microtime();
echo "mikro saniye/zaman damgasi : ".$deger;
------------------------------------*/
/*
$deger = microtime();
$dizi = explode(" ",$deger);

$zamandamgasi   =   $dizi[1];
$microsaniye    = $dizi[0];
echo "zaman damgasi : " . $zamandamgasi . "<br />  " . $microsaniye;
 ------------------------------*/
/*
 $deger = gettimeofday();
 echo "<pre>";
 print_r($deger);
echo "</pre>";
---------------------------------
*/
/*
$deger = gettimeofday();
echo "zaman damgasi :" . $deger["sec"] . "<br />";
echo "mikro saniye :" . $deger["usec"] . "<br />";
echo "greenwich batisi :" . $deger["minuteswest"] . "<br />";
echo "yaz saati uygulamasi :" . $deger["dsttime"] . "<br />";
---------------------------------*/

$deger = gettimeofday(true);
echo $deger




?>
</body>
</html>	