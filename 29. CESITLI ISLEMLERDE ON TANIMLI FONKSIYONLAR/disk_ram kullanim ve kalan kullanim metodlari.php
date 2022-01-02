<!doctype html>
<html lang="tr-TR">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="content-language" content="tr">
<meta charset="utf-8">
<title>ataberk erday php calisma gunlugu</title>
</head>
<body>
<?php

/*
disk_total_space()      :   kullanilmakta olan serverin yani sunucunun belirtilecek olan surucusu dogrultusunda toplam disk kapasitesinin degerini byte cinsinden bularak buldugu degeri geriye dondurur.
disk_free_space()       :   kullanilmakta olan serverin yani sunucunun belirtilecek olan surucusu dogrultusunda kalan disk kapasitesinin degerini byte cinsinden bularak buldugu degeri geriye dondurur.
memory_get_usage()      :   calismakta olan php dosyasi icin sistemden ayrilan memory yani hafiza miktari degerini byte cinsinden bularak buldugu degeri geriye dondurur.
*/
/*
$deger = disk_total_space("/");
echo "serverin toplam disk kapasitesi ".$deger." byte.";
--------------------------------------------------------*/
/*
$deger = disk_free_space("/");
echo "serverin bos disk kapasitesi ".$deger." byte.";
--------------------------------------------------------*/
$deger = memory_get_usage("/");
echo "calisan php dosyasinin ram kullanimi ".$deger." byte.";

?>
</body>
</html>	