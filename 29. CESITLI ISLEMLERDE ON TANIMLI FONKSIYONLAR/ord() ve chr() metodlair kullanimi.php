<?php 
 header("Refresh:2")
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
ord()   :   Belirtilecek olan standart bir karakter degerinin ASCII (American Standart Code For Information Interchange) (Bilgi değişimi için amerikan standart kodlama sistemi) karsiligini bulark buldugu degeri heriye dondurur.
chr()   :   Belirtilecek olan ASCII degerinin standart karakter karsiligini bularak, buldugu degeri geriye dondurur.
*/
/*
$karakter       =   "A";
$karsilik       =   ord($karakter);

echo $karakter . " : " . $karsilik;
*/

$karsilik   =   "65";
$karakter   =   chr($karsilik);

echo $karsilik . " : " . $karakter;





    ?>
</body>
</html>	
	
	