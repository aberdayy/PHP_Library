<?php 
header("Refresh:5")
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
--------------------------------------------------------------------------I L K  E S L E S M E----------------------------------------------------------------------
strpos()		:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin ilk eslesme sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur.
mb_strpos()		:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin belirtilecek olan karakter kodlamasi dahiilinde gelismis olarak ilk eslesme 
sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur.

stripos()		:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin ilk eslesme sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur. BUYUK HARF KUCUK HARF DUYARSIZ	
mb_stripos()	:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin belirtilecek olan karakter kodlamasi dahiilinde gelismis olarak ilk eslesme 
sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur.								BUYUK HARF KUCUK HARF DUYARSIZ

--------------------------------------------------------------------------S O N   E S L E S M E----------------------------------------------------------------------
strrpos()		:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin SON eslesme sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur. 
mb_strrpos()	:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin belirtilecek olan karakter kodlamasi dahiilinde gelismis olarak SON eslesme 
sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur.								

strripos()		:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin SON eslesme sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur. BUYUK HARF KUCUK HARF DUYARSIZ
mb_strripos()	:	belirtilecek olan icerikte belirtiledcek olan herhangi bir degerin belirtilecek olan karakter kodlamasi dahiilinde gelismis olarak SON eslesme 
sonucundaki konumunu yani sirasini bularak buldugu degeri geriye dondurur.								BUYUK HARF KUCUK HARF DUYARSIZ

*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strpos($metin, "e");
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strpos($metin, "tabanli");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strpos($metin, "m",10); //10. karakterden saymaya basla anlamina gelri!  
echo $sonuc . "<br />";
--------------------------------------------------------------*/



//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/



/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strpos($metin, "e");	//karakter kodlamasi belirtilmezse dokumanin karakter kodlamasini alir.
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strpos($metin, "e",0 ,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strpos($metin, "programlama",0,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/






//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/




/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = stripos($metin, "e");
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strpos($metin, "TABANLI");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = stripos($metin, "M",10); //10. karakterden saymaya basla anlamina gelri!  
echo $sonuc . "<br />";
--------------------------------------------------------------*/





//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/






/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_stripos($metin, "E");	//karakter kodlamasi belirtilmezse dokumanin karakter kodlamasini alir.
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_stripos($metin, "E",0 ,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_stripos($metin, "TABANLI",0,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/











//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/










/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strrpos($metin, "e");
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strrpos($metin, "tabanli");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strrpos($metin, "m",10); //10. karakterden saymaya basla anlamina gelri!  
echo $sonuc . "<br />";
--------------------------------------------------------------*/









//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/











/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strrpos($metin, "e");	//karakter kodlamasi belirtilmezse dokumanin karakter kodlamasini alir.
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strrpos($metin, "e",0 ,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strrpos($metin, "programlama",0,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/














//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/
//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/












/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strripos($metin, "E");
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web TABANLI programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strripos($metin, "tabanli");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = strripos($metin, "M",10); //10. karakterden saymaya basla anlamina gelri!  
echo $sonuc . "<br />";
--------------------------------------------------------------*/












//--------------------------------------------------------------*/--------------------------------------------------------------*/--------------------------------------------------------------*/














/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strripos($metin, "e");	//karakter kodlamasi belirtilmezse dokumanin karakter kodlamasini alir.
echo $sonuc . "<br />";
--------------------------------------------------------------*/
/*
$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strripos($metin, "E",0 ,"UTF-8");  
echo $sonuc . "<br />";
--------------------------------------------------------------*/

$metin = "PHP tum web tabanli programlama dilleri arasinda en yaygin olarak kullanilan bir dildir. PHP yazilim dili cok ustun ozelliklere sahiptir. Ataberk Erday bir PHP yazilimcisidir.";
echo $metin . "<br />";

$sonuc = mb_strripos($metin, "PROGRAMLAMA",0,"UTF-8");  
echo $sonuc . "<br />";

























?>
</body>
</html>	