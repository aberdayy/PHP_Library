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
end()   ;   dizi gostericisnin son konumundaki elemani bulmak icin kullanilir.
*/
/*
$isimler    =   array("ataberk","hakan","onur");   

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   end($isimler);

echo "dizi gostericisinin son konumundaki elemani  degeri :" . $sonuc;
-------------------------------------------------------------------
*/
/*
$isimler    =   array("a"=>"ataberk","b"=>"hakan","c"=>"onur");   

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   end($isimler);

echo "dizi gostericisinin son konumundaki elemani  degeri :" . $sonuc;
--------------------------------------------------------------
*/
/*
$isimler    =   array("ataberk","hakan","onur",array("hale","sule"));   

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   end($isimler);

echo "dizi gostericisinin son konumundaki elemani  degeri :" ;

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------------------
*/

$isimler    =   array("ataberk","hakan",array("hale","sule"),"onur");   

echo "<pre>";
print_r($isimler);
echo "</pre><br />";

$sonuc  =   end($isimler[2]);

echo "dizi gostericisinin son konumundaki elemani  degeri :" ;

echo "<pre>";
print_r($sonuc);
echo "</pre>";













?>


</body>
</html>	