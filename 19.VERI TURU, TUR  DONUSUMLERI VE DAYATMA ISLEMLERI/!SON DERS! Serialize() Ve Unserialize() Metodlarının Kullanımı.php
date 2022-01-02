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
serialize()    :  her hangi bir degerin saklanabilir veri turune donusturerek donusturdugu degeri geriye dondurur.
unserialize()  :  serialize methodu kullanilarak uretilmis olan herhangi bir saklanabilir veri turundeki  degeri  eski orjinal haline donusturerek donsuturdugu degeri geriye dondurur.
*/
/*
$bilgiler    = ["isim"=>"ataberk","soyisim"=>"erday","sehir"=>"istanbul","yas"=>18];

echo "<pre>";
print_r($bilgiler);
echo "</pre><br /><br />";

$sonuc   =  serialize($bilgiler);
echo $sonuc;
--------------------------------
*/
/*
$bilgiler    = 'a:4:{s:4:"isim";s:7:"ataberk";s:7:"soyisim";s:5:"erday";s:5:"sehir";s:8:"istanbul";s:3:"yas";i:18;}';

echo $bilgiler."<br /><br />";


$sonuc   =  unserialize($bilgiler);


echo "<pre>";
print_r($sonuc);
echo "</pre><br /><br />";
------------------------------------------
*/
//a:4 = eleman sayisidir.(array)
//s ifadesi icerigin veri turu (string)
//i ifadesi intecir 
//4-6-9 karakter byte degeri her karakter 1 byte turkce ve ozel karakterelr 3 byte lik yer kaplar.

$bilgiler    = '
   a:4:{             
   s:4:"isim";
   s:7:"ataberk";
   s:7:"soyisim";
   s:5:"erday";
   s:5:"sehir";
   s:8:"istanbul";
   s:3:"yas";
   i:18;}';





echo $bilgiler."<br /><br />";
$sonuc   =  unserialize($bilgiler);


echo "<pre>";
print_r($sonuc);
echo "</pre><br /><br />";






?>
</body>
</html>	