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
set_time_limit()    :   calismakta olan PHP dosyasina belirtilecek olan parametre dogrultusunda maksimum calisma suresi degeri atamak icin kullanilir.
*/
/*
echo "varsayilan max_execution_time yonergesi degeri : " . ini_get("max_execution_time") . " saniye. <br />";  

set_time_limit(86400); //1 gun.

echo "atanan max_execution_time yonergesi degeri : " . ini_get("max_execution_time") . " saniye. <br />";  
--------------------------------------------------------------------------------------------------*/
/*
echo "varsayilan max_execution_time yonergesi degeri : " . ini_get("max_execution_time") . " saniye. <br /> <br />";  
set_time_limit(2); 
echo "atanan max_execution_time yonergesi degeri : " . ini_get("max_execution_time") . " saniye. <br /> <br />";  
$sayi = 1;
while ($sayi<=1000000000000) {
    echo $sayi . " ";
   $sayi++;
}

echo "<br /> B U  R A D A    B I T T I ";
--------------------------------------------------------------------------------------------------*/
echo "varsayilan max_execution_time yonergesi degeri : " . ini_get("max_execution_time") . " saniye. <br /> <br />";  
set_time_limit(5); 
echo "atanan max_execution_time yonergesi degeri : " . ini_get("max_execution_time") . " saniye. <br /> <br />";  
$sayi = 1;
while ($sayi<=5) {
    sleep(2);
    echo $sayi . " ";
   $sayi++;
}

echo "<br /> B U  R A D A    B I T T I ";

?>
</body>
</html>	