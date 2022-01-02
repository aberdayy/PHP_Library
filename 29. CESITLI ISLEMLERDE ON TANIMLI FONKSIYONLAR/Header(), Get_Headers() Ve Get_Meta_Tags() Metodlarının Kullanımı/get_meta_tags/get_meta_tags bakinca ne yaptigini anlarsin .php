<?php 
header("Refresh:3")
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
header()        :   belirtilecek olan icerik dahilinde istemciye islenmis HTTP ust bilgisi iletmek icin kullanilir.
get_headers()   :   belirtilecek olan URL dogrultusunda HTML istegine karsi sunucunun verdigi tum yaitlari kontrol eder ve aldigi degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
get_meta_tags() :   belirtilecek olan URL dogrultusunda HTML dosyasinda bulunan ve name degerine sahip tum meta etiketlerini kontrol eder ve aldigi degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
*/ 
/*
$adres = "https://www.hepsiburada.com";
$sonuc = get_meta_tags($adres);

echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------*/
//bu sekildeki bir bot arama motorui mantugunda calisir buradan gelen bilgiler excel veya word uzerinde yazdirilip kendi arama moturmuz olusturula bilir.
$adres = "https://www.mynet.com";
$sonuc = get_meta_tags($adres);
echo "mynetin bilgileri : <br />";
echo "description bilgisi : " . $sonuc["description"] . "<br />";
echo "keywords bilgisi : " . $sonuc["keywords"] . "<br />";
?>
</body>
</html>	