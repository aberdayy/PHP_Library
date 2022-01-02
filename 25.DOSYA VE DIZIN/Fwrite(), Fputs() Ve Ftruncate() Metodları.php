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
fwrite()        :   belirtilecek olan dosyaya belirtilecek olan verileri yazmak icin kullanilir ayrica istenirse islem sonucunda yazilan karakter sayisi degerini bularak buldugu karakter sayisi degerini geriye dondur
fputs()         :   belirtilecek olan dosyaya belirtilecek olan verileri yazmak icin kullanilir ayrica istenirse islem sonucunda yazilan karakter sayisi degerini bularak buldugu karakter sayisi degerini geriye dondur
ftruncate()     :   belirtilecek olan dosya verisini belirtilecek olan karakter numarasindan sonraki tum karakterleri silmek icin kullanilir.ayrica islem sonucunu boolean veri turunde de dondurebilir.
*/

/*
$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "w");

fwrite($dosyaac, $icerik);


fclose($dosyaac);
-----------------------------------*/
/*

$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "w");

fwrite($dosyaac, $icerik);


fclose($dosyaac);
--------------------------------*/
/*
$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "w");

fwrite($dosyaac, $icerik);

fclose($dosyaac);
---------------------------*/
/*
$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "w");

$islem      = fwrite($dosyaac, $icerik);

echo "yazilan karakter sayisi : " . $islem;

fclose($dosyaac);
----------------------------------*/
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
/*
$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "a");

fwrite($dosyaac, $icerik);


fclose($dosyaac);
--------------------------------------*/

/*
$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "a");

fwrite($dosyaac, $icerik);


fclose($dosyaac);
------------------------------------*/
/*
$icerik = "merhaba benim adim Ataberk erdaydir \n ben bir web devoloperim.\n erart guzel sanatlar";

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "a");

$islem      = fwrite($dosyaac, $icerik);

echo "yazilan karakter sayisi : " . $islem;

fclose($dosyaac);
------------------------------------*/
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!--FWRITE VE FPUTS METODLARININ KULLANIMI TAMAMEN AYNIDIR--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!


/*

$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "a");

ftruncate($dosyaac, 15);


fclose($dosyaac);
---------------------------*/

/*
$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "a");

$sayi       = 12;

$sonuc      = ftruncate($dosyaac, $sayi);

if ($sonuc==1) {
    echo "metod basariyla calisti ve kesme islemi tamamlandi";
}elseif ($sonuc==0) {
    echo "metod calisamadi ve kesme islemi gerceklesemedi";
}else{
    echo "beklenmeyen birsey oldu!";
}


fclose($dosyaac);
------------------------------------*/
/*
$urladresi  = "https://www.hepsiburada.com"; 

$urloku     = file($urladresi);

$icerik     = "";

foreach ($urloku as $deger) {
    $icerik .= $deger;
}
$dosya      = "belge2.txt";
$dosyaac    = fopen($dosya, "w");

$sonuc      = fwrite($dosyaac, $icerik);
if ($sonuc>0) {
    echo $urladresi . " adresi icerigi " . $dosya . "  dosyasina basariyla yazildi.";    
}else{
    echo $urladresi . " adresi icerigi yazma islemi sirasinda hata olustu!";
}

fclose($dosyaac);
------------------------------------------------*/

$urladresi  = "https://www.hepsiburada.com"; 

$urloku     = file($urladresi);

$icerik     = "";

foreach ($urloku as $deger) {
    $icerik .= $deger;
}
$dosya      = "belge.html";
$dosyaac    = fopen($dosya, "w");

$sonuc      = fwrite($dosyaac, $icerik);
if ($sonuc>0) {
    echo $urladresi . " adresi icerigi " . $dosya . "  dosyasina basariyla yazildi.";    
}else{
    echo $urladresi . " adresi icerigi yazma islemi sirasinda hata olustu!";
}

fclose($dosyaac);












?>
</body>
</html>	