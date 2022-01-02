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
convert_uuencode()  :   Belirtilecek olan icerigi uuencode (unic to unix encoding) algoritmasi kodlamasini bularak, buldugu degeri geriye dondurur.
convert_uudecode()  :   Belirtilecek olan icerigi uuencode(unic to unix encoding) algoritmasi kullanilarak kodlanmis olan icerigi geri cozerek cozdugu degeri geriye dondurur.
*/
/*
$deger  =   "Ataberk Erday - Extra Egitim";
echo $deger . "<br />";
$kodla  =   convert_uuencode($deger);
echo $kodla;
------------------------------------------------*/

$deger      = "ataberk erday bacinizi siksin";
 echo "normal deger : ".$deger . "<br />";
$kodla      = convert_uuencode($deger);
echo "encode edilen deger : ".$kodla . "<br />";
$coz        = convert_uudecode($kodla);
echo "decode edilen deger : ".$coz   . "<br />";



?>
</body>
</html>	
	
