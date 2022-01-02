
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
if (!$_GET)/*unlem herhangi bir get istegi yoksa anlami tasir*/ {
?>
<form action="index2.php" method="get">

adiniz soyadiniz : <input type="text" name="adsoyad"><br />
telefon numaraniz : <input type="text" name="telefon"><br />
email adresiniz   :  <input type="email" name="email"><br />
mesajiniz : <textarea name="mesaj"></textarea><br />
<input type="submit" value="gonder">
<?php
}else {
    $gelenadsoaydegeri = $_GET["adsoyad"];
    $gelenetelfondegeri = $_GET["telefon"];
    $gelenemaildegeri = $_GET["email"];
    $gelenmesajdegeri = $_GET["mesaj"];

    echo "adiniz soyadiniz : " . $gelenadsoaydegeri . "<br />";
    echo "telefon numaraniz : " . $gelenetelfondegeri . "<br />";
    echo "email adresiniz : " . $gelenemaildegeri . "<br />";
    echo "mesajiniz : " . $gelenmesajdegeri . "<br />";





}
?>













</form> 







</form>
</body>
</html>	