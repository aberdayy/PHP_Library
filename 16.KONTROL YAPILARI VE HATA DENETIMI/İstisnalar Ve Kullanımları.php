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
try            =  hata olsuturabilecek kodlar icin kullanilir.   
catch          =  hata olusursa calistirilacak kodlar icn kullanuilir.
finally        =  hata olussada olusmasada kullanicak kodlar icin   
throw          =  hata olsuturabilecek kodlar icin istisnai  durumlarda kullanilir.  
exception      =  tum istisnalar icin oncenden tanimli olan temel sinifi cagirmak icin kullanilir.
getMessage()   =  tum istisnalar icin olusturulacak olan iletilerin atandigi veri tutuculardir.

yapisi;

try{
   kod bloklari
   throw new exception(ileti);

}
catch(exception ileti atamasi){
kod bloklari 
}
finally{
   kod bloklari
}
*/






/*
try {

   $deger1     =  100;
   $deger2     =  0;
if($deger2==0){
throw new Exception("hatali islem yapmaya calisiyor.");

}   
   echo "bolme islemi sonucu : ".$deger1 / $deger2;
      
}catch(exception $sonuc){
echo $sonuc->getMessage(); 
}
---------------------------------------------------
*/
/*
 $deger     =  "ataberk";

try {

   if($deger=="ataberk"){
      echo "merhaba ataberk nasilsin?";
   }elseif($deger=="hakan") {
      throw new Exception("sen hakansin? sen ataberk degilsin!");
   }elseif($deger=="onur") {
      throw new Exception("sen onursun! sen ataberk degilsin!");
   }else {  
      throw new Exception("sen kimsin bre zindik!!");
       
   }
}catch(exception $sonuc){
echo $sonuc->getMessage(); 
}
--------------------------------------
*/
/*
$deger     =  "atadasadberk";

try {

   if($deger=="ataberk"){
      echo "merhaba ataberk nasilsin?";
   }elseif($deger=="hakan") {
      throw new Exception("sen hakansin? sen ataberk degilsin!");
   }elseif($deger=="onur") {
      throw new Exception("sen onursun! sen ataberk degilsin!");
   }else {  
      throw new Exception("sen kimsin bre zindik!!");
       
   }

echo "<br />burasi son saitr kodudur.";//throw tetiklendigi anda artik ondan sonraki kod blogu asla calismaz!!!!!!


}catch(exception $sonuc){
echo $sonuc->getMessage(); 
}
--------------------------------------------
*/


try {

   $deger1     =  100;
   $deger2     =  2;
if($deger2==0){
throw new Exception("hatali islem yapmaya calisiyor.");

}   
   echo "bolme islemi sonucu : ".$deger1 / $deger2;
      
}catch(exception $sonuc){
echo $sonuc->getMessage(); 
}finally{
   echo "<br />ben finally ifadesi kod bloguyum ve her daim calisirim.";
}
// FINALLY HER DAIM CALISIRR!!!!!!!!!!!!!!!!!!!!!














?>
</body>
</html>	