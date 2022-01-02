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
    LEFT_JOIN           :   MySQL sunucusundaki database icerisinde bulunan herhangi iki veya daha fazla tablonun soldaki tabloya gore birbirleri ile iliskilendirilmesi icin kullanilir
    INNER_JOIN          :   MySQL sunucusundaki database icerisinde bulunan herhangi iki veya daha fazla tablonun eslesen degerlerinin birbirleri ile iliskilendirilmesi icin kullanilir.
    RIGHT_JOIN          :   MySQL sunucusundaki database icerisinde bulunan herhangi iki veya daha fazla tablonun sagdaki tabloya gore birbirleri ile iliskilendirilmesi icin kullanilir
    NATURAL_JOIN        :   MySQL sunucusundaki database icerisinde bulunan herhangi iki veya daha fazla tablonun eslesen degerlerinin biribirleri ile otomatik iliskilendirilmesi icin kullanilir.

    USING               :   MySQL sunucusundaki database icerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile iliskilendirilmesi sirasinda ortak sutun kosulunu tanimlamak / belirtmek icin kullanilir.
    ON                  :   MySQL sunucusundaki database icerisinde bulunan herhangi iki veya daha fazla tablonun birbirleri ile iliskilendirilmesi sirasinda sutun kosulunu tanimlamak / belirtmek icin kullanilir.

                                                            NESNESEL YAPI KULLANIMLARIDA AYNIDIR!!!!
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if(mysqli_connect_errno()){
        echo "veritabani baglanti hatasi!";
        echo "hata aciklamsi : " . mysqli_conncet_error() . "<br />";
        die();
    }
    $sorguA = mysqli_query($veritabanibaglantisi, "SELECT * FROM uyeler");
    if($sorguA){
        $kayitsayisi = mysqli_num_rows($sorguA);
            if ($kayitsayisi>0) {
                while ($kayitlar=mysqli_fetch_assoc($sorguA)) {
                    $gelenid        = $kayitlar["id"];
                    $gelenadisoyadi = $kayitlar["adisoyadi"];
                    $gelenyas       = $kayitlar["yas"];
                    $gelensehir     = $kayitlar["sehir"];
                    
                    $sorguB = mysqli_query($veritabanibaglantisi, "SELECT * FROM istatistikler WHERE uyeid=" . $gelenid . " LIMIT 1");
                        if ($sorguB) {
                                $kayitsayisiB = mysqli_num_rows($sorguB);
                                    if ($kayitsayisiB>0) {
                                            $kayit = mysqli_fetch_assoc($sorguB);

                                            $gelensiparissayisi        = $kayit["siparissayisi"];
                                            $gelensiteyegirissayisi    = $kayit["siteyegirissayisi"];                                        
                                    }else {
                                        $gelensiparissayisi            = "";
                                            $gelensiteyegirissayisi    = "";       
                                       }
                        }
                        echo "uyenin id degeri : " . $gelenid . "<br />";
                        echo "uyenin isim soyisim degeri : " . $gelenadisoyadi . "<br />";
                        echo "uyenin yas degeri : " . $gelenyas . "<br />";
                        echo "uyenin sehir degeri : " . $gelensehir . "<br />";
                        echo "uyenin siparis sayisi degeri : " . $gelensiparissayisi . "<br />";
                        echo "uyenin siteye giris sayisi degeri : " . $gelensiteyegirissayisi . "<br /><br />";
                }                
            }else {
                echo "kayit yok";
            }
    }else {
        echo "sorgu hatasi";
    }
    mysqli_close($veritabanibaglantisi);
