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
date_timestand_get()    :  olusturulmus olan yeni bir tarih nesnesinin, unix zaman damgasi degerini bularak buldugu degeri geriye dondurur.
date_timestand_set()    :   olusturulmus olan yeni bir tarih nesnesinin, belirtilecek olan unix zaman damgasi degerini atar ve yeni bir dizi olsuturarak  olsuturdugu dizi degerini geriye dondurur.
*/
/*
$zaman         = date_create(1980-11-8);//yil-ay-gun bos olursa guncel zaman
$zamandamgasi  =  date_timestamp_get($zaman);

echo "olusturulmus olan zamannin unix zaman damgasi degeri : " . $zamandamgasi;
------------------------------
*/
$zaman = date_create();//yil ay gun

date_timestamp_set($zaman,261352518);

echo "<pre>";
print_r($zaman);
echo "</pre>";

?>
</body>
</html>	