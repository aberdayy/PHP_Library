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
Scandir()   :   belirtilecek olan dizin icerigini kontrol ederek ilgili dizin icerisine bulunan tum alt dizin ve dosya bilgilerinden (isimler ve varsa uzantilar) yeni bir dizi olsuturarak olusturdugu degeri geriye dondurur.
Glob()      :   belirtilecek olan dizin icerigini belirtilecek olan kaliba gore kontrol ederek ilgili dizin icerisinde bulunan ve kaalip ile eslesen  tum alt dizin ve dosya bilgilerinden (isimler ve varsa uzantilar) 
yeni bir dizi olsuturarak olusturdugu degeri geriye dondurur. 
    GLOB_MARK       :   dizin icerisinde ki tum dizinleri ve dosyalari listeler. ayrica her dizin adinin sonuna bir \ (ters slash) isareti ekler. 
    GLOB_NOSORT     :   dizin icerisinde ki tum dizinleri ve dosyalari listeler. ayrica dizinlere ve dosyalara siralama yapmaz.
    GLOB_NOCHECK    :   belirtilecek olan arama kalibina gore dizin icerisinde ki tum dizinleri ve dosyalari arama kalibi ile eslesterek listeler. ayrica arama kalibina gore hicbir eslesme saglanmiyorsa arama kalibi degerini geriye dondurur.
    GLOB_ONLYDIR    :   belirtilecek olan arama kalibina gore dizin icerisindeki tum dizinleri, arama kalibi ile eslestirerek listeler.  
    GLOB_BRACE      :   belirtilecek olan genisletilmis arama kalibina gore dizin icerisindeki tum dizinleri ve dosylari, genisletilmis arama kalibi ile eslestirerek listeler.
    GLOB_ERR        :   belirtilecek olan arama kalibina gore dizin icerisindeki tum dizinleri ve dosyalari arama kalibi ile eslestirerek listeler. ayrica listeleme islemi sirasinda herhangi  bir hatayla karsilasacak olur ise islem durdurulur.(orn. okunmayan dizinler vs.)
*/
/*
$dizin = "./";//ana dizini belirtir.
$listele = scandir($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
-----------------------------*/
/*
$dizin = "./";
$listele = scandir($dizin,0);

echo "<pre>";
print_r($listele);
echo "</pre>";
----------------------*/
/*
$dizin = "./";
$listele = scandir($dizin,1); //tersten siralama yapar.  

echo "<pre>";
print_r($listele);
echo "</pre>";
--------------------------*/
/*
$dizin = "*";
$listele = glob($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
--------------------------*/
/*
$dizin = "deneme/*";
$listele = glob($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
----------------------------------*/
/*
$dizin = "/*";
$listele = glob($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
---------------------------------------*/
/*
$dizin = "*";
$listele = glob($dizin, GLOB_MARK);

echo "<pre>";
print_r($listele);
echo "</pre>";
----------------------------------*/
/*
$dizin = "*";
$listele = glob($dizin, GLOB_NOSORT);

echo "<pre>";
print_r($listele);
echo "</pre>";
-------------------------------*/
/*
$dizin = "*";
$listele = glob($dizin, GLOB_NOCHECK);

echo "<pre>";
print_r($listele);
echo "</pre>";
----------------------------*/
/*
$dizin = "*";
$listele = glob($dizin, GLOB_ONLYDIR);

echo "<pre>";
print_r($listele);
echo "</pre>";
-----------------------------*/
/*
$dizin = "*";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";
---------------------------------*/
/*
$dizin = "*";
$listele = glob($dizin, GLOB_ERR);

echo "<pre>";
print_r($listele);
echo "</pre>";
---------------------------------*/
/*
$dizin = "./deneme/*.jpg";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";

--------------------------------------*/
/*
$dizin = "./deneme/*.{jpg,pdf}";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";
------------------------------------------*/
/*
$dizin = "./deneme/i*";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";
------------------------------------------*/





















?>
</body>
</html>	