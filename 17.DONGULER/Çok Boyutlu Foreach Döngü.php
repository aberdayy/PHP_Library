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
$isimler =  ["ataberk","volkan","sadik","sinan",["okay","kayla","lacin"],"esra","muazzez"];

print_r($isimler);

echo "<br /><br />";

foreach ($isimler as $icerik) {
   
   if (is_array($icerik)) {

   foreach ($icerik as $deger) {
      echo $deger . "<br />";
   }
}else{
      echo $icerik . "<br />";
}   
}
----------------------------------------
*/
/*
$isimler =  ["ataberk","volkan","sadik","sinan",["okay","kayla","lacin"],"esra","muazzez"];

print_r($isimler);

echo "<br /><br />";

foreach ($isimler as $anahtar => $icerik) {
   
   if ($anahtar == 4) {

   foreach ($icerik as $deger) {
      echo $deger . "<br />";
   }
}else{
      echo $icerik . "<br />";
}   
}
----------------------------------------
*/
$isimler =  ["ataberk","volkan","sadik","sinan",["okay",["siyah","beyaz","kirmizi"],"kayla","lacin"],"esra","muazzez"];

print_r($isimler);

echo "<br /><br />";

foreach ($isimler as $icerik) {
   
   if (is_array($icerik)) {

   foreach ($icerik as $deger) {

if (is_array($deger)) {
foreach ($deger as $sonuc) {
   echo $sonuc ."<br />";
}

}else {
   echo $deger ."<br />";
}
   }
}else{
      echo $icerik . "<br />";
}   
}



?>
</body>
</html>	