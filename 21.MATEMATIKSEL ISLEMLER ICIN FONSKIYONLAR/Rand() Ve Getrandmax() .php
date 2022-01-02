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

rand()          : rastgele bir tam sayi ureterek urettigi degeri geriye dondurur.
getrandmax()    : Rand() methodu kullanilarak uretebilecek en buyuk sayinin degerini bularak buldugu degeri geriye dondurur.
*/
//aktivasyon ve uyelik islemleri

/*
$sayiuret1 = rand();
$sayiuret2 = rand();
$sayiuret3 = rand();
$sayiuret4 = rand();
$sayiuret5 = rand();
echo "php tarafindan uretilen sayi degeri : " . $sayiuret1 . "<br />";
echo "php tarafindan uretilen sayi degeri : " . $sayiuret2. "<br />";
echo "php tarafindan uretilen sayi degeri : " . $sayiuret3. "<br />";
echo "php tarafindan uretilen sayi degeri : " . $sayiuret4. "<br />";
echo "php tarafindan uretilen sayi degeri : " . $sayiuret5. "<br />";
------------------------------------------
*/
/*
$sayidegeri = getrandmax();

echo "php tarafindan uretilebilecek en buyuk sayi degeri : " . $sayidegeri . "<br />";
-------------------------------------------
*/

$sayiuret1 = rand(0, 1000);
$sayiuret2 = rand(500,750);
$sayiuret3 = rand(10,20);
$sayiuret4 = rand(1500,1800);
$sayiuret5 = rand(1000,9999);
echo "php tarafindan uretilen 0 ila 1000 arasi sayi degeri : " . $sayiuret1 . "<br />";
echo "php tarafindan uretilen 500 ila 750 arasi sayi degeri : " . $sayiuret2. "<br />";
echo "php tarafindan uretilen 10 ila 20 sayi degeri : " . $sayiuret3. "<br />";
echo "php tarafindan uretilen 1500 ila 1800 arasi sayi degeri : " . $sayiuret4. "<br />";
echo "php tarafindan uretilen 1000 ila 9999 arasi sayi degeri : " . $sayiuret5. "<br />";









?>
</body>
</html>	