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
(?:)      : duzneli ifadelerde alt grup olusturmak icin kullanilir.
*/
/*
$icerik = "merahaba hakan alakent , merhaba hasan alakent,  merhaba harun laakent";
$desen = "/ha(?:kan)/";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal deger : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------
*/
/*
$icerik = "merahaba hakan alakent , merhaba hasan alakent,  merhaba harun laakent";
$desen = "/ha(?:kan|run|san)/";
preg_match_all($desen,$icerik,$sonuc);

echo "orjinal deger : " . $icerik . "<br />";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
-------------------------------------
*/
/*
$icerik = "merahaba hakan alakent , merhaba hasan alakent,  merhaba harun laakent";
$desen = "/ha(?:kan|run|san)/";
$sonuc = preg_match_all($desen,$icerik);

echo "orjinal deger : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
echo " sonuc degeri : " . $sonuc ;
---------------------------
*/

$icerik = "merahaba hakan alakent , merhaba hasan alakent,  merhaba harun laakent";
$desen = "/ha(?:kan|san)/";
$sonuc = preg_match_all($desen,$icerik);

echo "orjinal deger : " . $icerik . "<br />";
echo "desen : " . $desen . "<br />";
if ($sonuc>=1) {
    echo "duzenli ifade ile aranan deger icerikte var. ";
}else {
    echo "duzneli ifade ile aranan deger iceriket yok";
}














?>

</body>
</html>	