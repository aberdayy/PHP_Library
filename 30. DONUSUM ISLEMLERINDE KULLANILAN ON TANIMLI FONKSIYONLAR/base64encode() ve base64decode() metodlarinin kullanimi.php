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
base64_encode()     :   Belirtilecek olan icerigin base64 (8'bitlik verilerin 64'bitlik verilere cevrilmesi) algoritmasi kodlamasini bularak, buldugu degeri geriye dondurur.
base64_decode()     :   Belirtilecek olan ve base64 (8'bitlik verilerin 64'bitlik verilere cevrilmesi) algoritmasi kullanilarak kodlanmis olan icerigi geri cozerek, cozdugu degeri geiye dondurur.
*/
/*
$icerik     = "extra egitim - ataberk erday";
echo $icerik . "<br />";

$donustur   =   base64_encode($icerik);
echo $donustur;
-----------------------------------------------------*/
/*
$icerik     = "ZXh0cmEgZWdpdGltIC0gYXRhYmVyayBlcmRheQ==";
echo $icerik . "<br />";

$donustur   =   base64_decode($icerik);
echo $donustur;
-----------------------------------------------------*/
$icerik     = "extra egitim - ataberk erday";
echo "islem yapilmamis icerik degeri : "."<br />".$icerik . "<br /><br />";
$islemyap   = base64_encode($icerik);
echo "base 64 encode edilmis metin : "."<br />".$islemyap . "<br /> <br />";  
$cozumle    = base64_decode($islemyap);
echo "base64 ile encode edilmis icerigin base64 decode edilmis son hali : "."<br />" . $cozumle;








?>
</body>
</html>	
	
