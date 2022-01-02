<?php 
 header("Refresh:2")
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
	highlight_string()		:	Belirtilecek olan herhangi bir PHP kodlamasını, PHP'nin yerleşik söz dizimi vurgulayıcısında tanımlanmış olan rekleri kullanarak, vurgulu bir halde ekran çıktılanmasını sağlamak için kullanılır.
*/
/*
highlight_string('<?php phpinfo(); ?><br /><?php echo "Volkan Alakent"; ?>');
-------------------------------*/
/*
highlight_string('<?php phpinfo(); ?>');
echo "<br />";
highlight_string('<?php echo "ataberk erday"; ?>');
-------------------------------*/
/*
highlight_string('<?php
phpinfo();
?>');
-------------------------------*/
highlight_string('<?php
$Isim	=	"Volkan";
echo $Isim;
?>');







    ?>
</body>
</html>	
	
	