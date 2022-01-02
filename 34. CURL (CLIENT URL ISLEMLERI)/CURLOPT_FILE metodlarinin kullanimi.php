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
CURLOPT_FILE        :   Baslatilmis olan bir CURL oturumunda istenilen URL adresinden elde edilen icerigin aktarilacagi dosyayi tanimlamak icin kullanilir.
*/

$dosya = fopen("deneme.php","w");
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.mynet.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FILE, $dosya); 
$sonuc = curl_exec($ch);
curl_close($ch);
if ($sonuc==1) {
    echo "dosya basariyla indirildi.";

}else{
    echo "dosya indirme islemi sonucunda beklenmeyen bir hata olustu.";
}





?>
</body>
</html>	