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

date_default_timezone_get() :  tum tarih ve saat islevleri tarafindan kullanilan varsiyalilan gecerli zaman dilimi degerini bulurak buldugu degeri geriye dondurur.   
timezone_indentifiers_list():  tum zaman dilimi tanimlayicilari degerlerinden yeni bir dizi olusturarak olusturudugu dizi degerini geriye dondurur.
degerler : 
1       :  africa  
2       :  amerika    
4       :  antartica
8       :  artctic(kk)
16      :  asia
32      :  atlantic   
64      :  australia
128     :  europe 
256     :  indian 
512     :  pasific 
2847    :  all 
date_default_timezone_set() : tum tarih ve saat islevleri tarafindan kullanilan varsiyalilan gecerli zaman dilimini belirtmek icin kullanir.
    zaman dilimleri;
    UTC     :   cordinated universal time(es gudumlu evrensel zaman)
    GMT     :   greenwich mean time (greenweach ortalama zamani )
setlocate()                 :   sistemin yerel ayarlarini belirtmek icin kullanir.(yerel bilgi, cografi konum, para, zaman vb.)
*/
/*
$zaman = date_default_timezone_get();
echo "zaman dilimi : " . $zaman;
-------------------------*/
/*
$zaman = timezone_identifiers_list();
echo "<pre>";
print_r($zaman);
echo "</pre>";
---------------------------------
*/
/*
$zaman = timezone_identifiers_list(128);
echo "<pre>";
print_r($zaman);
echo "</pre>";
------------------------
*/
/*
$zaman = date_default_timezone_get();
echo "orjinal zaman dilimi : " . $zaman . "<br />";

date_default_timezone_set("Europe/Paris");


$zaman3 = date_default_timezone_get();
echo "en yeni zaman dilimi : " . $zaman3;
------------------------------
*/
/*
setlocale(LC_ALL,"tr_TR");
------------------------
*/
setlocale(LC_ALL,"tr_TR","tr","turkish");






?>
</body>
</html>	