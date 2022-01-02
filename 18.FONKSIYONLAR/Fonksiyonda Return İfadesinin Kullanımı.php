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
 return     :   fonksiyondan deger dondurmek icnin kullanilir.
 */
/*
function islem(){
    $isimsoyisim  = "ataberk erday";
    return $isimsoyisim;
}

$sonuc = islem();

echo $sonuc;
----------------------------------
*/
/*
function islem(){
    $isimsoyisim  = "volkan alakent";
    return $isimsoyisim;
}

$sonuc = islem();
 
if($sonuc=="volkan alakent"){
    echo $sonuc . "  bir yazilim ve programlama gelistirme uzmanidir. ";
}else{
    echo "kisi taninmiyor.";
}
-----------------------------------
*/
/*
function islem(){
    $isimsoyisim  = "ataberk erday";
    return($isimsoyisim);
}

$sonuc = islem();

echo $sonuc;
--------------------------------------
*/
function islem(){
    $isim  = "ataberk";
    $soyisim    =   "erday";
    return ($isim).($soyisim);
}

$sonuc = islem();

echo $sonuc;


?>
</body>
</html>	