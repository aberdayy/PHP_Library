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
function bir(){

   function iki(){

      echo "burasi iki adindaki fonksiyonun icerisidir.";
   }

   echo "burasi bir adindaki fonksiyonun icerisindedir. <br />";
}
bir();
iki();
----------------------------\\
*/

/*
function bir(){
   function iki(){
      function uc(){
         function dort(){
            function bes(){
               echo "burasi best adindaki fonksiyonun icerisidir.<br />";
            }  

            echo "burasi dort adindaki fonksiyonun icerisidir.<br />";   
         }

         echo "burasi uc adindaki fonksiyonun icerisidir.<br />";
  

      }
      echo "burasi iki adindaki fonksiyonun icerisidir.<br />";
   }

   echo "burasi bir adindaki fonksiyonun icerisindedir. <br />";
}
bir();
iki();
uc();
dort();
bes();
//SIRA ILE CAGIRILMAZ ISE CALISMAZ!
===============================================
*/
/*
function bir(){
   function iki(){
      function uc(){
         function dort(){
            function bes(){
               echo "ataberk erday.<br />";
            }  

         }
      }
   }
}
bir();
iki();
uc();
dort();
bes();
-------------------------------------------
*/   
/*
function islemsonucumesaji(){
   
      function tamammesaji(){
         
         echo "isleminiz basariyla tamamlanmistir.";

      }
      function hatamesaji(){
         echo "islem sirasinda beklenmeyen bir hata olustu.";

      }
      function uyarimeasaji(){
         echo "dikkat; yapilmaya calisilan islem suanda aktif degildir.";

      }

}

      
$sonuc   =  "tamam";
  
if ($sonuc=="tamam") {
  islemsonucumesaji();
  tamammesaji();
}elseif($sonuc=="dikkat") {
   islemsonucumesaji();
   uyarimeasaji();
}else{
   islemsonucumesaji();
   hatamesaji();
}
------------------------------------------------------------
*/
function islemsonucumesaji(){
   
      function tamammesaji(){
         
         return "isleminiz basariyla tamamlanmistir.";

      }
      function hatamesaji(){
         return "islem sirasinda beklenmeyen bir hata olustu.";

      }
      function uyarimeasaji(){
         return "dikkat; yapilmaya calisilan islem suanda aktif degildir.";
      }
}

      
$sonuc   =  "tamam";
  
if ($sonuc=="tamam") {
  islemsonucumesaji();
  $mesaj=tamammesaji();
  echo $mesaj;
}elseif($sonuc=="dikkat") {
   islemsonucumesaji();
   $mesaj=uyarimeasaji();
   echo $mesaj;
}else{
   islemsonucumesaji();
   $mesaj=hatamesaji();
   echo $mesaj;
}
















?>
</body>
</html>	