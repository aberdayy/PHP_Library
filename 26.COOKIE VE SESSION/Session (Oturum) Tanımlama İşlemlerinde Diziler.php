<?php
session_start();
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
$_SESSION["kulanici"] = array("adi"=>"ataberk", "soyadi"=>"erday" , "mailadresi" =>"ataberkerrday@gmail.com", "telefon" =>"0544 386 97 94");

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
------------------------------------*/
/*
$_SESSION["kulanici"] = array("adi"=>"ataberk", "soyadi"=>"erday" , "mailadresi" =>"ataberkerrday@gmail.com", "telefon" =>"0544 386 97 94");
$_SESSION["sepet"] = array("ID"=>12, "sepettutari"=>1200.50 , "parabirimi" =>"TL", "odemeturu" =>"banka havalesi");

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
-----------------------------------*/
/*
$_SESSION["kulanici"] = array("adi"=>"ataberk", "soyadi"=>"erday" , "mailadresi" =>"ataberkerrday@gmail.com", "telefon" =>"0544 386 97 94");
$_SESSION["sepet"] = array("ID"=>12, "sepettutari"=>1200.50 , "parabirimi" =>"TL", "odemeturu" =>"banka havalesi");

echo "<pre>";
print_r($_SESSION["kulanici"]);
echo "</pre>";
-----------------------------------------*/
/*
$_SESSION["kulanici"] = array("adi"=>"ataberk", "soyadi"=>"erday" , "mailadresi" =>"ataberkerrday@gmail.com", "telefon" =>"0544 386 97 94");
$_SESSION["sepet"] = array("ID"=>12, "sepettutari"=>1200.50 , "parabirimi" =>"TL", "odemeturu" =>"banka havalesi");

echo "<pre>";
print_r($_SESSION["kulanici"]["telefon"]);
echo "</pre>";
--------------------------------------*/

$_SESSION["kulanici"] = array("adi"=>"ataberk", "soyadi"=>"erday" , "mailadresi" =>"ataberkerrday@gmail.com", "telefon" =>"0544 386 97 94");
$_SESSION["sepet"] = array("ID"=>12, "sepettutari"=>1200.50 , "parabirimi" =>"TL", "odemeturu" =>"banka havalesi");

echo "<pre>";
print_r($_SESSION["kulanici"]["telefon"]);
echo "</pre>";






?>
</body>
</html>	