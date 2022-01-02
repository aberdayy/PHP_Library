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
array_fill()            :   belirtilecek olan deger dogrultusunda doldurma islemi yaparak yeni bir dizi olusturmak icin kullanilir.
array_fill_keys()       :   dizi icerisinde nulunan eleman veya elemanlari anahtar gibi gorererk belirtilecek olan deger dogrultusunda doldurmaya islemli yaparak yeni bir dizi olusturmak icin kullanilir.

*/

/*
$degerler   = array_fill (0 ,10, "ataberk");
//0=>"ataberlk, 1=>ataberk...... olauini yapar
echo "<pre>";
print_r($degerler);
echo "</pre>";
--------------------------------------------------------
*/
/*
$degerler   = array_fill (100 ,10, "ataberk");

echo "<pre>";
print_r($degerler);
echo "</pre>";
-----------------------------------------------------------
*/

$isimler            =   array("volkan","ataberk","furkan");
$sonuc   = array_fill_keys ($isimler, "eraart");

echo "<pre>";
print_r($sonuc);
echo "</pre>";
//anahtar verildigi takdrde hicbir fark yaratmaz yinede array fill keys anahtarlari siler ve kendi degerini uygular.

























?>


</body>
</html>	