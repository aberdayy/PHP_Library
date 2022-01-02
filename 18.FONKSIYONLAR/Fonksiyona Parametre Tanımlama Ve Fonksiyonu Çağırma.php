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
function islemyap($isim, $soyisim){
echo $isim ." ". $soyisim;
}
islemyap("ataberk","erday");
---------------------------
*/
/*
function islemyap($isim, $soyisim,$dogumtarihi,$yas,$sehir,$meslek,$cinsiyet){
    $gelenisim          =   $isim;
    $gelensoyisim       =   $soyisim;
    $gelendogumtarihi   =   $dogumtarihi;
    $gelenyas           =   $yas;
    $gelensehir         =   $sehir;
    $gelenmeslek        =   $meslek;
    $gelencinsiyet      =   $cinsiyet;

    $kisikarti    =     "adi :" . $gelenisim . "<br />".
                        "soyisim :" . $gelensoyisim . "<br />".
                        "dogum tarihi :" . $gelendogumtarihi . "<br />".
                        "yas :" . $gelenyas . "<br />".
                        "sehir :" . $gelensehir . "<br />".
                        "meslek :" . $gelenmeslek . "<br />".
                        "cinsiyet :" . $gelencinsiyet ;


    echo $kisikarti;
}

islemyap("sadik","erday","1964",56,"istanbul","kurucu","erkek");
echo "<br /><br />";
islemyap("ataberk","erday","2002",18,"istanbul","devoloper","erkek");
echo "<br /><br />";
islemyap("esra","erday","1969",18,"istanbul","ogretmen","kadin");
--------------------------------------------------------
*/

function islemyap($isim, $soyisim,$dogumtarihi,$yas,$sehir,$meslek,$cinsiyet){
    $gelenisim          =   $isim;
    $gelensoyisim       =   $soyisim;
    $gelendogumtarihi   =   $dogumtarihi;
    $gelenyas           =   $yas;
    $gelensehir         =   $sehir;
    $gelenmeslek        =   $meslek;
    $gelencinsiyet      =   $cinsiyet;

    $kisikarti    =     "adi :" . $gelenisim . "<br />".
                        "soyisim :" . $gelensoyisim . "<br />".
                        "dogum tarihi :" . $gelendogumtarihi . "<br />".
                        "yas :" . $gelenyas . "<br />".
                        "sehir :" . $gelensehir . "<br />".
                        "meslek :" . $gelenmeslek . "<br />".
                        "cinsiyet :" . $gelencinsiyet ;


    return $kisikarti;
}

$islem1   =  islemyap("sadik","erday","1964",56,"istanbul","kurucu","erkek");
$islem2    =   islemyap("ataberk","erday","2002",18,"istanbul","devoloper","erkek");
$islem3    =islemyap("esra","erday","1969",51,"istanbul","ogretmen","kadin");


echo $islem1 . "<br /><br />";

echo $islem2 . "<br /><br />";

echo $islem3;
//7 PARAMETRE VARSA 7 PARAMETRE GONDERMEK ZORUNDASIN!!!!!!!!!
?>
</body>
</html>	