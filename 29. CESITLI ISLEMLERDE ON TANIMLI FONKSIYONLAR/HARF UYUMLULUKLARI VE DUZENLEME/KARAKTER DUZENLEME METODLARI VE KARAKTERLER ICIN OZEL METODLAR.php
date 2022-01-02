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
Strtoupper()        :   Belirtilecek olan icerigin-TUM HARFLERINI BUYUK-harf olacak sekilde degistirerek, degistirilmis olan degeri  geriye dondurur.
Mb_Strtoupper()     :   Belirtilecek olan icerigin,belirtilecek olan karakter kodlamasi dahilinde gelismis olarak-TUM HARFLERINI BUYUK-harf olacak sekilde degistirerek, degistirilmis olan degeri  geriye dondurur.
Strtolower()        :   Belirtilecek olan icerigin-TUM HARFLERINI KUCUK-harf olacak sekilde degistirerek, degistirilmis olan degeri  geriye dondurur.
Mb_Strtolower()     :   Belirtilecek olan icerigin,belirtilecek olan karakter kodlamasi dahilinde gelismis olarak-TUM HARFLERINI KUCUK-harf olacak sekilde degistirerek, degistirilmis olan degeri  geriye dondurur.
Mb_Convert_Case()   :   Belirtilecek olan icerigin, BELIRTILECEK OLAN donusum turunde ve karakter kodlamasi dahilinde gelismis olarak-TUM HARFLERINI-degistirerek degistirilmis olan degeri  geriye dondurur.
    MB_CASE_UPPER   :   belirtilecek olan icerigin-TUM HARFLERINI BUYUK-harf olacak sekilde degistirmek icin kullanilir.
    MB_CASE_LOWER   :   belirtilecek olan icerigin-TUM HARFLERINI KUVUK-harfolacak sekilde degistirmek icin kullanilir.
    MB_CASE_TITLE   :   belirtilecek olan icerigin-TUM KELIMELERIN BAS HARFLERINI-buyuk harf olacak sekilde degistirmek icin kullanilir.



*/
/*
$icerik = "ataberk erday a'dan z'ye php gorsel egitim seti";
echo $icerik . "<br />";

$metin = strtoupper($icerik);               //HEPSI BUYUK
echo $metin;
--------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye php gorsel egitim seti";
echo $icerik . "<br />";

$metin = mb_strtoupper($icerik,"UTF-8");    //HEPSI BUYUK
echo $metin;
--------------------------------------------------------------------*/
//--------------------------------------------------------------------*/--------------------------------------------------------------------*/--------------------------------------------------------------------*/
/*
$icerik = "ATABERK ERDAY A'DAN Z'YE PHP EGITIM SETI";
echo $icerik . "<br />";

$metin = strtolower($icerik);               //HEPSI KUCUK
echo $metin;
--------------------------------------------------------------------*/
/*
$icerik = "ATABERK ERDAY A'DAN Z'YE PHP EGITIM SETI";
echo $icerik . "<br />";

$metin = mb_strtolower($icerik,"UTF-8");    //HEPSI KUCUK
echo $metin;
--------------------------------------------------------------------*/
//--------------------------------------------------------------------*/--------------------------------------------------------------------*/--------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye php gorsel egitim seti";
echo $icerik . "<br />";

