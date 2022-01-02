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
array_search()          :   dizi icerisinde bulunan eleman veya elemanlar dahilinde belirtilecek olan elemani aramak ve ilgili elemanin anahtarini bulmak icin kullanilir.
array_key_exists()      :   dizi icerisnde bulunan anahtar veya anahtarlar dahilinde, belirtilecek olan anahtarin olup olmadigini kontrol etmek icin kullannilir.
in_array()              :   dizi icerisnde bulunan eleman veya elemanlar dahilinde, belirtilecek olan elemanin olup olmadigini kontrol etmek icin kullannilir.
*/
/*
$degerler   =   array("a1"=>"ataberk","a2"=>"volkan","a3"=>"kenan","a4"=>"karun","a5"=>"kamil");


echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   array_search("volkan", $degerler);

echo "aranilan elemanin anahtar dgeri :" .$sonuc ;
---------------------------------------------------------
*/
/*
$degerler   =   array("a1"=>5,"a2"=>"5","a3"=>"10","a4"=>10);


echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   array_search("5", $degerler, true);

echo "aranilan elemanin anahtar dgeri :" .$sonuc ;

*/
/*
$degerler   =   array("a1"=>"ataberk","a2"=>"volkan","a3"=>"kenan","a4"=>"karun","a5"=>"kamil");


echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   array_key_exists("a2", $degerler);

echo "sonuc :" .$sonuc ;
*/

$degerler   =   array("a1"=>"ataberk","a2"=>"volkan","a3"=>"kenan","a4"=>"karun","a5"=>"kamil");


echo "<pre>";
print_r($degerler);
echo "</pre>";

$sonuc  =   in_array("ataberk", $degerler);

echo "sonuc :" .$sonuc ;








?>
</body>
</html>	