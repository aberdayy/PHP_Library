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
array_sum()         :dizi icerisinde bulunan eleman veya elemanlarin rakamsal degerler icermesi durumunda tum elemanlarin toplmaini almak icin kullanilir.
array_product()     :dizi icerisinde bulunan eleman veya elemanlarin rakamsal degerler icermesi durumunda tum elemanlarin carpimini almak icin kullanilir.


*/
/*
$sayilar    =   [1,3,6,88,140,23,65,135,4,26,5,4.50,2.99,"16.46","12.25","54.90"];

echo "<pre>";
print_r($sayilar);
echo "<pre><br />";

$toplam  = array_sum($sayilar);

echo "dizi icerisindeki tum degerlerin toplami :" . $toplam;
-------------------------------------------------
*/

$sayilar    =   [1,5,4.50,2.99,"16.46","12.25","54.90"];

echo "<pre>";
print_r($sayilar);
echo "<pre><br />";

$toplam  = array_product($sayilar);

echo "dizi icerisindeki tum degerlerin carpimi :" . $toplam;






?>
</body>
</html>	