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
    exec()      :   MySQL sunucusuna PDO ile acilmis olan baglanti dahilinde yeni bir sorgu islemi yapmak icin kullanilir. ayrica istenirse sorgu isleminde etkilenen kayit sayisini da bulmak icin 
    kullanilir.

    query()     :   MySQL sunucusuna PDO ile acilmis olan baglanti dahilinde yeni bir sorgu islemi yapmak icin kullanilir. ayrica istenirse sorgu islemi sonucunda donen tum veri degelerini bulur
    ve buldugu degerlerden yeni bir dizi olusturarak olusturdugu dizi degerini geriye dondurur.
    
    FETCH_ASSOC     :   tablonun verilerini okuma islemi sirasinda olsuturulacak olan dizide ilgili tablonun sutun isimleri dizinin anahtarlari olarak tanimlanir ve ilgili verilere sutun isimleri
    ile erisilir.

    FETCH_NUM       :   tablonun verilerini okuma islemi sirasinda olsuturulacak olan dizide dizinin anahtarlari PHP tarafinda otomatik olarak tanimlanir ve ilgili verilere sutun sira numrasi ile erisilir.

    FETCH_BOTH      :   tablonun verilerini okuma islemi sirasinda olsuturulacak olan dizide ilgili tablonun sutun isimleri ile hemde PHP tarafindan tanimlanir ve ilgili verilere sutun isimleri veya sira 
    numaralari ile erisilir.

    FETC_OBJ        :   Tablonun verilerini okuma islemi sirasinda olusturulcak olan nesnede ilgili tablonun sutun isimleri nesnenin ozellikleri olarak tanimlanir ve ilgili verlere sutun isimleri ile erisilir.
    */
/*
    try {
        $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
        echo "veritabanina baglanti kuruldu<br />";
    } catch (PDOException $hata) {
        echo "veritabani baglanti hatasi<br />";
        echo "hata aciklamasi : " . $hata->getMessage();
        die(); 
    }
    
    $sorgu = $veritabanibaglantisi->query("SELECT * FROM uyeler");

    echo "<pre>";
    print_r($sorgu);
    echo "<pre>";

    $veritabanibaglantisi=null;
----------------------------------------------------------*/
/*
try {
    $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "veritabanina baglanti kuruldu<br />";
} catch (PDOException $hata) {
    echo "veritabani baglanti hatasi<br />";
    echo "hata aciklamasi : " . $hata->getMessage();
    die(); 
}

$sorgu = $veritabanibaglantisi->query("SELECT * FROM uyeler", PDO::FETCH_ASSOC);

echo "<pre>";
print_r($sorgu);
echo "<pre>";

$veritabanibaglantisi=null;
----------------------------------------------------------*/

try {
    $veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=RDYmedia;charset=UTF8","root","root");
    echo "veritabanina baglanti kuruldu<br />";
} catch (PDOException $hata) {
    echo "veritabani baglanti hatasi<br />";
    echo "hata aciklamasi : " . $hata->getMessage();
    die(); 
}

$sorgu = $veritabanibaglantisi->exec("SELECT * FROM uyeler");// SELECT ISLEMLERINDE QUERY KULLAN!-----EXEC'I GUNCELLEME SILME VE DEGISTIRME GIBI ISLEMLERDE KULLAN

echo "islemde etkilenen kayit sayisi : " . $sorgu;

$veritabanibaglantisi=null;











    ?>
</body>
</html>	