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
   prepare()        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore query hazirlamak icin kullanilir
   bind_param()     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore prepare() metodu kullanilarak hazirlanmis olan queryi derlemek(parametre veri turu vs.)
    icin kullanilir.
        i           :   integer
        d           :   double
        s           :   string
        b           :   blob
   execute()        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore prepare() metodu kullanilarak hazirlanmis olan queryi calistirmak icin kullanilir.
   bind_result()    :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun veri okuma islemi icin prepare() metodu kullanilarak hazirlanmis ve execute() metodu kullanilarak calistirilmis
   olan query'nin sonuclarini almak icin kullanilir.
   fetch()          :   MySQL sunucundaki database icerisinde bulunan hernhangir bir tablonun veri okuma islemi icin prepare() metodu kullanilarak hazirlanmis, execute metodu kullanilarak calistirilmis
    ve bind_result() metodu kullanilarak sonuclari alinmis olan query'nin verilerini okumak icin kullanilir
   */
  /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
    $veritabanibaglantisi->set_charset("UTF8");
    
    $sorgu = $veritabanibaglantisi->prepare("SELECT * FROM uyeler");
        if ($sorgu) {
            $sorgu->execute();
            $sorgu->bind_result($kayitID, $kayitAdsoyad, $kayitEmail, $kayitSifre, $kayitTelefon, $kayitYas, $kayitCinsiyet, $kayitSehir, $kayitTarih); //sirasi sutunlarla birebir eslesmeli!!
                while ($sorgu->fetch()) {
                    echo "ID degeri : " . $kayitID . "<br />"; 
                    echo "Ad Soyad degeri : " . $kayitAdsoyad . "<br />"; 
                    echo "Email degeri : " . $kayitEmail . "<br />"; 
                    echo "Sifre degeri : " . $kayitSifre . "<br />"; 
                    echo "Telefon degeri : " . $kayitTelefon . "<br />"; 
                    echo "Yas degeri : " . $kayitYas . "<br />"; 
                    echo "Cinsiyet degeri : " . $kayitCinsiyet . "<br />"; 
                    echo "Sehir degeri : " . $kayitSehir . "<br />"; 
                    echo "Tarih degeri : " . $kayitTarih . "<br /><br />"; 

                    
                }
        }else{
            echo "sh";
        }
    
    
    $veritabanibaglantisi->close();
    -----------------------------------------------------------------------------*/
    /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
    $veritabanibaglantisi->set_charset("UTF8");
    
    $sorgu = $veritabanibaglantisi->prepare("SELECT adisoyadi, emailadresi, yas FROM uyeler");
        if ($sorgu) {
            $sorgu->execute();
            $sorgu->bind_result($kayitAdsoyad, $kayitEmail,$kayitYas); //sirasi sutunlarla birebir eslesmeli!!
            while ($sorgu->fetch()) {
                    echo "Ad Soyad degeri : " . $kayitAdsoyad . "<br />"; 
                    echo "Email degeri : " . $kayitEmail . "<br />"; 
                    echo "Yas degeri : " . $kayitYas . "<br /><br />"; 

                    
                }
            }else{
                echo "sh";
            }
            
            
            $veritabanibaglantisi->close();
    -----------------------------------------------------------------------------*/
    /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
    $veritabanibaglantisi->set_charset("UTF8");
    
    $sorgu = $veritabanibaglantisi->prepare("SELECT * FROM uyeler WHERE id>?");
        if ($sorgu) {
            $idkosulu=5;
            $sorgu->bind_param("i",$idkosulu);
            $sorgu->execute();
            $sorgu->bind_result($kayitID, $kayitAdsoyad, $kayitEmail, $kayitSifre, $kayitTelefon, $kayitYas, $kayitCinsiyet, $kayitSehir, $kayitTarih); //sirasi sutunlarla birebir eslesmeli!!
                while ($sorgu->fetch()) {
                    echo "ID degeri : " . $kayitID . "<br />"; 
                    echo "Ad Soyad degeri : " . $kayitAdsoyad . "<br />"; 
                    echo "Email degeri : " . $kayitEmail . "<br />"; 
                    echo "Sifre degeri : " . $kayitSifre . "<br />"; 
                    echo "Telefon degeri : " . $kayitTelefon . "<br />"; 
                    echo "Yas degeri : " . $kayitYas . "<br />"; 
                    echo "Cinsiyet degeri : " . $kayitCinsiyet . "<br />"; 
                    echo "Sehir degeri : " . $kayitSehir . "<br />"; 
                    echo "Tarih degeri : " . $kayitTarih . "<br /><br />"; 

                    
                }
        }else{
            echo "sh";
        }
        
    
        $veritabanibaglantisi->close();
        -----------------------------------------------------------------------------*/
        /*
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        
        $sorgu = $veritabanibaglantisi->prepare("SELECT * FROM uyeler WHERE id>? AND id<?");
        if ($sorgu) {
                $birinciidkosulu=2;
                $ikinciidkosulu=5;
                $sorgu->bind_param("ii",$birinciidkosulu, $ikinciidkosulu); // muhakkak degiskenden gelmeli
                $sorgu->execute();
                $sorgu->bind_result($kayitID, $kayitAdsoyad, $kayitEmail, $kayitSifre, $kayitTelefon, $kayitYas, $kayitCinsiyet, $kayitSehir, $kayitTarih); //sirasi sutunlarla birebir eslesmeli!!
                while ($sorgu->fetch()) {
                    echo "ID degeri : " . $kayitID . "<br />"; 
                        echo "Ad Soyad degeri : " . $kayitAdsoyad . "<br />"; 
                        echo "Email degeri : " . $kayitEmail . "<br />"; 
                        echo "Sifre degeri : " . $kayitSifre . "<br />"; 
                        echo "Telefon degeri : " . $kayitTelefon . "<br />"; 
                        echo "Yas degeri : " . $kayitYas . "<br />"; 
                        echo "Cinsiyet degeri : " . $kayitCinsiyet . "<br />"; 
                        echo "Sehir degeri : " . $kayitSehir . "<br />"; 
                        echo "Tarih degeri : " . $kayitTarih . "<br /><br />"; 
                        
                        
                    }
            }else{
                echo "sh";
            }
            
        
            $veritabanibaglantisi->close();
            -----------------------------------------------------------------------------*/
            /*
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        
        $sorgu = $veritabanibaglantisi->prepare("INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon , yas , cinsiyet , sehir) values ('ataberk erdayyyy','ifo@ataberk.com','yildiz','00000000000','19','erkek','istanbul') ");
        if ($sorgu) {
                $sorgu->execute();
                if ($sorgu) {
                    echo "eklendi";
                }else{
                    echo "soegu";
                }
            }else{
                echo "sh";
            }
            
        
            $veritabanibaglantisi->close();
            -----------------------------------------------------------------------------*/
            /*
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        $kayitAdsoyad = "demo demo";
        $kayitEmail   = "demo@mail.com";
        $kayitSifre     =   "demo";
        $kayitTelefon   = "5443870905";
        $kayitYas = 19;
        $kayitCinsiyet = "erkek";
        $kayitSehir = "adana";
        $sorgu = $veritabanibaglantisi->prepare("INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon , yas , cinsiyet , sehir) values (?,?,?,?,?,?,?) ");

        if ($sorgu) {
            $sorgu->bind_param("ssssiss",$kayitAdsoyad,$kayitEmail,$kayitSifre,$kayitTelefon,$kayitYas,$kayitCinsiyet,$kayitSehir);
                $sorgu->execute();
                if ($sorgu) {
                    echo "eklendi";
                }else{
                    echo "soegu";
                }
            }else{
                echo "sh";
            }
            
        
            $veritabanibaglantisi->close();
            -----------------------------------------------------------------------------*/
            /*
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            
            $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
            $veritabanibaglantisi->set_charset("UTF8");
       
        $guncelle = $veritabanibaglantisi->prepare("UPDATE uyeler SET adisoyadi='degisen isim ' WHERE id=11 ");

        if ($guncelle) {
            $guncelle->execute();
                if ($guncelle) {
                    echo "guncellendi";
                }else{
                    echo "soegu";
                }
            }else{
                echo "sh";
            }
            
            
            $veritabanibaglantisi->close();
        -----------------------------------------------------------------------------*/
        /*
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
    $kayitAdsoyad = "demo demo";
    $kayitEmail   = "demo@mail.com";
    $kayitSifre     =   "demo";
    $kayitTelefon   = "5443870905";
    $kayitYas = 19;
    $kayitCinsiyet = "erkek";
    $kayitSehir = "adana";
    $kayitID = 6;
    $guncelle = $veritabanibaglantisi->prepare("UPDATE uyeler SET adisoyadi=?, sehir=?, yas=? WHERE id=? ");
    
    if ($guncelle) {
        $guncelle->bind_param("ssii", $kayitAdsoyad, $kayitSehir, $kayitYas , $kayitID);
        $guncelle->execute();
            if ($guncelle) {
                echo "guncellendi";
            }else{
                echo "soegu";
            }
        }else{
            echo "sh";
        }
        
        
        $veritabanibaglantisi->close();
        -----------------------------------------------------------------------------*/
        /*
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        $kayitAdsoyad = "demo demo";
        $kayitEmail   = "demo@mail.com";
        $kayitSifre     =   "demo";
    $kayitTelefon   = "5443870905";
    $kayitYas = 19;
    $kayitCinsiyet = "erkek";
    $kayitSehir = "adana";
    $kayitID = 6;
    $guncelle = $veritabanibaglantisi->prepare("UPDATE uyeler SET adisoyadi=REPLACE(adisoyadi, 'a', 'A') WHERE id<8 ");
    
    if ($guncelle) {
        $guncelle->execute();
            if ($guncelle) {
                echo "guncellendi";
            }else{
                echo "soegu";
            }
        }else{
            echo "sh";
        }
        
        
        $veritabanibaglantisi->close();
        -----------------------------------------------------------------------------*/
        /*
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        
        $aranan = "Y";
        $yapilacak = "y";
    $birinciidkosulu = 5;

    $guncelle = $veritabanibaglantisi->prepare("UPDATE uyeler SET adisoyadi=REPLACE(adisoyadi, ?, ?) WHERE id<? ");
    
    if ($guncelle) {
        $guncelle->bind_param("ssi",$aranan, $yapilacak, $birinciidkosulu );
        $guncelle->execute();
        if ($guncelle) {
            echo "guncellendi";
            }else{
                echo "soegu";
            }
        }else{
            echo "sh";
        }
        
        
        $veritabanibaglantisi->close();
        -----------------------------------------------------------------------------*/
        /*
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        
        $aranan = "Y";
        $yapilacak = "y";
        $birinciidkosulu = 5;

        $guncelle = $veritabanibaglantisi->prepare("DELETE FROM uyeler WHERE id>1 and id<5 ");
    
        if ($guncelle) {
            $guncelle->execute();
        if ($guncelle) {
            echo "guncellendi";
            }else{
                echo "soegu";
            }
        }else{
            echo "sh";
        }
        
        
        $veritabanibaglantisi->close();
        
        -----------------------------------------------------------------------------*/
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        $veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
        $veritabanibaglantisi->set_charset("UTF8");
        
        
        $birinciidkosulu = 6;
        $ikinciidkosulu = 9;

        $guncelle = $veritabanibaglantisi->prepare("DELETE FROM uyeler WHERE id>? and id<? ");
    
        if ($guncelle) {
            $guncelle->bind_param("ii",$birinciidkosulu,$ikinciidkosulu);
            $guncelle->execute();
        if ($guncelle) {
            echo "guncellendi";
            }else{
                echo "soegu";
            }
        }else{
            echo "sh";
        }
        
        
        $veritabanibaglantisi->close();
        
        
        



            
            
























    

    ?>
</body>
</html>	