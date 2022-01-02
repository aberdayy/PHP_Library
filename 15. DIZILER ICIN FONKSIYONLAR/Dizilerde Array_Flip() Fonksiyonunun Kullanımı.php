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
array_flip()    :   dizi icerisinde bulunan anahtarlarin ve elemanlarin yer degisimi yapmasi icin kulllanilir.

*/
/*
$degerler   =   ["anahtar1"=>"deger1","anahtar2"=>"deger2","anahtar3"=>"deger3"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


$sonuc  =   array_flip($degerler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
------------------------------------------------
*/


$degerler   =   ["deger1","deger2","deger3"];

echo "<pre>";
print_r($degerler);
echo "</pre><br />";


$sonuc  =   array_flip($degerler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";








?>
</body>
</html>	