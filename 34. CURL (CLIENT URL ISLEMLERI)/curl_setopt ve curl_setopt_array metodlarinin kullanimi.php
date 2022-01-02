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
curl_setopt()       :   Kendisine parametre olarak verilen deger dogrultusunda baslatilmis bir curl oturumuna secenek eklemek icin kullanilir. TEKLI
curl_setopt_array() :   Kendisine parametre olarak verilen deger dogrultusunda baslatilmis bir curl oturumuna dizi halinde secenek yada secenekler eklemek icin kullanilir. COKLU   

    CURLOPT_URL             :   Baslatilmis bir curl oturumunda icerigine ulasilmak istenilen url adresini belirtmek icin kullanilir.
    CURLOPT_RETURNTRANSFER  :   Baslatilmis bir curl oturumunda istenilen URL den elde edilen icerigin dogrudan ekrana ciktilanmasini durdurarak belirtilecek olan degiskene 
    aktarilmasini saglamak icin kullanilir. 
    CURLOPT_TIMEOUT         :   Baslatilmis bir curl oturumunda maksimum calistirilabilirlik suresini saniye cinsinden belirtmek icin kullanilir.
    CURLOPT_TIMEOUT_MS      :   Baslatilmis bir curl oturumunda maksimum calistirilabilirlik suresini mini saniye cinsinden belirtmek icin kullanilir. (1sn = 1000ms) 
*/
/*
$ch     =   curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.mynet.com");
curl_exec($ch);
curl_close($ch);
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.mynet.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //true = 1 , false = 0
$sonuc  = curl_exec($ch);
curl_close($ch);

echo $sonuc;
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.mynet.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //true = 1 , false = 0
curl_setopt($ch, CURLOPT_TIMEOUT, 90); //CURL OTURUM ISLEVI
$sonuc  = curl_exec($ch);
curl_close($ch);

echo $sonuc;
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.mynet.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //true = 1 , false = 0
curl_setopt($ch, CURLOPT_TIMEOUT_MS, 500); //YARIM SANIYE 
$sonuc  = curl_exec($ch);
curl_close($ch);

echo $sonuc;
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt_array($ch, [CURLOPT_URL => "https://www.mynet.com"]);
curl_exec($ch);
curl_close($ch);
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt_array($ch, [CURLOPT_URL => "https://www.mynet.com", CURLOPT_RETURNTRANSFER => true]);
$sonuc  = curl_exec($ch);
curl_close($ch);
echo $sonuc;
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt_array($ch, [CURLOPT_URL => "https://www.mynet.com", CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 90]);
$sonuc  = curl_exec($ch);
curl_close($ch);
echo $sonuc;
----------------------------------------------------------*/
/*
$ch     =   curl_init();
curl_setopt_array($ch, [CURLOPT_URL => "https://www.mynet.com", CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT_MS => 500]);
$sonuc  = curl_exec($ch);
curl_close($ch);
echo $sonuc;
----------------------------------------------------------*/

$ch         =   curl_init();
$secenekler = array(CURLOPT_URL => "https://www.mynet.com", CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 90);
curl_setopt_array($ch, $secenekler);
$sonuc      = curl_exec($ch);
curl_close($ch);
echo $sonuc;














?>
</body>
</html>	