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
$   :   duzenli ifade dahilinde kontrol edilecek olan icerigin karakter diziliminin sonu ile duzenli ifade arasinda bir eslesme aramak icin kullanilir.
*/
/*
$icerik = "ders konusu : PHP'dir.";
$desen = "/PHP$/";
preg_match($desen,$icerik,$sonuc);

echo "orjinal iceirk: " . $icerik . "<br />";

echo "desen : " . $desen . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
---------------------------------
*/
/*
$icerik = "ders konusu : PHP";
$desen = "/PHP$/";
preg_match($desen,$icerik,$sonuc);

echo "orjinal iceirk: " . $icerik . "<br />";

echo "desen : " . $desen . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-----------------------------------------
*/
/*
$icerik = "ders konusu : PHP'dir.";
$desen = "/PHP$/";
$sonuc = preg_match($desen,$icerik,$sonuc);

echo "orjinal iceirk: " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
if ($sonuc==1) {
    Echo "deger icerik krakter dizilimin sonunda vardir.";
}else {
    echo "deger icerik karakter dizliminin sonunda yoktur.";
}
----------------------------------------
*/

$icerik = "ders konusu : PHP";
$desen = "/PHP$/";
$sonuc = preg_match($desen,$icerik,$sonuc);

echo "orjinal iceirk: " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
if ($sonuc==1) {
    echo "deger icerik krakter dizilimin sonunda vardir.";
}else{
    echo "deger icerik karakter dizliminin sonunda yoktur.";
}
















?>


</body>
</html>	