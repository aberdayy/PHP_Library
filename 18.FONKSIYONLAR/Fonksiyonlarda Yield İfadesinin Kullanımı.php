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
yield :  fonksiyonlardan deger dondurmek icin kullanilir. 
*/
/*
function islem($baslangic, $bitis){
while ($baslangic<=$bitis) {
   echo $baslangic . " ";
   $baslangic++;
return;   
}

}
islem(1,50000)
--------------------------------
*/

/*
function islem($baslangic, $bitis){
   while ($baslangic<=$bitis) {
      echo $baslangic . " ";
      $baslangic++;
         yield;   
      }
   
   }
   islem(1,50000)
-----------------------------------
*/
/*
function islem($baslangic, $bitis){
   
   $sayilar =  [];

   
   while ($baslangic<=$bitis) {
      $sayilar[] = $baslangic ;
      $baslangic++;
         
      }
      return $sayilar; 
   }
   $sonuc = islem(1,500000);
   foreach ($sonuc as $deger ) {
      echo $deger . " ";
   }

echo "<br /><br />";

$bellektuketici   =  memory_get_usage();

echo "islem esnasinda tuketilen bellek miktari :" . $bellektuketici . "byte"; 
//16.5 mb ram tuketti
-----------------------------------------
*/



function islem($baslangic, $bitis){

   while ($baslangic<=$bitis) {
      yield $baslangic ;
      $baslangic++;  
      }
      echo "<br /> bu ifade yazacak mi? " ;
   }


   $sonuc = islem(1,500);
 
   foreach ($sonuc as $deger ) {
      echo $deger . " ";
   }

echo "<br /><br />";

$bellektuketici   =  memory_get_usage();

echo "islem esnasinda tuketilen bellek miktari :" . $bellektuketici . "byte"; 
//0.39 mb ram tuketti! 









?>
</body>
</html>	