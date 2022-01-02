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
CURLOPT_SSL_VERIFYHOST       :  Baslatilmis olan bir CURL oturumunda istenilen URL ile veri alisverisi sirasinda SSL es sertifikasini tanimlamak icin kullanilir.  
                        0       :   Ortak bir isim ozelligi degeri aranmaz.
                        1       :   SSL es sertifikasinda ortak isim varligina bakilir.
                        2       :   SSL es sertifikasinda ortak bir ismin varligi ile birlikte serverin(sunucu) ana bilgisayar adinin da eslesmesine bakilir.
CURLOPT_SSL_VERIFYPEER       :  Baslatilmis olan bir CURL oturumunda istenilen URL ile veri alisverisi sirasinda SSL es sertifikasini dogrulamak veya dogrulamayi iptal etmek icin kullanilir.
CURLOPT_SSLVERSION           :  Baslatilmis olan bir CURL oturumunda istenilen URL ile veri alisverisi sirasinda SSL es sertifikasinin surumunu belirtmek icin kullanilir.
                        0       :   Default(tum versiyonlar kabul edilir)
                        1       :   TLsv1
                        2       :   SSLv2
                        3       :   SSLv3
                        4       :   TLsv1_0
                        5       :   TLsv1_1
                        6       :   TLsv1_2
*/



$ch     =   curl_init();
curl_setopt($ch, CURLOPT_URL , "https://www.turkcell.com.tr");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, 1); //ILK OLARAK VERIFY HOST DEGERI ISTENIR.
curl_setopt($ch,CURLOPT_SSLVERSION, 3); //IKINCI OLARAK BU GELIR.
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false); 
$sonuc = curl_exec($ch);
curl_close($ch);
echo $sonuc;






?>
</body>
</html>	