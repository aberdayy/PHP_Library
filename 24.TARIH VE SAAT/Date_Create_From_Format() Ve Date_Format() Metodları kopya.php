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
date_create_form_format()   :    belirtilecek olan formata gore bicimlendirilmis tarih degerlerine gore yeni bir tarih nesnesi dizisi olusturarak olsuturdugu dizi degerini geriye dondurur.
date_format()               :   olusturulmus olan yeni bir tarih nesnesini belirtilecek olan bir formata gore bicimlendirerek bicimlendirdigi degeri geriye dondurur.
*/
/*
$zaman		=	date_create_from_format("d-m-Y", "08-12-1980"); // 1. Parametre : Sabitler, 2. Parametre : Tarih (Gün-Ay-Yıl)
	
echo "<pre>";
print_r($zaman);	
echo "</pre>";	
----------------------------------------
*/    
/*
$zaman		=	date_create_from_format("Y-d-m", "1980-08-12"); //soldaki dizilim ile sagdaki ayni olmali 
    
echo "<pre>";
print_r($zaman);	
echo "</pre>";
-------------------------
*/
/*
$zaman		    =	date_create("1980-08-12"); 
$formalta       = date_format($zaman, "d.m.Y H:i:s");
echo "yeni tarih zaman nesnesi dizisinin orjinal hali";    
echo "<pre>";
print_r($zaman);	
echo "</pre>";
echo "<br /><br /><br />";






echo "<pre>";
print_r($formalta);	
echo "</pre>";
echo "<br /><br /><br />";

------------------------------*/

$zaman		    =	date_create("1980-08-12"); 

date_time_set($zaman,20,30,15);

$formalta       = date_format($zaman, "d.m.Y H:i:s");

echo "yeni tarih zaman nesnesi dizisinin orjinal hali";    
echo "<pre>";
print_r($zaman);	
echo "</pre>";
echo "<br /><br /><br />";

echo "<pre>";
print_r($formalta);	
echo "</pre>";
echo "<br /><br /><br />";






?>
</body>
</html>	