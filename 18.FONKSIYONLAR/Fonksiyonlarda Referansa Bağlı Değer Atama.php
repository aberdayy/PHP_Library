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

$bir = "volkan alakent";


function testfonksiyonu($bir){

    $bir = "merhaba benim adim " . $bir;
    echo $bir . "<br />";
}


testfonksiyonu($bir);

echo $bir . "<br /><br /><br /><br /><br />";

$iki = "hakan alakent"; //merhaba benim adim hakan alakent & bu isaret sayesinde


function demofonksiyonu(&$iki){

    $iki = "merhaba benim adim " . $iki . " bakin burasi referans aldi";
    echo $iki . "<br />";
}


demofonksiyonu($iki);

echo $iki;








?>
</body>
</html>	