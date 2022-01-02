<?php 
/*
header()        :   belirtilecek olan icerik dahilinde istemciye islenmis HTTP ust bilgisi iletmek icin kullanilir.
get_headers()   :   belirtilecek olan URL dogrultusunda HTML istegine karsi sunucunun verdigi tum yaitlari kontrol eder ve aldigi degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
get_meta_tags() :   belirtilecek olan URL dogrultusunda HTML dosyasinda bulunan ve name degerine sahip tum meta etiketlerini kontrol eder ve aldigi degerlerden yeni bir dizi olusturarak, olusturdugu dizi degerini geriye dondurur.
*/

header("Content-type: application/pdf");
header("Content-disposition: attachment; filename=ornek.pdf");
readfile("dosyalar/sample.pdf");



?>
