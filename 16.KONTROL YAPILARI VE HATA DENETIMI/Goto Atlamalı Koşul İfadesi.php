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
goto  :  kodlama dosyasi icerisinde belirtilecek olan imlenmis/hedeflenmis satira atlama kosulunu saglamak icin kullanilir.
yapisi:
goto yerimiz

yerimiz:
*/
/*
goto egitimci;
echo "onur tatlici <br />";
echo "ataberk erday <br />";
echo "okay kabulcu <br />";
echo "hakan alakent <br />";
egitimci: 
echo "esra erday <br />";
-------------------------------------
*/
/*
echo "onur tatlici <br />";
goto egitimci;
echo "ataberk erday <br />";
echo "okay kabulcu <br />";
echo "hakan alakent <br />";
egitimci: 
echo "esra erday <br />";
-----------------------------------
*/
/*
$deger   =  "egitimci";

echo "onur tatlici <br />";
goto $deger; //HATA GOTO IFADESI ICIN BELIRTILECEK OLAN HEDEF BIR DEGISKENDEN GELEMEZ!!!!!!!!!!!!
echo "ataberk erday <br />";
echo "okay kabulcu <br />";
echo "hakan alakent <br />";
egitimci: 
echo "esra erday <br />";
-----------------------------------
*/
$deger   =  2;

if($deger==1){
goto genel; 
}elseif ($deger==2) {
   goto yonetim;
}elseif ($deger==3) {
   goto egitimci;
}else {
   goto diger;
}

genel:

echo "onur tatlici <br />";
yonetim:
echo "ataberk erday <br />";

echo "okay kabulcu <br />";
egitimci:
echo "hakan alakent <br />";

echo "esra erday <br />";
if (($deger!=1)and($deger!=2)and($deger!=3) ) {
   diger:
echo "kisi yok.";
}






















?>
</body>
</html>	