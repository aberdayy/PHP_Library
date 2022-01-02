<?php
// header("Refresh:5")
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
curl_getinfo()     :   Kendisine parametre olarak verilen deger dogrultusunda baslatilmis olan bir curl oturumunun tum baglanti bilgilerini bulur ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
curl_error()       :   Kendisine parametre olarak verilen deger dogrultusunda baslatilmis olan bir curl oturumunun olasi bir hata ile karsilasmasi durumunda hata degerini bularak buldugu hata degerini geriye dondurur.
*/
/*
$ch = curl_init("https://extraakademi.com");
curl_exec($ch);
$bilgiler = curl_getinfo($ch);

echo "<pre>";
print_r($bilgiler);
echo "</pre>";
curl_close($ch);
---------------------------------------------------*/
/*
$ch = curl_init("https://extraakademi.com");
curl_exec($ch);

$bilgiler = curl_getinfo($ch);

curl_close($ch);

echo "<pre>";
print_r($bilgiler);
echo "</pre>";
---------------------------------------------------*/
/*
$ch = curl_init("https://extraakademi.com");
curl_exec($ch);
$hata = curl_error($ch);
echo $hata;
curl_close($ch);
---------------------------------------------------*/

$ch = curl_init("https://extrasikimseniorospiococuuuu.com");
curl_exec($ch);
$hata = curl_error($ch);
echo $hata;
curl_close($ch);




?>
</body>
</html>	