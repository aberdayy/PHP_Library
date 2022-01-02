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
sha1()      :   belirtilecek olan icerigin sha1 ozetini hesaplayip bularak buldugu degeri geriye dondurur.
sha1_file() :   belirtilecek olan dosyanin sha1 ozetini hesaplayip bularak buldugu degeri geriye dondurur.
*/
/*
$sifre      = "123456";
$olustur    = sha1($sifre);  //32 bit veri dondurur.
echo $olustur;
--------------------------------------*/
$dosya      = "index.php";
$olustur    = sha1_file($dosya);  // dosya icerigi degistigi zaman ozet degisir.
echo $olustur;











?>
</body>
</html>	