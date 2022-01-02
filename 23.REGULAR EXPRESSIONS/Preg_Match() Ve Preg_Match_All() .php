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
preg_match()        :   kendisine parametre olarak verilen duzenli ifadeyi deger dogrultusunda icerigi kontrol eder
 ve aranan degerin eslesmesi durumunda eslesmeyi saglayan icerigin degerinden yeni bir dizi olsuturarak
  olusturdugu dizi degerini geriye dodnurur.

preg_match_all()    :   kendisine parametre olarak verilen duzenli ifadeyi deger dogrultusunda icerigi kontrol eder
 ve aranan degerin eslesmesi durumunda eslesmeyi saglayan icerigin degerinden veya degerleriden yeni bir dizi olsuturarak
  olusturdugu dizi degerini geriye dodnurur.
*/

/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;
$desen = "/ataberk/";

preg_match($desen, $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------------
*/
/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;
$desen = "/ataberk/";

preg_match_all($desen, $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
------------------------------------
*/
/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;

preg_match_all("/ataberk/", $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------
*/
/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;

preg_match("/ataberk/", $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------------------
*/

/*
preg_match("/ataberk/", "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." , $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
----------------------------
*/
/*
preg_match_all("/ataberk/", "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." , $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------
*/
/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;
$desen = "/ataberk/";

preg_match($desen, $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

if ($sonuc) {
   echo "aranan eslesme icerik dahlinde var.";
}else {
    echo "aranan eslesme icerik dahilinde yok.";
}
-------------------------------
*/
/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;
$desen = "/haklan/";

preg_match_all($desen, $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";

if ($sonuc) {
   echo "aranan eslesme icerik dahlinde var .";
}else{
    echo "aranan eslesme icerik dahilinde yok.";
}
-------------------------------
*/
/*
$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;
$desen = "/\w/";

preg_match($desen, $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";
--------------------------------
*/

$metin = "merhaba benim adim ataberk erday, ben bir front end developerim. beni instagram uzerinden ataberk erday seklinde arayarak bulabilirsiniz." ;
$desen = "/\w/";

preg_match_all($desen, $metin, $sonuc); //ilk parametre desen olmak zorunda ikinci parametre desenin aranacagi degisken olacak ve son parametre ise desen eslesirse depolanacgi dize olacak.

echo "<pre>";
print_r($sonuc);
echo "</pre>";











?>


</body>
</html>	