--------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if(mysqli_connect_errno()){
        echo "veritabani baglanti hatasi!";
        echo "hata aciklamsi : " . mysqli_conncet_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi, "SELECT * FROM uyeler INNER JOIN istatistikler ON uyeler.id = istatistikler.uyeid");
    if($sorgu){
        $kayitsayisi = mysqli_num_rows($sorgu);
            if ($kayitsayisi>0) {
                while ($kayitlar=mysqli_fetch_assoc($sorgu)) {
                    
                    echo "uyenin id degeri : " . $kayitlar["id"] . "<br />";
                        echo "uyenin isim soyisim degeri : " . $kayitlar["adisoyadi"] . "<br />";
                        echo "uyenin yas degeri : " . $kayitlar["yas"] . "<br />";
                        echo "uyenin sehir degeri : " . $kayitlar["sehir"] . "<br />";
                        echo "uyenin siparis sayisi degeri : " . $kayitlar["siteyegirissayisi"] . "<br />";
                        echo "uyenin siteye giris sayisi degeri : " . $kayitlar["siparissayisi"] . "<br /><br />";
                    }                
            }else {
                echo "kayit yok";
            }
    }else {
        echo "sorgu hatasi";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if(mysqli_connect_errno()){
        echo "veritabani baglanti hatasi!";
        echo "hata aciklamsi : " . mysqli_conncet_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi, "SELECT 
    uyeler.id AS uyeid, 
     uyeler.adisoyadi AS uyeadsoyad, 
     uyeler.yas AS uyeyas, 
     uyeler.sehir AS uyesehir, 
     istatistikler.id AS istatistikid,
     istatistikler.uyeid AS istatistikuyeid,
     istatistikler.siteyegirissayisi AS istatistikgirissayisi, 
     istatistikler.siparissayisi AS istatistiksiparissayisi,
     siparisler.id AS siparisid,
     siparisler.uyeid AS siparisuyeid,
     siparisler.urunadi AS siparisurunadi,
     siparisler.urunfiyati AS siparislerurunfiyati

       FROM uyeler INNER JOIN istatistikler ON uyeler.id = istatistikler.uyeid INNER JOIN siparisler ON uyeler.id=siparisler.uyeid");
    if($sorgu){
        $kayitsayisi = mysqli_num_rows($sorgu);
        if ($kayitsayisi>0) {
                while ($kayitlar=mysqli_fetch_assoc($sorgu)) {
                    
                    echo "uyenin id degeri : " . $kayitlar["uyeid"] . "<br />";
                    echo "uyenin isim soyisim degeri : " . $kayitlar["uyeadsoyad"] . "<br />";
                        echo "uyenin yas degeri : " . $kayitlar["uyeyas"] . "<br />";
                        echo "uyenin sehir degeri : " . $kayitlar["uyesehir"] . "<br />";
                        echo "uyenin siparis sayisi degeri : " . $kayitlar["istatistikgirissayisi"] . "<br />";
                        echo "uyenin siteye giris sayisi degeri : " . $kayitlar["istatistiksiparissayisi"] . "<br />";
                        echo "uyenin aldigi urun adi degeri : " . $kayitlar["siparisurunadi"] . "<br />";
                        echo "uyenin aldigi urun fiyati degeri : " . $kayitlar["siparislerurunfiyati"] . "<br /><br />";
                    }                
                }else {
                echo "kayit yok";
            }
        }else {
            echo "sorgu hatasi";
        }
        mysqli_close($veritabanibaglantisi);
        --------------------------------------------------------------------------------*/
        
        $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    if(mysqli_connect_errno()){
        echo "veritabani baglanti hatasi!";
        echo "hata aciklamsi : " . mysqli_conncet_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi, "SELECT * FROM uyeler LEFT JOIN siparisler ON uyeler.id = siparisler.uyeid");
    if($sorgu){
        $kayitsayisi = mysqli_num_rows($sorgu);
            if ($kayitsayisi>0) {
                    while ($kayitlar=mysqli_fetch_assoc($sorgu)) {
                    
                        echo "uyenin id degeri : " . $kayitlar["id"] . "<br />";
                        echo "uyenin isim soyisim degeri : " . $kayitlar["adisoyadi"] . "<br />";
                        echo "uyenin yas degeri : " . $kayitlar["yas"] . "<br />";
                        echo "uyenin sehir degeri : " . $kayitlar["sehir"] . "<br />";
                        echo "uyenin aldigi urunadi degeri : " . $kayitlar["urunadi"] . "<br />";
                        echo "uyenin aldigi urun fiyati degeri : " . $kayitlar["urunfiyati"] . "<br /><br />";
                    }                
            }else {
                echo "kayit yok";
            }
    }else {
        echo "sorgu hatasi";
    }
    mysqli_close($veritabanibaglantisi);

        
                    // VS VS SEKLINDE HEPSI BU SEKILDE DEVAM EDER!!!!!!!!!!!!!!!!!!!!!!! BI BOK YAPTIGI YOK BU ISLEMLERIN!

    ?>
</body>
</html>	