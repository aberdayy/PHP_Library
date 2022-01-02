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
function bir($isim,$soyisim){
   function iki($meslek,$yas){

      echo "Meslek: ".$meslek . " <br />". "Yas: ".$yas . "<br />";
   }
echo "Isim: " . $isim . "<br /> ". "Soyisim: " .$soyisim . "<br />";

}

bir("Ataberk","Erday");
iki("Front End Web Developer",18);
-----------------------------------
*/
/*
function bir($isim,$soyisim){
   function iki($meslek,$yas){

      return "Meslek: ".$meslek . " <br />". "Yas: ".$yas . "<br />";
   }
return "Isim: " . $isim . "<br /> ". "Soyisim: " .$soyisim . "<br />";

}

$isimsoyisimbilgisi = bir("Ataberk","Erday");
$yasmeslekbilgisi = iki("Front End Web Developer",18);

echo $isimsoyisimbilgisi ."<br />". $yasmeslekbilgisi;
-----------------------------------------
*/
function bir($isim="bilinmiyor",$soyisim="bilinmiyor"){
   function iki($meslek="bilinmiyor",$yas="bilinmiyor"){

     echo "Meslek: ".$meslek . " <br />". "Yas: ".$yas . "<br />";
   }
echo "Isim: " . $isim . "<br /> ". "Soyisim: " .$soyisim . "<br />";

}

bir("Ataberk");
iki("Front End Web Developer");

?>
</body>
</html>	