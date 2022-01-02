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
Hash_Algos()    :   PHP yazilimi icerisinde kullanilabilecek olan ve sisteme tanimli tum algortimalarin listesini bulur ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu degeri geriye dondurur.
Hash()          :   belirtilecek olan icerigin hash ozetini ureterek urettigi degeri geriye dondurur.
Hash_File()     :   belirtilecek olan dosyanin hash ozetini ureterek urettigi degeri geriye dondurur.
*/
/*
$deger  = hash_algos();

echo "<pre>";
print_r($deger);
echo "</pre>";
-----------------------------------------------*/
/*
$deger = "ataberk erday RDY Media";
echo "orjinal icerik : " . $deger . "<br />";


$bir  = md5($deger);
echo "MD5 metodu kullanilarak olusturulan md5 ozeti : " . $bir."<br />";

$iki = hash("md5",$deger);  // hashin icerisindeki ilk parametrede kullanacak oldugumuz algoritmayi belirtmeliyiz.(hash algos)
echo "hash metodu kullanilarak olusturulan md5 ozeti : " . $iki."<br />";
-----------------------------------------------*/
/*
$dosya = "index.php";
echo "orjinal icerik : " . $dosya . "<br />";


$bir  = md5_file($dosya);
echo "MD5 metodu kullanilarak olusturulan md5 ozeti : " . $bir."<br />";

$iki = hash_file("md5",$dosya);  // hashin icerisindeki ilk parametrede kullanacak oldugumuz algoritmayi belirtmeliyiz.
echo "hash metodu kullanilarak olusturulan md5 ozeti : " . $iki."<br />";
-----------------------------------------------*/
$algorritma ="ripemd320"; 
$deger = "ataberk erday RDY Media";
echo "orjinal icerik : " . $deger . "<br />";

$iki = hash($algorritma,$deger);  // hashin icerisindeki ilk parametrede kullanacak oldugumuz algoritmayi belirtmeliyiz.(hash algos)
echo "hash metodu kullanilarak olusturulan ripemd320 ozeti : " . $iki."<br />";




?>
</body>
</html>	