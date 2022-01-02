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
list()      :   dizi icerisineki eleman/ elemanlari degiskenlere atamak icin kullanilir.
*/
/*
$renkler    =   array("siyah" , "beyaz" ,"mavi" , "kirmizi", "yesil");



echo "<pre>";
print_r($renkler);
echo "</pre><br />";


list($bir, $iki, $uc, $dort, $bes)  =   $renkler;

echo $bir ."<br />";
echo $iki ."<br />";
echo $uc ."<br />";
echo $dort ."<br />";
echo $bes ."<br />";
----------------------------------------------------------
*/
/*
$renkler    =   array("siyah" , "beyaz" ,"mavi" , "kirmizi", "yesil");



echo "<pre>";
print_r($renkler);
echo "</pre><br />";


list($bir, , $iki, , $uc)  =   $renkler; //bos gecmek istedigimizde , , ifadesi kullaniir.

echo $bir ."<br />";
echo $iki ."<br />";
echo $uc ."<br />";
----------------------------------------------------------
*/
/*
$renkler    =   array("siyah" , "beyaz" ,array("mavi" , "kirmizi"), "yesil");



echo "<pre>";
print_r($renkler);
echo "</pre><br />";


list($a1, $a2, list($b1,$b2), $a3)  =   $renkler;

echo $a1 ."<br />";
echo $a2 ."<br />";
echo $b1 ."<br />";
echo $b2 ."<br />";
echo $a3 ."<br />";
----------------------------------------------------------
*/

$renkler    =   array("siyah" , "beyaz" ,array("mavi" , "kirmizi",array("ataberk","volkan", "hakan")), "yesil");



echo "<pre>";
print_r($renkler);
echo "</pre><br />";


list($a1, $a2, list($b1,$b2, list($c1,$c2,$c3)), $a3)  =   $renkler;

echo $a1 ."<br />";
echo $a2 ."<br />";
echo $b1 ."<br />";
echo $b2 ."<br />";
echo $c1 ."<br />";
echo $c2 ."<br />";
echo $c3 ."<br />";
echo $a3 ."<br />";



















?>


</body>
</html>	