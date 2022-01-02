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
getcwd()    :   gecerli calisma dizini bilgisi degerini bularak buldugu degeri geriye dondurur.
chdir()     :   belirtilecek olan dizin bilgisine gore gecerli calisma diznini degistirmek icin kullanilir.
*/

/*
$dizin = getcwd();
echo  "gecerli dizin : " . $dizin;
----------------------------------*/
/*
$dizin = getcwd();

echo  "gecerli dizin : " . $dizin."<br />";
$yenidizin = "resimler/";
chdir($yenidizin);

$suankidizin = getcwd();

echo  "suanki dizin : " . $suankidizin;
--------------------------------------*/
/*
$dizin = getcwd();

echo  "gecerli dizin : " . $dizin."<br />";

$yenidizin = "resimler/";

$degistir = chdir($yenidizin);

$suankidizin = getcwd();

echo  "degistir : " . $degistir."<br />";
echo  "suanki dizin : " . $suankidizin;

------------------------------------*/
/*
$dizin = getcwd();

echo  "gecerli dizin : " . $dizin."<br />";

$yenidizin = "..";

$degistir = chdir($yenidizin);

$suankidizin = getcwd();

echo  "degistir : " . $degistir."<br />";

echo  "suanki dizin : " . $suankidizin;
--------------------------------*/

$dizin = getcwd();

echo  "gecerli dizin : " . $dizin."<br />";

$yenidizin = "../";

$degistir = chdir($yenidizin);

$suankidizin = getcwd();

echo  "degistir : " . $degistir."<br />";

echo  "suanki dizin : " . $suankidizin;












?>
</body>
</html>	