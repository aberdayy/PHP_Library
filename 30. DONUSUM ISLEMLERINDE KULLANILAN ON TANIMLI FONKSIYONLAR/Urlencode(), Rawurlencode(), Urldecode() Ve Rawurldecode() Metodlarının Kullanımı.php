<?php 
 header("Refresh:20")
?>
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
urlencode()     :   Belirtilecek olan icerigin URL encoding (Nizami kaynak bulucu kodlamasi) karakter kodlamasini bularak, buldugu degeri geriye dondurur.
urldecode()     :   Belirtilecek olan ve URL encoding (nizami kaynak bulucu kodlamasi) karakter kodlamasi kullanilarak kodlanmis olan icerigi geri cozerek, cozuldugu degeri geriye dondurur.
rawurlencode()  :   Belirtilecek olan icerigin URL encoding karakter kodlamasini bularak buldugu degeri geriye dondurur.
rawurldecode()  :   Belirtilecek olan ve URL encoding karakter kodlamasi kullanilarak kodlanmis olan icerigi geri cozerek, cozdugu degeri geriye dondurur.
*/
/*
$degerbir    =   "https://www.extraegitim.com/anasayfa.php";
$degeriki    =   "https://www.extraegitim.com/ana sayfa.php";
$degeruc     =   "https://www.extraegitim.com/anasayfa.php?ID=144&kimlikbilgisi=ataberkerday";
$degerdort   =   "https://www.extraegitim.com/anasayfa.php?ID=144&kimlikbilgisi=ataberk erday";

$islembir    =  urlencode($degerbir);
$islemiki    =  urlencode($degeriki);
$islemuc     =  urlencode($degeruc);
$islemdort   =  urlencode($degerdort);


echo $degerbir  . "<br />";
echo $islembir  . "<br />"; 

echo $degeriki  . "<br />";
echo $islemiki  . "<br />";

echo $degeruc   . "<br />";
echo $islemuc   . "<br />";

echo $degerdort . "<br />";
echo $islemdort . "<br />";
---------------------------------------------------------------------------------------*/
/*
$degerbir    =   "https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php";
$degeriki    =   "https%3A%2F%2Fwww.extraegitim.com%2Fana+sayfa.php";
$degeruc     =   "https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php%3FID%3D144%26kimlikbilgisi%3Databerkerday";
$degerdort   =   "https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php%3FID%3D144%26kimlikbilgisi%3Databerk+erday";

$islembir    =  urldecode($degerbir);
$islemiki    =  urldecode($degeriki);
$islemuc     =  urldecode($degeruc);
$islemdort   =  urldecode($degerdort);


echo $degerbir  . "<br />";
echo $islembir  . "<br /><br /><br /><br />"; 

echo $degeriki  . "<br />";
echo $islemiki  . "<br /><br /><br /><br />";

echo $degeruc   . "<br />";
echo $islemuc   . "<br /><br /><br /><br />";

echo $degerdort . "<br />";
echo $islemdort . "<br /><br /><br /><br />";
---------------------------------------------------------------------------------------*/
/*
$degerbir    =   "https://www.extraegitim.com/anasayfa.php";
$degeriki    =   "https://www.extraegitim.com/ana sayfa.php";
$degeruc     =   "https://www.extraegitim.com/anasayfa.php?ID=144&kimlikbilgisi=ataberkerday";
$degerdort   =   "https://www.extraegitim.com/anasayfa.php?ID=144&kimlikbilgisi=ataberk erday";

$islembir    =  rawurlencode($degerbir);
$islemiki    =  rawurlencode($degeriki);
$islemuc     =  rawurlencode($degeruc);
$islemdort   =  rawurlencode($degerdort);


echo $degerbir  . "<br />";
echo $islembir  . "<br /><br /><br /><br />"; 

echo $degeriki  . "<br />";
echo $islemiki  . "<br /><br /><br /><br />";

echo $degeruc   . "<br />";
echo $islemuc   . "<br /><br /><br /><br />";

echo $degerdort . "<br />";
echo $islemdort . "<br /><br /><br /><br />";
---------------------------------------------------------------------------------------*/
/*
$degerbir    =   "https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php";
$degeriki    =   "https%3A%2F%2Fwww.extraegitim.com%2Fana%20sayfa.php";
$degeruc     =   "https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php%3FID%3D144%26kimlikbilgisi%3Databerkerday";
$degerdort   =   "https%3A%2F%2Fwww.extraegitim.com%2Fanasayfa.php%3FID%3D144%26kimlikbilgisi%3Databerk%20erday";

$islembir    =  rawurldecode($degerbir);
$islemiki    =  rawurldecode($degeriki);
$islemuc     =  rawurldecode($degeruc);
$islemdort   =  rawurldecode($degerdort);


echo $degerbir  . "<br />";
echo $islembir  . "<br /><br /><br /><br />"; 

echo $degeriki  . "<br />";
echo $islemiki  . "<br /><br /><br /><br />";

echo $degeruc   . "<br />";
echo $islemuc   . "<br /><br /><br /><br />";

echo $degerdort . "<br />";
echo $islemdort . "<br /><br /><br /><br />";
---------------------------------------------------------------------------------------*/
$deger      =   "https://www.extraegitim.com/anasayfa.php?ID=144&KimlikBilgisi=Volkan Alakent";
$Kodla		=	rawurlencode($deger);
$coz        =   urldecode($Kodla);

echo "gelen deger : ".$deger . "<br /><br /><br />";
echo "kodlanan deger : ".$Kodla . "<br /><br /><br />";
echo "cozumlenen deger : ". $coz . "<br /><br /><br />";

?>
</body>
</html>	
	
