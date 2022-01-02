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
^ : duzenli ifade dahilinde kontrol edileecek olan icerigin karakter diziliminin baslangici ile duzenli ifade arasinda eslesme aramak icin kullanilir.
*/
/*
$icerik = "Adan Z ye PHP7 gorsel egitim seti ";
$desen = "/^PHP7/";
$sonuc =   preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
if ($sonuc==1) {
    echo "duzenli ifade daghilinde aranilan deger icerigin basinda mevcuttur bulundu";
}else {
    echo "duzenli ifade daghilinde aranilan deger icerigin basinda mevcut degildir";
}
*/

$icerik = "PHP7 Adan Z ye  gorsel egitim seti ";
$desen = "/^PHP7/";
$sonuc =   preg_match($desen,$icerik);

echo "orjinal icerik : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
if ($sonuc==1) {
    echo "duzenli ifade daghilinde aranilan deger icerigin basinda mevcuttur bulundu";
}else {
    echo "duzenli ifade daghilinde aranilan deger icerigin basinda mevcut degildir";
}

?>


</body>
</html>	