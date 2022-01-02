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
array_count_values()    :   dizi icerisinde bulunan elemanlarin kacar defa tekrarlandigini bulmak icin kullanilir.
*/


$isimler    =   ["ataberk","serkan","kemal","ataberk","hakan","kemal","ataberk","umit","ali","caferr"];

echo "<pre>";
print_r($isimler);
echo "</pre>";


$sonuc= array_count_values($isimler);


echo "<pre>";
print_r($sonuc);
echo "</pre>";



?>
</body>
</html>	