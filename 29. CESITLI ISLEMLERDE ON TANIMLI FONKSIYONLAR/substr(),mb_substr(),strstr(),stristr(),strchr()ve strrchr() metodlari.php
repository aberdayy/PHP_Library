<?php 
header("Refresh:5")
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
substr()        :   belirtilecek olan icerikte belirtileccek olan karakter sira numarasi araliklarina gore istenilen degeri bularak buldugu degeri geriye dondurur.

mb_substr()     :   belirtilecek olan icerikte belirtileccek olan karakter sira numarasi araliklarina gore, belirtilecek olan karakter kodlamasi dahilinde
gelismis olarak istenilen degeri bularak buldugu degeri geriye dondurur.

strstr()        :   belirtilecek olan icerikte belirtileccek olan deger dogrultusunda arama yaparak eslesen deger olmasi durumunda 
ilk eslesen degerin onccesini veya sonrasini bularak buldugu degeri geriye dondurur.

stristr()       :   belirtilecek olan icerikte belirtileccek olan deger dogrultusunda arama yaparak eslesen deger olmasi durumunda 
ilk eslesen degerin onccesini veya sonrasini bularak buldugu degeri geriye dondurur. BUYUK HARF KUCUK HARF DUYARLILIGI ORTADAN KALKAR

strchr()        :   belirtilecek olan icerikte belirtileccek olan deger dogrultusunda arama yaparak eslesen deger olmasi durumunda 
ilk eslesen degerin onccesini veya sonrasini bularak buldugu degeri geriye dondurur.

strrchr()       :   belirtilecek olan icerikte belirtileccek olan deger dogrultusunda arama yaparak eslesen deger olmasi durumunda 
son eslesen degerin onccesini veya sonrasini bularak buldugu degeri geriye dondurur.
*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br />";

$sonuc  = substr($icerik, 8);  // karakter saymaya birden baslar!!

echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br />";

$sonuc  = substr($icerik, -6);  // - deger verilirse tersten sayarak alir baslar!!

echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br />";

$sonuc  = substr($icerik, 8,3); //  8. karakterden basla 3 karakter al!!!

echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "ataberk erday";
echo $icerik . "<br />";

$sonuc  = substr($icerik, -8,5); 

echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday";
echo $icerik . "<br />";

$sonuc  = substr($icerik, 15,7);    //DIKKAT SUBSTR DIGER STRING METODLARINDA OLDUGU GIBI TURKCE KARAKTERLERI 2 KARAKTER OLARAK DEGERLENDIRIR.

echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday";
echo $icerik . "<br />";

$sonuc  = mb_substr($icerik, 15,7,"UTF-8");  

echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "info@ataberkerday.com";
echo $icerik . "<br />";

$sonuc  = strstr($icerik,"@",true);   
echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "info@ataberkerday.com";
echo $icerik . "<br />";

$sonuc  = strstr($icerik,"@",false);   
echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "info@ataberkerday.com";
echo $icerik . "<br />";

$sonuc  = stristr($icerik,"@",false);       //TAMAMIYLE AYNI SADECE BUYUK HARF KUCK HARF DUYARLI DEGIL...   
echo $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "info@ataberkerday.com";
echo $icerik . "<br />";

$oncesi = strstr($icerik,"@",true);
$sonrasi = strstr($icerik,"@");
$duzenle = substr($sonrasi,1);

echo $oncesi. "<br />";
echo $duzenle;
------------------------------------------------------------------*/
/*
$icerik = "Extra Egitim Ataberk";
echo "normal icerik : ".$icerik . "<br />";

$oncesi = stristr($icerik,"a",1);
$sonrasi = stristr($icerik ,"a");
echo $oncesi . "<br />";
echo $sonrasi;
------------------------------------------------------------------*/
/*
$icerik = "info@ataberkerday.com";

echo $icerik . "<br />";

$sonuc = strchr($icerik,"@",false);// FALSE DEGER VERILDIGI ZAMAN ARANAN KARAKTERDEN SONRASINI DONDURUR.EGER KI TRUE DEGER VERILIRSE ARANAN KARAKTERDEN ONCESINI DONDURUR.

echo    $sonuc;
------------------------------------------------------------------*/
/*
$icerik = "ataberkerday@gmail.com";
echo $icerik . "<br /><br />";

$oncesi = strchr($icerik, "@", true);
$sonrasi = strchr($icerik,"@"); //false deger kabul edilir.
$duzenle = substr($sonrasi,1); //0 dan baslatilirsa aranan degeride icerisine alir ve ekran ciktisinda @ ile beraber yazar.
echo $oncesi . "<br />";
echo $duzenle;
------------------------------------------------------------------*/
/*
$icerik = "Extra Egitim Ataberk";

echo $icerik . "<br /><br />";

$oncesi = strchr($icerik, "A",true);
$sonrasi = strchr($icerik,"A");

echo $oncesi . "<br />";
echo $sonrasi;
------------------------------------------------------------------*/
/*
$icerik = "info@extraegitim.com volkanalakent@yandex.com info@creativeteknoloji.com";
echo $icerik . "<br /><br />";

$sonuc  =   strrchr($icerik , "@"); //SON ESLESEN DEGERIN SONRASINI EKRAN CIKTISI OLARAK BUDA ORNEK ICIN @CREATICETEKNOLOJI.COM'DUR!!!!!!!!!!!!!!

// ONEMLI NOT strrchr eşleşen değeri kontrol ederken hafızadan kazanmak için sondan başlayarak eşleşme kontrolü yapar, dolayısı ile eşleşen değerin başını OKUMAZ 

echo $sonuc;
------------------------------------------------------------------*/
$deger          =   "+905443869794";
$son_on_hane    =   substr($deger,-10);
$telefon        =   "0" . $son_on_hane;

$alan_kodu      =   substr($telefon,0,4);
$birinci_blok   =   substr($telefon,4,3);
$ikinci_blok    =   substr($telefon,7,2);
$ucuncu_blok    =   substr($telefon,9,2);

$kullanici_telefon_numarasi = $alan_kodu." ".$birinci_blok. " " . $ikinci_blok. " " . $ucuncu_blok;

echo "telefon numaraniz :" . $kullanici_telefon_numarasi;

?>
</body>
</html>	
	
	