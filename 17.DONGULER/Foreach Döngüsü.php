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
foreach  :  diziler icin dongu islemi baslatir.
yapisi;
foreach(dizi degiskeni as anahtar atanacak degisken => eleman atanacak degisken){
kod bloklari
}
---------------------------------------------
*/
/*
$renkler =  ["kirmizi","mavi","sari","siyah","gri","bordo"];

foreach ($renkler as $icerikdegeri ) {
echo  $icerikdegeri ." <br />";
}
--------------------------------------
*/
/*
$renkler =  ["kirmizi","mavi","sari","siyah","gri","bordo"];

foreach ($renkler as $anahtardegeri => $icerikdegeri ) {
echo "anahtar degeri : <b>" . $anahtardegeri . "</b> icerik degeri : <b>" . $icerikdegeri ."</b> <br />";
}
-------------------------------------------
*/
/*
$renkler =  ["FB"=>"sari-lacivert","GS"=>"sari-kirmizi","BJK"=>"siyah-beyaz","TS"=>"bordo-mavi"];

foreach ($renkler as $deger) {
   echo $deger . "<br />";
}
--------------------------------------------
*/
/*
$renkler =  ["FB"=>"sari-lacivert","GS"=>"sari-kirmizi","BJK"=>"siyah-beyaz","TS"=>"bordo-mavi"];

foreach ($renkler as $anahtar => $icerik) {
   echo  $anahtar . " : ". $icerik . "<br />";
}
------------------------------------
*/
$renkler =  [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

foreach ($renkler as $deger) {
   echo $deger . "<br />";
}












?>
</body>
</html>	