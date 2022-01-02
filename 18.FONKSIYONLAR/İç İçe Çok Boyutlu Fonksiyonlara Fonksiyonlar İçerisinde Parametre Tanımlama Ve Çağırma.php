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
function bir($isim){

      function iki($soyisim){

      echo $soyisim . " "; 
      }

   echo $isim . " ";

   iki("erdayyyyy");
}
bir("ataberk");
--------------------------------
*/
/*
function bir($isim){

         function iki($soyisim){

         return $soyisim; 
         }
      $yaz  = iki("erdayyyyy"); 
      return $isim . " " . $yaz;


}


$sonuc = bir("ataberk");
echo $sonuc;
----------------------------
*/
/*
function isimyaz($isim){

   function soyisimyaz($soyisim){

      function yasyaz($yas){

         echo $yas; 

      }

   echo $soyisim . "<br />"; 
   yasyaz(18);
   }
   echo $isim . " ";
   soyisimyaz("erday"); 
}
isimyaz("ataberk")
------------------------------------
*/
/*
function isimyaz($isim="bilinmiyor"){

   function soyisimyaz($soyisim="bilinmiyor"){

      function yasyaz($yas="bilinmiyor"){

         echo $yas; 

      }

   echo $soyisim . "<br />"; 
   yasyaz();
   }
   echo $isim . " ";
   soyisimyaz(); 
}
isimyaz()
-------------------------------------
*/

function isimyaz($isim="bilinmiyor"){

   function soyisimyaz($soyisim="bilinmiyor"){

            function yasyaz($yas="bilinmiyor"){

            echo $yas; 

      }

         echo $soyisim . "<br />"; 
         yasyaz(18);
   }
   echo $isim . " ";
   soyisimyaz(); 
}
isimyaz("ataberk")












?>
</body>
</html>	