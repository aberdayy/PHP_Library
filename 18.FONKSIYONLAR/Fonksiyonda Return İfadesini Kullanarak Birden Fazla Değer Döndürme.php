<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>baslik</title>
</head>
<body>
<!-- RETURN IFADESI SADEECE 1 DEFA KULLANILABILIR --> 
<?php 
/*
function islem(){
    $isim       =  "ataberk";
    $soyisim    =   "erday";
    $sehir      =   "istanbul";
    $yas        =   18;
    $meslek     =   "front end web devoloper";

    return [$isim,$soyisim,$sehir,$yas,$meslek];
}
$sonuc  = islem();

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "isim : " .$sonuc[0] . "<br />";

echo "soyisim : " .$sonuc[1] . "<br />";

echo "sehir : " .$sonuc[2] . "<br />";

echo "yas : " .$sonuc[3] . "<br />";

echo "meslek : " .$sonuc[4] . "<br />";
------------------------------------------------
*/


$islem = function (){
    $isim       =  "ataberk";
    $soyisim    =   "erday";
    $sehir      =   "istanbul";
    $yas        =   18;
    $meslek     =   "front end web devoloper";

    return [$isim,$soyisim,$sehir,$yas,$meslek];
};
$sonuc  = $islem();

echo "<pre>";
print_r($sonuc);
echo "</pre>";

echo "isim : " .$sonuc[0] . "<br />";

echo "soyisim : " .$sonuc[1] . "<br />";

echo "sehir : " .$sonuc[2] . "<br />";

echo "yas : " .$sonuc[3] . "<br />";

echo "meslek : " .$sonuc[4] . "<br />";









?>
</body>
</html>	