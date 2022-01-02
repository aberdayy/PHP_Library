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
error_reporting() :  hata raporlama islemleri dahilinde bulunan tum hata seviyelerinin ayarlama islemleri icin kullanilir.
hata seviyeleri   :  
E_ALL             : tum seviye hatalari(diger yazim sekli-1)
E_ERROR (fatal)   : onemli calisma zamani hatalari.
E_WARNING         : onemli olmayan calisma zamani hatalari
E_PARSE           : derleme zamani ayristirma hatalari
E_NOTICE          : calisma zamani bildirimleri
0                 : seviye hatalari kapatmasi
*/

//  FATAL ERROR CALISIR     deneme();

/*
error_reporting(0);
HIC BIR ERROR CALISMAZ
deneme();
--------------------------------
*/
//error_reporting(E_ALL ^ E_WARNING); yazdiktan sonra warning hatalari yazmaz.
//    PHP Warning: calisir         trim();


//error_reporting(E_PARSE); sadece parse hatalari gozukur
//PHP Parse error : calisir  $ deneme  =  "ataberk erday";

//error_reporting(E_ALL ^ E_NOTICE); yazdiktan sonra notice hatalari yazmaz.
//PHP Notice: hatasi calsiir  echo $deehr;

error_reporting(E_ALL ^ E_NOTICE);
echo $deger . "<br />";
echo "ataberk erday"."<br />";


?>
</body>
</html>	