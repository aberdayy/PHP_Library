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
/*                  MB kullanilan metodlar karakter kodlamasi yapilmis olur.
Strlen()            :   belirtilecek olan icerigin KARAKTER sayisini bularak buldugu degeri  geriye dondurur.
Mb_Strlen()         :   belirtilecek olan icerigin belirtilecek olan karakter kodlamasi dahilinde gelismis olarak karakter sayisini bularak buldugu degeri  geriye dondurur.
Substr_Count()      :   belirtilecek olan herhangi bir degerin belirtilecek olan icerikte kac tane oldugunu bularak buldugu degeri geriye dondurur.         BUYUK HARF KUCUK DUYARLIDIR.
Mb_Substr_Count()   :   belirtilecek olan herhangi bir degerin belirtilecek olan icerikte belirtilecek olan karakter kodlamasi dahilinde gelismis olarak kac tane oldugunu bularak buldugu degeri geriye dondurur.
Str_Word_Count()    :   belirtilecek olan icerigin KELIME sayisini bulur.ve degeri geriye dondurur.
*/

/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$sonuc = strlen($icerik);

echo "icerigin karakter sayisi : " . $sonuc;
--------------------------------------------------------------------------*/
//--------------------------------------------------------------------------*/--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$sonuc = mb_strlen($icerik, "UTF-8");

echo "icerigin karakter sayisi : " . $sonuc;
--------------------------------------------------------------------------*/
//--------------------------------------------------------------------------*/--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$sonuc = substr_count($icerik, "a");

echo "iceriginde \"a\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$aranacakoge = "a";

$sonuc = substr_count($icerik, $aranacakoge);

echo "iceriginde \"". $aranacakoge ."\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataataataataataataberk erdataataataataatay - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$aranacakoge = "ata";

$sonuc = substr_count($icerik, $aranacakoge,20); //3. parametre karakter sira numarasini belirtir suradan sonra vs gibi....

echo "iceriginde \"". $aranacakoge ."\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataataataataataataberk erdataataataataatay - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$aranacakoge = "ata";

$sonuc = substr_count($icerik, $aranacakoge,1,18); //3. parametre karakter sira numarasini belirtir suradan sonra vs gibi.... | 4.parametre suraya kadar anlami tasir.

echo "iceriginde \"". $aranacakoge ."\" karakterinden : " . $sonuc . " adet vardir.";

--------------------------------------------------------------------------*/
//--------------------------------------------------------------------------*/--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$sonuc = mb_substr_count($icerik, "a");

echo "iceriginde \"a\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$aranacakoge = "a";

$sonuc = mb_substr_count($icerik, $aranacakoge);

echo "iceriginde \"". $aranacakoge ."\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataataataataataataberk erdataataataataatay - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$aranacakoge = "ata";

$sonuc = substr_count($icerik, $aranacakoge,20); //3. parametre karakter sira numarasini belirtir suradan sonra vs gibi....

echo "iceriginde \"". $aranacakoge ."\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataataataataataataberk erdataataataataatay - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$aranacakoge = "ata";

$sonuc = mb_substr_count($icerik, $aranacakoge,1); //3. parametre karakter sira numarasini belirtir suradan sonra vs gibi.... | 4.parametre BURADA CALISMAZ!!!

echo "iceriginde \"". $aranacakoge ."\" karakterinden : " . $sonuc . " adet vardir.";
--------------------------------------------------------------------------*/
//--------------------------------------------------------------------------*/--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$sonuc = str_word_count($icerik, 0); //ikinci parametre 0 girilirse icerigin kelime sayisini soyler

echo $sonuc . "<br /><br />";

$islem = str_word_count("extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti",1); //ikinci parametre 1 girilirse kelimeleri nereden kestigini gosterir.
echo "<pre>";
print_r($islem);
echo "</pre>";

--------------------------------------------------------------------------*/
/*
$icerik = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";

echo $icerik . "<br />";

$sonuc = str_word_count($icerik, 0); //ikinci parametre 0 girilirse icerigin kelime sayisini soyler

echo $sonuc . "<br /><br />";

$islem = str_word_count("extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti",2); //ikinci parametre 2 girilirse kelime indiks degerini dizi anahtari olarak gosterir.
echo "<pre>";
print_r($islem);
echo "</pre>";
--------------------------------------------------------------------------*/

$Icerik			=	"extra egitim - ataberk erday - a'dan z'ye php gorsel egitim seti";
	
	echo $Icerik . "<br />";
	
	$Sonuc			=	str_word_count($Icerik, 0, "ğĞüÜşŞıİöÖçÇ");
	
	echo $Sonuc;






?>
</body>
</html>	