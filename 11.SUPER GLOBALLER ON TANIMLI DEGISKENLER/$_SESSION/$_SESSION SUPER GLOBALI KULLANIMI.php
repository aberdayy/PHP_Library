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

<?PHP 

echo "extra adiyla tanimli SESSION degeriniz :". $_SESSION["extra"]."<br />";
echo "email adiyla tanimli SESSION degeriniz :". $_SESSION["email"]."<br />";




//$_SESSION["extra"] = "ataberk erday";
//$_SESSION["email"] = "ataberkerday@gmail.com";



?>

</body>
</html>	