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
explode()   ;   duz bir metni belirtilecek olan ayraca gore parcalayarak yeni bir dizi olusturmak icin kulllanilir.
*/
/*
$deger  =   "ataberk errday erart guzel sanatlar";

$sonuc  =   explode(" ", $deger); //bosluklardan parcalama yapar.

echo "metnin ilk hali :". $deger ."<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------------------
*/
/*
$deger  =   "fenerbahce,galatasaray,besiktas,trabzonspor,basaksehir,kasimpasaspor,bursaspor";

$sonuc  =   explode(",", $deger); 
 
echo "metnin ilk hali :". $deger ."<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";
----------------------------------------------------------
*/

/*
$deger  =   "fenerbahce,galatasaray,besiktas,trabzonspor,basaksehir,kasimpasaspor,bursaspor";

$sonuc  =   explode(",", $deger, 3); //sonda verdigimiz sayi kactane elemana bolecegimizi belirtir 
 
echo "metnin ilk hali :". $deger ."<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";
----------------------------------------------------------
*/
$deger  =   "fenerbahce,galatasaray,besiktas,trabzonspor,basaksehir,kasimpasaspor,bursaspor";

$sonuc  =   explode(",", $deger, -1); //- (eksi) li ifade son degeri yok eder. 
 
echo "metnin ilk hali :". $deger ."<br />"; 

echo "<pre>";
print_r($sonuc);
echo "</pre>";

























?>


</body>
</html>	