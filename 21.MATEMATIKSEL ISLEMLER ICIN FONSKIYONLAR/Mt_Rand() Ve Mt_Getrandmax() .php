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
mt_rand()       : mersenne twister algoritmasi kullanilarak rastegele bir tam sayi ureterek urettigi sayiyi geriye dondurur.
mt_getrandmax() : mt_rand() metodu ile uretilebielcek olan en buyuk sayi degrini bularak buldugu bdegeri geriye dondurur.
*/
//genellikle aktivasyon dogrulama islemlerinde kullanilir.
/*
$sayiuret1      =   mt_rand();
$sayiuret2      =   mt_rand();
echo "php tarafindan mersenne twister degri kullanilarak  uretilen rastegle sayidegeri : " .$sayiuret1 . "<br />"; 

echo "php tarafindan mersenne twister degri kullanilarak uretilen rastegle sayidegeri : " .$sayiuret2 . "<br />"; 
------------------------------------
*/
/*
$sayidegeri      =   mt_getrandmax();
echo "php tarafindan mersenne twister degri kullanilarak  uretilebilecek  rastegle en buyuk sayidegeri : " .$sayidegeri . "<br />"; 
------------------------------------------
*/
$sayiuret1      =   mt_rand(10,2100);
$sayiuret2      =   mt_rand(1000,9000);
echo "php tarafindan mersenne twister degri kullanilarak 10 ila 2100 arasi uretilen rastegle sayidegeri : " .$sayiuret1 . "<br />"; 

echo "php tarafindan mersenne twister degri kullanilarak 1000 ila 9000 arasi uretilen rastegle sayidegeri : " .$sayiuret2 . "<br />"; 



?>
</body>
</html>	