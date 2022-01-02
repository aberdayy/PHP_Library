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
curl_version()      :   kullanilmakta olan serverda yani sunucuda calismakta olan libcurl kutuphanesinin tum bilgilerini bulur ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
*/

$degerler = curl_version();
echo "<pre>";
print_r($degerler);
echo "</pre>";






?>
</body>
</html>	