<?php 
session_start(); ob_start(); // cikti tamponlamasi baslatildi. ||---------|| Session ve ob start baslatildi kesinlikle her sayfada olmasi gerekir
?>
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
ob_start()          :   PHP sayfasi dahilinde cikti tamponlamsini baslatir.
ob_end_clean()      :   PHP sayfasi dahilinde baslatilmis olan ve veri depolayan cikti tamponlamasini siler ve cikti tamponlamasini kapatir.
ob_end_flush()      :   PHP sayfasi dahilinde baslatilmis olan ve veri depolayan cikti tamponlamasini bosaltir ve cikti tamponlamasini kapatir.
ob_get_contents()   :   PHP sayfasi dahilinde baslatilmis olan ve veri depolayan cikti tamponlamasi icerigini bularak buldugu degeri geriye dondurur.
*/
/*
echo "extra egitim <br />";

$depobir    =   ob_get_contents();

echo "ataberk erday <br /><br />";

$depoiki    = ob_get_contents();

ob_end_clean();     //cikti tamponu bosaltildigi icin sayfadaki tum kodlar cikti tamponuna alinir ama ob_end_clean ile hemen silinir . dolayisiyla cikti tamponu silindigi icin sadece tarayiciya ob_get_contents ile alinan deger gidebilir

echo $depoiki;  
---------------------------------------------------------------------------*/

?>
</body>
</html>	
<?php 
ob_end_flush(); //cikti tamponlamasi silindi ve kapatildi!! |||-------|-------||| ob_end_clean da kullanilabilir
?>