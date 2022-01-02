<?php 
require_once("ayarlar.php")
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
<form action="sonuc.php" method="post">
    kullanici adi : <br />
<input type="text" name="kullanicininAdi"><br />
     sifre : <br />
<input type="password" name="kullanicininSifresi"><br />
<input type="submit" value="giris yap">
</form>

</body>
</html>	