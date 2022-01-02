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

$gelendosyalar = $_FILES["dosyalar"];
/*
echo "<pre>";
print_r($gelendosyalar);
echo "</pre>";
*/
foreach ($gelendosyalar["tmp_name"] as $anahtar => $eleman) {
$anahtardegeri  =   $anahtar;
$dosyadidegeri  =   $gelendosyalar["name"][$anahtar];
$dosyaturudegeri = $gelendosyalar["type"][$anahtar];
$dosyagecicidiziniveadidegeri = $gelendosyalar["tmp_name"][$anahtar];
$dosyahatadegeri = $gelendosyalar["error"][$anahtar];
$dosyaboyutu = $gelendosyalar["size"][$anahtar];

$dosyatuklemediziniveadi = "resimler/".$dosyadidegeri;

if(move_uploaded_file($dosyagecicidiziniveadidegeri, $dosyatuklemediziniveadi))
{
    echo "anahtar : " . $anahtardegeri . "<br />";
    echo "dosya adi : " . $dosyadidegeri . "<br />";
    echo "dosya turu degeri: " . $dosyaturudegeri . "<br />";
    echo "dosya gecici dizini ve temp adi degeri: " . $dosyagecicidiziniveadidegeri . "<br />";
    echo "dosya hata diurumu degeri: " . $dosyahatadegeri . "<br />";
    echo "dosya boyutu degeri: " . $dosyaboyutu . "<br />";
    echo "<img src='{$dosyatuklemediziniveadi}'<br /><br />>";
}else{
echo "dosya yukleme isslemi sirasinda hic beklenmeyen bisi oldu";
}

}



?>
</body>
</html>	