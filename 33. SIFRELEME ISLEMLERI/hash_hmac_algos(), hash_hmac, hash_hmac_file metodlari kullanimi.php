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
hash_hmac_algos()   :   PHP yazilimi icerisinde anahtarli olarak HMAC (hash-based Message authentication)(karma tabanli ileti kimlik dogrulama kodu) yontemi ile kullanilabilecek olan sisteme tanimli tum algoritmalarin listesini bulur ve buldugu degerler ile yeni bir dizi olustururarak olusturdugu dizi degerini geriye dondurur.
hash_hmac()         :   Belirtilecek olan icerigin HMAC yontemi ile hash ozetini ureterek urettigi degeri geriye dondurur.
hash_hmac_file()    :   Belirtilecek olan dosyanin  HMAC yontemi ile hash ozetini ureterek urettigi degeri geriye dondurur.
*/
/*
$bul = hash_hmac_algos();
 echo "<pre>";
 print_r($bul);
 echo "</pre>";
-----------------------------------*/
/*
$icerik = "ataberk erday RDY Media";
echo "orjinal icerik : " . $icerik;
$uret   =   hash("md5",$icerik);
echo "md5 algortimsasi kullanilarak uretilmisicerik : " . $uret;
-----------------------------------*/
/*
$icerik = "ataberk erday RDY Media";
echo "orjinal icerik : " . $icerik . "<br />";
$uret   =   hash("md5",$icerik);
echo "md5 algortimsasi kullanilarak uretilmisicerik : " . $uret."<br />";

$uret1   =   hash_hmac("md5",$icerik, "ataberk"); // 3.parametre gizli anahtardir bu paramtre de anahtara dahil edilerek iyice karisik bir yapi elde edilir.
echo "hmac md5 algortimsasi kullanilarak uretilmisicerik : " . $uret1. "<br />";
-----------------------------------*/
/*
$icerik = "index.php";
echo "orjinal dosya adi : " . $icerik . "<br />";

$uret1   =   hash_hmac_file("md5",$icerik, "istanbul"); 
echo "hmac md5 algortimsasi kullanilarak uretilmis dosya : " . $uret1. "<br />";
-----------------------------------*/
$icerik = "ataberk erday RDY Media";
$gizlianahtar = "istanbulankaracokhosamabenena";
echo "orjinal icerik : " . $icerik . "<br />";

$uret1   =   hash_hmac("md5",$icerik,$gizlianahtar);
echo "hash md5 : " . $uret1."<br />";

$uret2   =   hash_hmac("snefru256",$icerik,$gizlianahtar);
echo "hash snefru256 : " . $uret2."<br />";

$uret3   =   hash_hmac("ripemd320",$icerik,$gizlianahtar);
echo "hash ripemd320 : " . $uret3."<br />";







?>
</body>
</html>	