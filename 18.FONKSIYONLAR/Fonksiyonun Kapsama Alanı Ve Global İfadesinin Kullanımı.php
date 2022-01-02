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
$isim   =   "ataberk erday";

function yaz(){
global $isim;
    echo $isim;

}
yaz();
-----------------------------------
*/
/*
$isim       =   "ataberk";
$soyisim    =   " erday";

function yaz(){
    global $isim;
    global $soyisim;
    echo $isim . $soyisim;
}
    yaz();
-------------------------------
*/

define("ISIM", "ataberk erday");
function yaz(){

    echo ISIM;

}
yaz();












?>
</body>
</html>	