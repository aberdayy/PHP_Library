<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>ataberk erday php calisma gunlugu</title>
</head>
<body>
<?php
/*
zend_version()      :   kullanilmakta olan serverda calismakta olan zend motorunun surum numarasi degerini bularak buldugu degeri geriye dondurur.
phpversion()        :   kullanilmakta olan serverda calismakta olan php sisteminin surum numarasi degerini bularak buldugu degeri geriye dondurur.
sys_get_temp_dir()  :   kullanilmakta olan serverda calismakta olan php sisteminde kullanilan temp yani gecici dizinin path degerini bularakm buldugu degeri geriye dondurur.
*/
/*
echo "serverin calismakta olan zend motoru surumu : " . zend_version();
----------------------------------------------------------------------------*/
/*
echo "serverin calismakta olan php sistemi surumu : " . phpversion();
----------------------------------------------------------------------------*/
echo "serverda calismakta olan php sisteminde kullanilan temp dosyasi pathi : " . sys_get_temp_dir();



?>
</body>
</html>	