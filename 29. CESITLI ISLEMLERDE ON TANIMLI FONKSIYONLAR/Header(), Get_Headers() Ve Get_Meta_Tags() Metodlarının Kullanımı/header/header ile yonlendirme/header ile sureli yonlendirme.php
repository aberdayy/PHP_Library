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
header()        :   belirtilecek olan icerik dahilinde istemciye islenmis HTTP ust bilgisi iletmek icin kullanilir.
get_headers()   :   belirtilecek olan URL dogrultusunda HTML istegine karsi sunucunun verdigi tum yaitlari kontrol eder ve aldigi degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
get_meta_tags() :   belirtilecek olan URL dogrultusunda HTML dosyasinda bulunan ve name degerine sahip tum meta etiketlerini kontrol eder ve aldigi degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
*/
header("Refresh:10; url=https://web.whatsapp.com");   //sayfayi belirli bir surede yenileyeceksek refresh kullanilabilir.
exit();
?>
</body>
</html>	