$metin = mb_convert_case($icerik,MB_CASE_UPPER,"UTF-8");        
echo $metin;
--------------------------------------------------------------------*/
/*
$icerik = "ATABERK ERDAY A'DAN Z'YE PHP EGITIM SETI";
echo $icerik . "<br />";

$metin = mb_convert_case($icerik,MB_CASE_LOWER,"UTF-8");        
echo $metin;
--------------------------------------------------------------------*/
/*
$icerik = "ataberk erday a'dan z'ye php gorsel egitim seti";
echo $icerik . "<br />";

$metin = mb_convert_case($icerik,MB_CASE_TITLE,"UTF-8");        
echo $metin;
--------------------------------------------------------------------*/
/*
function KucukHarfleriBuyukHarflereCevir($Deger){
    $Degisecekler	=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
    $Degisenler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
    $Duzenle		=	str_replace($Degisecekler, $Degisenler, $Deger);
    $Sonuc			=	strtoupper($Duzenle);
    return $Sonuc;
}

$Icerik			=	"extra eğitim - ataberk erday - a'dan z'ye php görsel eğitim seti";

echo $Icerik . "<br />";

$Metin			=	KucukHarfleriBuyukHarflereCevir($Icerik);

echo $Metin;
--------------------------------------------------------------------*/
/*
function BuyukHarfleriKucukHarflereCevir($Deger){
    $Degisecekler	=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
    $Degisenler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
    $Duzenle		=	str_replace($Degisecekler, $Degisenler, $Deger);
    $Sonuc			=	strtolower($Duzenle);
    return $Sonuc;
}

$Icerik			=	"EXTRA EĞİTİM - ATABERK ERDAY - A'DAN Z'YE PHP GÖRSEL EĞİTİM SETİ - ISPARTA";

echo $Icerik . "<br />";

$Metin			=	BuyukHarfleriKucukHarflereCevir($Icerik);

echo $Metin;
--------------------------------------------------------------------*/
/*	
function IceriginSadeceIlkHarfiniBuyukHarfYap($Deger){
    $Uzunluk						=	strlen($Deger);         //KAC HARF OLDUGUNU SAYAR.
    $IlkHarfiBul					=	mb_substr($Deger, 0, 1, "UTF-8");
    $KalanIcerigiBul				=	mb_substr($Deger, 1, $Uzunluk, "UTF-8");
    $KucuktenBuyugeDegisecekler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
    $KucuktenBuyugeDegisenler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
    $BuyuktenKucugeDegisecekler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
    $BuyuktenKucugeDegisenler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
    $IlkHarfiDuzenle				=	strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
    $KalanIcerigiDuzenle			=	strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul));
    $Sonuc			=	$IlkHarfiDuzenle . $KalanIcerigiDuzenle;
    return $Sonuc;
}

$Icerik			=	"ıSPANAK - EXTRA EĞİTİM - ATABERK ERDAY - A'DAN Z'YE PHP GÖRSEL EĞİTİM SETİ";

echo $Icerik . "<br />";

$Metin			=	IceriginSadeceIlkHarfiniBuyukHarfYap($Icerik);

echo $Metin;
--------------------------------------------------------------------*/
/*
function HerKelimeninIlkHarfiniBuyukHarfYap($Deger){
    $Parcala						=	explode(" ", $Deger);
    $KelimeSayisi					=	count($Parcala);
    $KucuktenBuyugeDegisecekler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
    $KucuktenBuyugeDegisenler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
    $BuyuktenKucugeDegisecekler		=	array("Ç", "Ğ", "I", "İ", "Ö", "Ş", "Ü");
    $BuyuktenKucugeDegisenler		=	array("ç", "ğ", "ı", "i", "ö", "ş", "ü");
    $Sayi							=	1;
    $Duzenle						=	"";
    $Sonuc							=	"";
    
    foreach($Parcala as $Kelime){
        $TemizKelime			=	trim($Kelime);
        $Uzunluk				=	strlen($TemizKelime);
        $IlkHarfiBul			=	mb_substr($TemizKelime, 0, 1, "UTF-8");
        $KalanIcerigiBul		=	mb_substr($TemizKelime, 1, $Uzunluk, "UTF-8");
        $IlkHarfiDuzenle		=	strtoupper(str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul));
        $KalanIcerigiDuzenle	=	strtolower(str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul));
        $Duzenle				.=	$IlkHarfiDuzenle . $KalanIcerigiDuzenle . " ";
        
        if($Sayi==$KelimeSayisi){
            $Sonuc				.=	$Duzenle;
            
            return mb_convert_case(trim($Sonuc), MB_CASE_TITLE, "UTF-8");
        }
        
        $Sayi++;
    }
}

$Icerik			=	"extra eğitim - volkan alakent - a'dan z'ye php görsel eğitim seti - istanbul";

echo $Icerik . "<br />";

$Metin			=	HerKelimeninIlkHarfiniBuyukHarfYap($Icerik);

echo $Metin;
--------------------------------------------------------------------*/

function HerKelimeninIlkHarfiniBuyukHarfYap($Deger){
    $Parcala						=	explode(" ", $Deger);
    $KelimeSayisi					=	count($Parcala);
    $KucuktenBuyugeDegisecekler		=	array("a", "b", "c", "ç", "d", "e", "f", "g", "ğ", "h", "ı", "i", "j", "k", "l", "m", "n", "o", "ö", "p", "r", "s", "ş", "t", "u", "ü", "v", "y", "z", "q", "w", "x");
    $KucuktenBuyugeDegisenler		=	array("A", "B", "C", "Ç", "D", "E", "F", "G", "Ğ", "H", "I", "İ", "J", "K", "L", "M", "N", "O", "Ö", "P", "R", "S", "Ş", "T", "U", "Ü", "V", "Y", "Z", "Q", "W", "X");
    $BuyuktenKucugeDegisecekler		=	array("A", "B", "C", "Ç", "D", "E", "F", "G", "Ğ", "H", "I", "İ", "J", "K", "L", "M", "N", "O", "Ö", "P", "R", "S", "Ş", "T", "U", "Ü", "V", "Y", "Z", "Q", "W", "X");
    $BuyuktenKucugeDegisenler		=	array("a", "b", "c", "ç", "d", "e", "f", "g", "ğ", "h", "ı", "i", "j", "k", "l", "m", "n", "o", "ö", "p", "r", "s", "ş", "t", "u", "ü", "v", "y", "z", "q", "w", "x");
    $Sayi							=	1;
    $Duzenle						=	"";
    $Sonuc							=	"";
    
    foreach($Parcala as $Kelime){
        $TemizKelime			=	trim($Kelime);
        $Uzunluk				=	strlen($TemizKelime);
        $IlkHarfiBul			=	mb_substr($TemizKelime, 0, 1, "UTF-8");
        $KalanIcerigiBul		=	mb_substr($TemizKelime, 1, $Uzunluk, "UTF-8");
        $IlkHarfiDuzenle		=	str_replace($KucuktenBuyugeDegisecekler, $KucuktenBuyugeDegisenler, $IlkHarfiBul);
        $KalanIcerigiDuzenle	=	str_replace($BuyuktenKucugeDegisecekler, $BuyuktenKucugeDegisenler, $KalanIcerigiBul);
        $Duzenle				.=	$IlkHarfiDuzenle . $KalanIcerigiDuzenle . " ";
        if($Sayi==$KelimeSayisi){
            $Sonuc				.=	$Duzenle;
            return $Sonuc;
        }
        
        $Sayi++;
    }
}

$Icerik			=	"extra eğitim - volkan alakent - a'dan z'ye php görsel eğitim seti - istanbul";

echo $Icerik . "<br />";

$Metin			=	HerKelimeninIlkHarfiniBuyukHarfYap($Icerik);

echo $Metin;












 ?>
</body>
</html>	