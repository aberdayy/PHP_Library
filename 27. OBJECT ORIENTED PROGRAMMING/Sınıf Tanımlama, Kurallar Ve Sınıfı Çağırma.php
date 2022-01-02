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
class   :    herhnagi bir programlamada belirli bir veya daha fazla isi gerceklestirmek uzere onceden hazirlananan nesnelere verilen isimdir.
new     :    daha onceden tanimlanmis olan herhnaggi bir sinifi cagirmak icin kullanilir.

kurallar    :
1-sinif isimleri her zaman anlamli olarak kullanilmalidir.
2-sinif isimleri icerisinde alfanumerik ddegerler (a-z A-Z 0-9) ve _(alt cizgi) kullanilabilir.
3-sinif isimleri mutlaka bir harf veya _ (alt cizgi) ile baslamalidir.
4-sinif isimleri hicbir zaman bir rakam ile baslayamaz.
5-sinif isimleri icerisinde hicbir zaman bosluk, turkce karakterler ve ozel karakterler kullanilamaz.
6-sinif isimleri tanimlanirken, PHP tarafindan kullanilmakta olan isimler/tanimlar kullanilamaz.
7-sinif isimleri hic bir zaman birden fazla kez kullanilamaz. (namespace kullanilmasi durumunda birden fazla kez kullanilabilir.) 
8-sinif isimleri kucuk/buyuk harf duyarli degildir.
9-sinif kapsama/etki alani kurallarina tabidir.

Yapisi  ;   
class isim{
    kod bloklari
}
*/
/*
class isimsoyisim{

    public $isim    = "ataberk";
    public $soyisim = "erday";

}
$sonuc = new isimsoyisim;

echo $sonuc->isim . "<br />";
echo $sonuc->soyisim . "<br />";
--------------------------------*/
/*
class isimsoyisim{

    public const ISIM    = "ata";
    public const SOYISIM = "erday";

}
$sonuc = new isimsoyisim;

echo isimsoyisim::ISIM . "<br />";
echo isimsoyisim::SOYISIM . "<br />";
-------------------------------*/
/*
class deneme{

    public function egitim1(){
        $sonuc = "adan zye php gdadadaadadadorsel egt seti";
        return $sonuc;
    }
    
    public function egitim2(){
        $sonuc = "adan zye javasicritp  gdadadaadadadorsel egt seti";
        return $sonuc;
    }
    
   
}
$NESNE1 = new deneme;
$metin1 = $NESNE1->egitim1();

echo $metin1 . "<br />";

$NESNE2 = new deneme;
$metin2 = $NESNE2->egitim2();

echo $metin2;
-------------------------------------*/
/*
class detay{

    public $isim    = "ata";
    public const SOYISIM = "erday";
    public function bilgiler(){
        $meslek = "programlama uzmani";
        $sehir = "istanbul";
        $metin = "meslegi :" . $meslek . "<br />". "yasadigi il :" . $sehir;
        return $metin;
    }
}
$sonuc = new detay;

echo "isim soyisim : " . $sonuc->isim . " " . detay::SOYISIM . "<br />" . $sonuc->bilgiler() ;
--------------------------------------*/

// NAMESPACE DERSINDE ANLATILACAK BU KODLAR HATA DONDURUR.
/*
namespace uyeler\bilgi; 
class detay{
    public $isim    = "ata";
}

$nesne1 = new detay;
echo $nesne1->isim. "<br />";



namespace urunler\dizustu;
class detay{
    public $adi    = "asus g752 notebook";
}
$nesne2 = new detay;
echo $nesne2->adi. "<br />";
--------------------------------------*/












?>
</body>
</html>	