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
    SHOW TABLES     :   MySQL sunucusundaki database icerisinde bulunan tum tablolarin listesini bulmak icin kullanilir.
    SHOW COLUMNS     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tum sutunlarinin listesini bulmak icin kullanilir.
    */
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basariyla baglanildi <br />";
    } catch (PDOException $error) {
        echo "baglanti kurulamadi hata kodu : " . $error->getMessage();
    }
    
    $sorgu = $db->query("SHOW TABLES");
    if ($sorgu) {
       foreach ($sorgu as $tables) {
        echo "<pre>";
        print_r($tables);
        echo "</pre>";   
        
       }
    } else {
        echo "islem basarisiz";
    }   
    $db = null;
    ------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basariyla baglanildi <br />";
    } catch (PDOException $error) {
        echo "baglanti kurulamadi hata kodu : " . $error->getMessage();
    }
    
    $sorgu = $db->query("SHOW TABLES");
    if ($sorgu) {
        foreach ($sorgu as $tables) {
            echo "tables in RDYmedia = ".$tables[0] . "<br />";        
       }
    } else {
        echo "islem basarisiz";
    }   
    $db = null;
    ------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;charset=utf8;","root","root");
        echo "basariyla baglanildi <br />";
    } catch (PDOException $error) {
        echo "baglanti kurulamadi hata kodu : " . $error->getMessage();
    }
    
    $sorgu = $db->query("SHOW TABLES FROM RDYmedia");
    if ($sorgu) {
        foreach ($sorgu as $tables) {
            echo "tables in RDYmedia = ".$tables[0] . "<br />";        
       }
    } else {
        echo "islem basarisiz";
    }   
    $db = null;
    ------------------------------------------*/
    //------------------------------------------*/------------------------------------------*/------------------------------------------*/------------------------------------------*/
    /*
    try {
        $db = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basariyla baglanildi <br />";
    } catch (PDOException $error) {
        echo "baglanti kurulamadi hata kodu : " . $error->getMessage();
    }
    
    $sorguA = $db->query("SHOW TABLES");
    if ($sorguA) {
        foreach ($sorguA as $tables) {
            echo "tables in RDYmedia = ".$tables[0] . "<br />";       
            $sorguB = $db->query("SHOW COLUMNS FROM " . $tables[0]);
                foreach ($sorguB as $columns) {
                    echo "columns in inside of RDYmedia tables = ".$columns[0] . "<br />";       
                } 
                echo "<br />";
            }
        } else {
            echo "islem basarisiz";
        }   
        $db = null;
        ------------------------------------------*/

    try {
        $db = new PDO("mysql:host=localhost;charset=utf8;","root","root");
        echo "basariyla baglanildi <br />";
    } catch (PDOException $error) {
        echo "baglanti kurulamadi hata kodu : " . $error->getMessage();
    }
    
    $sorguA = $db->query("SHOW TABLES FROM RDYmedia");
    if ($sorguA) {
        foreach ($sorguA as $tables) {
            echo "tables in RDYmedia = ".$tables[0] . "<br />";       
            $sorguB = $db->query("SHOW COLUMNS FROM RDYmedia." . $tables[0]);
                foreach ($sorguB as $columns) {
                    echo "columns in inside of RDYmedia tables = ".$columns[0] . "<br />";       
                } 
                echo "<br />";
            }
        } else {
            echo "islem basarisiz";
        }   
        $db = null;
       
    
    
    
    
    
    ?>



      
    



</body>
</html>	