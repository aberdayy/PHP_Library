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
file()      :   belirtilecek olan dosya veya url icerigini kontrol ederek ve bilgileri satir satir bularak buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
readfile()  :   belirtilecek olan dosya veya url icerigini kontrol ederek ve bilgileri tek bir defada bularak buldugu degeri geriye dondurur. ayrica dosyalara download veya transfer ozelligi atamak icin kullanilir.
*/
/*
$icerik     = "belge2.txt";
$icerikoku  = file($icerik);

echo "<pre>";
print_r($icerikoku);
echo "</pre>";
----------------------------*/
/*
$icerik     = "belge2.txt";
$icerikoku  = file($icerik);
foreach ($icerikoku as $anahtar => $eleman) {
    echo "anahtar : " . $anahtar . " icerik : " . $eleman . "<br />";
}
------------------------------*/
/*
$icerikoku  = file("https://www.hepsiburada.com");

echo "<pre>";
print_r($icerikoku);
echo "</pre>";
--------------------------*/
/*
$icerik     = "https://www.hepsiburada.com";
$icerikoku  = file($icerik);
echo "<pre>";
foreach ($icerikoku as $anahtar => $eleman) {
    echo  htmlspecialchars($eleman) . "<br />";
}
echo "</pre>";
-----------------------------------*/
/*
$icerik     = "belge2.txt";
$icerikoku  = readfile($icerik);
echo $icerikoku;
-------------------------------*/
/*
$icerik     = "https://www.hepsiburada.com";
$icerikoku  = readfile($icerik);
echo $icerikoku;
-----------------------------------*/
/*
$icerik     = "https://www.hepsiburada.com";
$icerikoku  = readfile($icerik);
echo htmlspecialchars($icerikoku);

-----------------------------------*/

/*
$dosya     = "belge2.txt";

header("content-description: file transfer");
header("content-type: application/octet-stream");
header("content-disposition: attachment; filename=".basename($dosya));
header("content-transfer-encoding binary");
header("expires:0");
header("cache-control: must-revalidate, post-check=0, pre-check=0");
header("pragma: public");
header("content-length: ".filesize($dosya));
ob_clean();
flush();
readfile($dosya);
-------------------------*/
/*
$dosya     = "nah.png";

header("content-description: file transfer");
header("content-type: application/octet-stream");
header("content-disposition: attachment; filename=".basename($dosya));
header("content-transfer-encoding binary");
header("expires:0");
header("cache-control: must-revalidate, post-check=0, pre-check=0");
header("pragma: public");
header("content-length: ".filesize($dosya));
ob_clean();
flush();
readfile($dosya);
--------------------------------*/





?>
</body>
</html>	