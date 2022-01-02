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
sabit   :   girdigimiz degerleri alan veya progframin calismasi ile bazi
degerlerin atandigi veri tutucularidir.
kurallar    :   
1.  sabitler ve icerikleri define() fonksiyonu ile veya const tanimi ile olusturulur.
2.  sabit isimleri mutlaka bir harf veya _(alt cizgi) ile baslamalidir.
3.  sabit isimleri hicbir zaman bir rakam ile baslayamaz.
4.  sabit isimleri ierisinde alfanumerik degerler (A-Z a-z 0-9) ve_ (alt cizgi) kullanilabilir.
5.  sabit isimleri icerisinde hic bir zaman bosluk , turkce karakterler veya ozel karakterler kullanilamaz.
6.  sabit isimleri tanimlanirken php tarafindadn kullanilmakta olan isim ve tanimlar kullanilamaz.
7.  sabit isimleri buyuk/kucuk harf duyarlidir. eger istenirse bu harf duyarliligi iptal edilebilir.
8.  sabit isimleri birden fazla kez kullanilamaz.
9.  sabtlere atanacak olan degerler daha sonradan degistirilemez veya tanimsiz duruma getirilemez.
10. sabitler kapsama/ etki alani kurallarina tabi degildir ve her alandan erisilebilir.
*/
/*


define("ISIM" , "ataberrrrrrrrk erday");

echo ISIM;
 
--------DEFINE DAKI ORNEKLER CONST ICINDE GECERLI----------

************BUYUK HARFLERLE YAZILMASI ONERILIR***************************
--------------------yada------------------------

const ISIM  =   "ataberk erday";

echo ISIM;

---------------YADA------------------

define("__ISIM" , "ataberrrrrrrrk erday");

echo __ISIM;
---------------YADA------------------


define("I_S_I12M" , "ataberrrHELLOrrrrrk erday");

echo I_S_I12M;
---------------ONEMLI BILGI------------------
define("ISIM" , "ataberrrrrrrrk erday", TRUE); 3. parametredeki true ifadesi buyuk harf kucuk harrf duyarliligini kaldirir. SADEECE DIFENE ICIN GECERLIDIR.

---------------YADA------------------
function deneme(){
    define("ISIM", "ataberk erday");
}
deneme();
echo ISIM;


---------------YADA------------------

*/ 







?>

</body>
</html>	