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
// request degiskeninde hem post hemde get yontemlerini okuyabilir,  ancak get ile gonderilip post ile alinamaz veya tam tersi alinamaz. request gonderimi guvenlik acigi cikabilir...
$gelenisim = $_REQUEST["kullaniciadi"];
$gelensoyisim = $_REQUEST["kullanicisoyadi"];
echo $gelenisim. " " . $gelensoyisim;




?>
</body>
</html>	