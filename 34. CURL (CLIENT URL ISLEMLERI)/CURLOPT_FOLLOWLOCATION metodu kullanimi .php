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
CURLOPT_FOLLOWLOCATION      :   Baslatilmis bir Curl oturumunda istenilen URL adresine ait server yani sunucu HTTP basliginin bir parcasi olarak gonderdigi location basligini izleyebilmek icin kullanilir.
*/
/*
$ch     =   curl_init();
curl_setopt($ch,CURLOPT_URL, "https://extraakademi.com/index.php" );
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true); // YONLENDIRME VARSA TAKIP ET ANLAMI TASIR!!! SONUNA KADAR GIDER
$sonuc = curl_exec($ch);
curl_close($ch);
echo $sonuc;
-----------------------------------------------------------*/

$ch     =   curl_init();
$diziler    =   array(
    CURLOPT_URL => "https://extraakademi.com/index.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true 
);
curl_setopt_array($ch, $diziler);
$sonuc = curl_exec($ch);
curl_close($ch);
echo $sonuc;






?>
</body>
</html>	