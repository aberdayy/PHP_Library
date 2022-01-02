<?php
// header("Refresh:5")
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
str_rot13()     :   belirtilecek olan icerigin ROT13 kodlamasi degerini bularak buldugu degeri geriye dondurur. ayrica ROT13 kodlamasi kullanilarak kodlanmis olan icerigi geri cozerek cozdugu degeri geriye dondurur.
*/
/*
$deger = "ataberk erday";
$olustur = str_rot13($deger);
echo $olustur;
-------------------------------------------*/
/*
$deger = "ngnorex reqnl";
$olustur = str_rot13($deger);
echo $olustur;
-------------------------------------------*/
/*
$deger = "ataberk erday & her zaman & ses ver adana & zirveden selam ";
$olustur = str_rot13($deger);
echo $olustur . "<br />";

$deger1 = "ngnorex reqnl & ure mnzna & frf ire nqnan & mveirqra frynz ";
$olustur1 = str_rot13($deger1);
echo $olustur1 . "<br />";
-------------------------------------------*/

$deger = "1234567890";
$olustur = str_rot13($deger);   //NUMERIC DEGERLER ROY13 ILE KODLANAMAZ!!!!!!
echo $olustur;

?>
</body>
</html>	