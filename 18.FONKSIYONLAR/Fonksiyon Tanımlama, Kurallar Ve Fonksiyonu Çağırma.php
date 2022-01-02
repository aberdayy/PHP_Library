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

fonksiyon   :  herhangi bir programlamada belirli bir veya daha fazla isi gerceklestirmek uzere onceden hazirlanan kucuk program parcaciklarina verilen isimdir.
kurallar    :  
1. fonksiyon isimleri her zaman anlamli olarak kullanilmalidir.
2. fonksiyon isimleri icerisinde alfanumerik degerler a-z A-Z 0-9 ve _(alt cizgi) kullanilabilir.
3. fonksiyon isijmleri mutlaka bir harf veya alt cizgi ile baslamalidir.
4. fonksiyon isimleri hic bir zaman rakam ile baslayamaz.
5. fonksiyon ismmleri icerisinde hic bir zaman bosluk, turkce karakter ve ozel karakter kullanilamaz.
6.fonksiyon isimleri tanimlanirken PHP tarafindan kullanilmakta olan isimler/tanmlar kullanilamaz.
7.fonksiyon isimleri hicbir zaman birden fazla kez kullanilamaz.
8.fonksiyon isjmleri kucuk harf buyuk harf duyarli degildir.
9.fonksiyonlar kapsama/etki alani kurralarina tabidir.

yapisi;
function Isim(parametre veya parametreler){
kod bloklari 
}

*/
/*
function yazi_yaz(){
    echo "extra egitim ataberk erday";
}
yazi_yaz();
--------------------------------------
*/
/*
function _yazi_yaz(){
    echo "extra egitim ataberk erday";
}
_yazi_yaz();
---------------------------------------
*/
/*
function yaziyaz(){
    echo "extra egitim ataberk erday";
}
YAZIYAZ();
------------------------------------------
*/
/*
function yaziyaz(){
    
     $deger = "extra egidadadatim ataberk erday";
echo $deger;
    }
YAZIYAZ();
-------------------------------------------
*/
//  DEGER FONKSIYON PARANTEZLERI ICERISINDE OLMALI!!!!!!!
/*$deger = "extra egidadadatim ataberk erday";

function yaziyaz(){
    
echo $deger;
   }
YAZIYAZ();
// CALISMAZ KRITIK BIR HATADIR!!!!!!
*/
function saydir(){
$sayi = 1;
while ($sayi <=10) {
    echo $sayi . "<br />";
    $sayi++;
}
}
echo "fonksiyon 1. defa cagirildi : <br />";
saydir();
echo "fonksiyon 2. defa cagirildi : <br />";
saydir();
echo "fonksiyon 3. defa cagirildi : <br />";
saydir();
echo "fonksiyon 4. defa cagirildi : <br />";
saydir();
echo "fonksiyon 5. defa cagirildi : <br />";
saydir();

?>
</body>
</html>	