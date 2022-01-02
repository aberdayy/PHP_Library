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
array_filter()  :   dizinin icerisined bulunan bos eleman veya elemanlari filtre ederek yeni bir dizi olusturmak icin kullanilir.
*/
/*
$marka      =       array("toyota","subaru","","nissan","","","skoda");


echo "<pre>";
print_r($marka);
echo "</pre>";


$sonuc  =   array_filter($marka);


echo "<pre>";
print_r($sonuc);
echo "</pre>";
*/


$marka      = array("japon"=>"toyota","vututu"=>"subaru","bos"=>"","hodzilla"=>"nissan","bos1"=>"","bos2"=>"","cek"=>"skoda");


echo "<pre>";
print_r($marka);
echo "</pre>";


$sonuc  =   array_filter($marka);


echo "<pre>";
print_r($sonuc);
echo "</pre>";



























?>


</body>
</html>	