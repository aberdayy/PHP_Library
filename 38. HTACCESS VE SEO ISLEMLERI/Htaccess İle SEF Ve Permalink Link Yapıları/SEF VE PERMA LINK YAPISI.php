<?php
// header("Refresh:5")
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
    function SEO($deger){
        
        $icerik       = trim($deger);
		$degisecekler = array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
		$degisenler   =	array("c", "c", "g", "g", "i", "i", "o", "o", "s", "s", "u", "u");
        $icerik       = str_replace($degisecekler, $degisenler , $icerik);
        $icerik       = mb_strtolower($icerik, "UTF-8");
        $icerik       = preg_replace("/[^a-z0-9]/","-",$icerik);  
        $icerik       =preg_replace("/-+/","-",$icerik);  
        $icerik       = trim($icerik,"-");
        return $icerik;
    }
    
    $urun  = "+Sony KD-55XE7005 139 cm 4K Ultra HD Dahili Uydu Alıcılı Smart LED TV % ' $ % & + ?   388858701))";
 
    echo "orjinal metin : <br />";
    echo $urun . "<br /><br />";

    echo "SEF Link / Perma Link  yapisi : <br />";
    echo SEO($urun);
    
    
    
    ?>






</body>
</html>	