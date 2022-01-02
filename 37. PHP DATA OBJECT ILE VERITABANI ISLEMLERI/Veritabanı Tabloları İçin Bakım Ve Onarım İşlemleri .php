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
    CHECK       :   MySQL sunucusundaki database icerisindeki  herhangi bir tablonun kontrol edilmesi icin kullanilir.
    ANALYZE     :   MySQL sunucusundaki database icerisindeki  herhangi bir tablonun cozimlenmesi ve analiz edilmesi icin kullanilir.   
    REPAIR      :   MySQL sunucusundaki database icerisindeki  herhangi bir tablonun onarilmasi icin kullanilir.
    OPTIMIZE    :   MySQL sunucusundaki database icerisindeki  herhangi bir tablonun optimize edilmesi icin kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "succesfully completed <br />";
    } catch (PDOException $error) {
        echo "error code : " . $error->getMessage();
    }
    $sorguA = $db->query("CHECK TABLE uyeler");
    $sorguB = $db->query("ANALYZE TABLE uyeler");
    $sorguC = $db->query("REPAIR TABLE uyeler");
    $sorguD = $db->query("OPTIMIZE TABLE uyeler");
    if (($sorguA == true) and($sorguB == true) and ($sorguC == true) and ($sorguD == true)) {
        echo "tablo bakimi gerceklesti";
    } else {
        echo "sorgu hatasi";
    }
    

    $db = null;
    -----------------------------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "succesfully completed <br />";
    } catch (PDOException $error) {
        echo "error code : " . $error->getMessage();
    }

    $sorgu = $db->query("SHOW TABLES");
    if ($sorgu) {
        foreach ($sorgu as $tablolar) {
            $sorguA = $db->query("CHECK TABLE " . $tablolar[0]);
            $sorguB = $db->query("ANALYZE TABLE ". $tablolar[0]);
            $sorguC = $db->query("REPAIR TABLE ". $tablolar[0]);
            $sorguD = $db->query("OPTIMIZE TABLE ". $tablolar[0]);
            if (($sorguA == true) and($sorguB == true) and ($sorguC == true) and ($sorguD == true)) {
                echo $tablolar[0]. " isimli tablo bakimi gerceklesti <br />";
            } else {
                echo "sorgu hatasi";
            }
        }
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
    -----------------------------------------------------------------*/
    try {
        $db = new PDO("mysql:host=localhost;charset=utf8;","root","root");
        echo "succesfully completed <br />";
    } catch (PDOException $error) {
        echo "error code : " . $error->getMessage();
    }

    $sorgu = $db->query("SHOW TABLES FROM RDYmedia");
    if ($sorgu) {
        foreach ($sorgu as $tablolar) {
            $sorguA = $db->query("CHECK TABLE RDYmedia." . $tablolar[0]);
            $sorguB = $db->query("ANALYZE TABLE RDYmedia.". $tablolar[0]);
            $sorguC = $db->query("REPAIR TABLE RDYmedia.". $tablolar[0]);
            $sorguD = $db->query("OPTIMIZE TABLE RDYmedia.". $tablolar[0]);
            if (($sorguA == true) and($sorguB == true) and ($sorguC == true) and ($sorguD == true)) {
                echo $tablolar[0]. " isimli tablo bakimi gerceklesti <br />";
            } else {
                echo "sorgu hatasi";
            }
        }
    } else {
        echo "sorgu hatasi";
    }
    
    $db = null;
    
    
    
    
    
    
    ?>



      
    



</body>
</html>	