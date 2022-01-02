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
spl_autoload_register()     :   dokuman icerisinde belirtilecek olan sinifin bulunmamasi durumunda belirtilecek olan parametreye gore bir sinif dokumanini otomatik olarak belgeye dahil etmek yuklemek icin kullanilir.
*/
function otomatikcalistir($deger){
    $dosyaadi = $deger . ".php";
    require_once($dosyaadi);
}

spl_autoload_register("otomatikcalistir"); //iism istediogimiz sekilde olabilir

$kim = new sinif;
echo $kim->bilgiler();


//coklu kullanimda da herbiri icin tek tek ayri ayri yapilmasi gerekir







?>
</body>
</html>	