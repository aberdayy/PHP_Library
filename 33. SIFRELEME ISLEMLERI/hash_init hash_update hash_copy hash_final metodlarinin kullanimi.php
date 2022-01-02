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
hash_init()     :   hash ozeti uretme islemlerini baslatmak ve algoritma turunu belirtmek icin kullanilir.
hash_update()   :   belirtilecek olan icerigi daha onceden hash ozeti uretme islemi baslatilmis bir isleme dahil etmek icin kullanilir.

hash_copy()     :   hash ozeti uretme islemlerini baslatmak ve algoritma turunu belirlemek icin daha onceden olusturulmus olan hash init 
metodunu kopyalamak icin kullanilir.

hash_final()    :   daha onceden hash ozeti uretme islemi baslatilarak icerigi de dahil edilmis bir islemin hash ozetini ureterek 
urettigi degeri geriye dondurur.
*/
/*
$deger = "extra egitim";
echo "orjinal icerik : " . $deger . "<br />";
$olustur = hash("md5",$deger);
echo "md5 ozeti : " . $olustur . "<br />";

$sifreleme  =   hash_init("md5");
hash_update($sifreleme,$deger); //once baslatilan icerik sonrasinda deger yazilir.
$sonuc = hash_final($sifreleme);
echo "parcali yapida olusturulmus md5 ozeti : " . $sonuc;
--------------------------------*/
/*
$deger1 = "extra egitim";
echo "orjinal icerik1 : " . $deger1 . "<br />";

$deger2 = "RDY Media";
echo "orjinal icerik2 : " . $deger2 . "<br />";

$sifreleme  =   hash_init("md5");
hash_update($sifreleme,$deger1); //extra egitim
hash_update($sifreleme,$deger2);//extra egitimRDY Media     
$sonuc = hash_final($sifreleme);    //iki icerigi birlestirerek sifreleme yapar.!!!!!!!! dikkat
echo "parcali yapida olusturulmus md5 ozeti : " . $sonuc. "<br />";

--------------------------------*/
$deger1     = "extra egitim";
echo "orjinal icerik1 : " . $deger1 . "<br />";

$deger2     = "RDY Media";
echo "orjinal icerik2 : " . $deger2 . "<br />";

$sifreleme  =   hash_init("md5");
hash_update($sifreleme,$deger1); 

$kopyala    =   hash_copy($sifreleme); // kopyalama isleminin finalden once yapilmasi gerekir cunku finalden sonra baska alanda hash cekemeyiz
// COK ONEMLI HASH COPY EXTRA EGITIM DEGERINI TUTAR
$sonuc      =   hash_final($sifreleme);

echo "parcali yapida olusturulmus md5 ozeti : " . $sonuc. "<br />";

hash_update($kopyala,$deger2);  //EXTRA EGITIM ELINDE BULUNDUGU ICIN EXTRA EGITIMRDY MEDIA KABUL EDILIR
$sonuc2     =   hash_final($kopyala);
echo "md5 ozeti : " . $sonuc2;









?>
</body>
</html>	