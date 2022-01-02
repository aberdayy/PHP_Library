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
($islemyap   =  function($isim,$soyisim){
   echo $isim . " " .$soyisim;
})("ataberk","erdayyyyyyyyy");
-----------------------------------------
*/

($islemyap   =  function($isim="",$soyisim="",$yas=""){
   if ($isim!="") {
      echo "isim :" . $isim . "<br />";
   }
   if ($soyisim!="") {
      echo "soyisim :" . $soyisim . "<br />";
   }if ($yas!="") {
      echo "yas :" . $yas. "<br />";
   }


})("ataberk","erday",18);














?>
</body>
</html>	