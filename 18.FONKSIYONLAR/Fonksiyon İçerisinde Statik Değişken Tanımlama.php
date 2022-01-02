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

function demo1(){
   $sayi    =  0;
   $sayi    =  $sayi+1;

   echo "sayi degeri : " . $sayi . "<br />";
}
demo1();
demo1();
demo1();
demo1();


echo "<br /><br />";


function demo2(){
   static $rakam    =  0;
   $rakam    =  $rakam+1;

   echo "sayi degeri : " . $rakam . "<br />";
}
demo2();
demo2();
demo2();
demo2();



?>
</body>
</html>	