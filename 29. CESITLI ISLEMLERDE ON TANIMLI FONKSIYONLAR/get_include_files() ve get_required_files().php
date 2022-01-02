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
get_included_files()        :   kullanilacak olan php dosyasina dahil edilmis yada eklenmis tum php dosyalarinin pathini yani yolunu ve isimlerini bularak buldugu degerlerden yeni bir dizi olusturarak olusturdugu degeri geriye dondurur.
get_required_files()        :   kullanilacak olan php dosyasina dahil edilmis yada eklenmis tum php dosyalarinin pathini yani yolunu ve isimlerini bularak buldugu degerlerden yeni bir dizi olusturarak olusturdugu degeri geriye dondurur.
*/
print_r(get_included_files());
echo "<br />";
print_r(get_required_files());

?>
</body>
</html>	