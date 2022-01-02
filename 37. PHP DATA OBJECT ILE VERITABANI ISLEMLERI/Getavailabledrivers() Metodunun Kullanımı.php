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
    /*
    getAvailableDrivers()       :   PHP yazilimi icerisinde sisteme tanimli olan ve kullanilabilir PDO suruculeri listesini bulur ve buldugu degerlerden 
    yeni bir dizi olsuturarak, olusturdugu degeri geriye dondurur.
    */

    $degerler = PDO::getAvailableDrivers();
    echo "<pre>";
    print_r($degerler);
    echo "</pre>";







    ?>
</body>
</html>	