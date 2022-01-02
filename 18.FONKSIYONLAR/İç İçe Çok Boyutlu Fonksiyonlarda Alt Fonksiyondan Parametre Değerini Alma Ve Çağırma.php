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
function bir($degerbir){

   function iki($degeriki){

      function uc($degeruc){
            
         echo $degeruc;
      }
      uc($degeriki);
   }
   iki($degerbir);
}

bir("ataberk erday");
-----------------------------
*/
/*
function bir($isimbir,$soyisimbir){

   function iki($isimiki,$soyisimiki){

      function uc($isimuc,$soyisimuc){
            
         echo $isimuc . " " . $soyisimuc;
      }
      uc($isimiki,$soyisimiki);
   }
   iki($isimbir,$soyisimbir);
}

bir("ataberk" ,"erday");
------------------------------------
*/
/*
function bir($isimbir,$soyisimbir,$yasbir){

   function iki($isimiki,$soyisimiki,$yasiki){

      function uc($isimuc,$soyisimuc,$yasuc){
            
         echo $isimuc . " " . $soyisimuc . " " . $yasuc;
      }
      uc($isimiki,$soyisimiki,$yasiki);
   }
   iki($isimbir,$soyisimbir,$yasbir);
}

bir("ataberk" ,"erday",18);
------------------------------------------------
*/

/*
function bir($isimbir="sadik",$soyisimbir="erdayy",$yasbir=56){

   function iki($isimiki="esra",$soyisimiki="erddayyy",$yasiki=51){

      function uc($isimuc="lacin",$soyisimuc="kabulcu",$yasuc=26){
            
         echo $isimuc . " " . $soyisimuc . " " . $yasuc;
      }
      uc($isimiki,$soyisimiki,$yasiki);
   }
   iki($isimbir,$soyisimbir,$yasbir);
}

bir("ataberk" ,"erday");
------------------------------------------
*/

/*
function bir($isimbir="sadik",$soyisimbir="erdayy",$yasbir=56){

   function iki($isimiki="esra",$soyisimiki="erddayyy",$yasiki=51){

      function uc($isimuc="lacin",$soyisimuc="kabulcu",$yasuc=26){
            
         echo $isimuc . " " . $soyisimuc . " yas: " . $yasuc;
      }
      uc($isimiki,$soyisimiki);
   }
   iki($isimbir,$soyisimbir,$yasbir);
}

bir("ataberk" ,"erday",18);
--------------------------------------------------------
*/

function bir($isimbir="sadik",$soyisimbir="erdayy",$yasbir=56){

   function iki($isimiki="esra",$soyisimiki="erddayyy",$yasiki=51){

      function uc($isimuc="lacin",$soyisimuc="kabulcu",$yasuc=26){
            
         echo $isimuc . " " . $soyisimuc . " yas: " . $yasuc;
      }
      uc($isimiki,$soyisimiki,$yasiki);
   }
   iki($isimbir,$soyisimbir,$yasbir);
}

bir();












?>
</body>
</html>	