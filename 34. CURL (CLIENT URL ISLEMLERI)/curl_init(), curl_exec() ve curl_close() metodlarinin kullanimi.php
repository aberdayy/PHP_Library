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
curl_init()     :   Yeni bir curl oturumu baslatmak / tanimlamak icin kullanilir
curl_exec()     :   Kendisine parametre olarak verilen deger dogrultusunda baslatilmis olan bir curl oturumunu calistirmak icin kullanilir.
curl_close()    :   Kendisine parametre olarak verilen deger dogrultusunda baslatilmis olan bir curl oturumunu sonlandirmak icin kullanilir.
*/

$ch     =   curl_init("https://www.mynet.com/");
curl_exec($ch);
curl_close($ch);

?>
</body>
</html>	