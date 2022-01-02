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
    standart menuler :<br />
    <a href="index.php?sayfa=AnaSayfa">Ana Sayfa</a> | 
    <a href="index.php?sayfa=Urunler">Urunler</a> | 
    <a href="index.php?sayfa=Hakkimizda">Hakkimizda</a> | 
    <a href="index.php?sayfa=Sozlesmeler">Sozlesmeler</a> | 
    <a href="index.php?sayfa=Iletisim">Iletisim</a> <br /><br />


    manipule menuler :<br />
    <a href="AnaSayfa">Ana Sayfa</a> | 
    <a href="Urunler">Urunler</a> | 
    <a href="Hakkimizda">Hakkimizda</a> | 
    <a href="Sozlesmeler">Sozlesmeler</a> | 
    <a href="Iletisim">Iletisim</a> <br /><br />


    <?php 
    if (isset($_GET["sayfa"])) {
        $gelensayfadegeri = $_GET["sayfa"];
    } else {
        $gelensayfadegeri = "";
    }
    echo $gelensayfadegeri;
    
    if ($gelensayfadegeri == "AnaSayfa") {
        require_once("anasayfa.php");
    } elseif ($gelensayfadegeri=="Urunler") {
        require_once("urunler.php");
    }elseif ($gelensayfadegeri=="Hakkimizda") {
        require_once("hakkimizda.php");
    }elseif ($gelensayfadegeri=="Sozlesmeler") {
        require_once("sozlesmeler.php");
    }elseif ($gelensayfadegeri=="Iletisim") {
        require_once("iletisim.php");
    }
    
    
    ?>






</body>
</html>	