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
ALTER TABLE             :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir sutun eklenecegini herhangi bir sutunun silinecegini veya herhangi bir sutunun adinin yada
yapisinin degistirilecegini belirtmek icin kullanilir.

ADD / ADD COLUMN        :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir sutun eklemek icin kullanilir.
    FIRST       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya eklecek olan yeni sutunun diger tum sutunlarin en basina eklenmesi gerektigini belirtmek icin kullanilir.
    AFTER       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya eklecek olan yeni sutunun belirtilecek olan sutundan bbir sonra eklenmesi gerektigini belirtmek icin kullanilir.
CHANGE / CHANGE COLUMN  :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablodaki herahngi bir sutunun adini yada yapisini degistirmek icin kullanilir.
MODIFY / MODIFY COLUMN  :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablodaki herahngi bir sutunun yapisini degistirmek icin kullanilir.
DROP / DROP COLUMN      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablodaki herahngi bir sutunu silmek icin kullanilir.   
*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
	
if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
    ADD COLUMN baba varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    ADD COLUMN sehir varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    ADD COLUMN kolu tinyint(1) UNSIGNED NOT NULL
");
    if($sorgu){
        echo "Sütun eklendi";
    }else{
        echo "Sorgu hatası";
    }

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
ADD COLUMN soyad varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST
");
    if($sorgu){
        echo "Sütun eklendi";
    }else{
        echo "Sorgu hatası";
    }

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
ADD COLUMN baba varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST,
    ADD COLUMN sehir varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL FIRST,
    ADD COLUMN kolu tinyint(1) UNSIGNED NOT NULL FIRST
");
    if($sorgu){
        echo "Sütun eklendi";
    }else{
        echo "Sorgu hatası";
    }

mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
    ADD COLUMN cinsiyet varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
    ADD COLUMN sehir varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
    ADD COLUMN durumu tinyint(1) UNSIGNED NOT NULL FIRST
    ");
    if($sorgu){
        echo "Sütun eklendi";
    }else{
        echo "Sorgu hatası";
    }
    
    mysqli_close($veritabanibaglantisi);
------------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
ADD COLUMN soyad varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER id
");
    if($sorgu){
        echo "Sütun eklendi";
    }else{
        echo "Sorgu hatası";
    }

    mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
    ADD COLUMN cinsiyet varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER id,
    ADD COLUMN sehir varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER cinsiyet,
    ADD COLUMN durumu tinyint(1) UNSIGNED NOT NULL FIRST
    ");
    if($sorgu){
        echo "Sütun eklendi";
    }else{
        echo "Sorgu hatası";
    }
    
    mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme CHANGE burasi dogumtarihi char(10)");
    if($sorgu){
        echo "Sütun guncellendi";
    }else{
        echo "Sorgu hatası";
    }

mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme CHANGE dogumtarihi ataberk  char(10)");
    if($sorgu){
        echo "Sütun guncellendi";
    }else{
        echo "Sorgu hatası";
    }

    mysqli_close($veritabanibaglantisi);
-----------------------------------------------------------------------------------*/
/*
$veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

if(mysqli_connect_errno()){
    echo "Bağlantı hatası<br />";
    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
}else{
    echo "Bağlantı kuruldu<br />";
}

$sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
CHANGE ataberk adres varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
CHANGE id telefonnumarasi char(11) NOT NULL");
    if($sorgu){
        echo "Sütun guncellendi";
    }else{
        echo "Sorgu hatası";
    }
    
    mysqli_close($veritabanibaglantisi);
    -----------------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    
    if(mysqli_connect_errno()){
        echo "Bağlantı hatası<br />";
        echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
    }else{
        echo "Bağlantı kuruldu<br />";
    }
    
    $sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
    MODIFY telefonnumarasi varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
    if($sorgu){
            echo "Sütun yapisi guncellendi";
        }else{
            echo "Sorgu hatası";
        }
    
        mysqli_close($veritabanibaglantisi);
        
        -----------------------------------------------------------------------------------*/
        /*
        $veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
        mysqli_set_charset($veritabanibaglantisi,"UTF8");
        
        if(mysqli_connect_errno()){
            echo "Bağlantı hatası<br />";
            echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
        }else{
            echo "Bağlantı kuruldu<br />";
        }
        
        $sorgu	=	mysqli_query($veritabanibaglantisi, "ALTER TABLE deneme
        MODIFY telefonnumarasi varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
        MODIFY adres tinyint(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL");
        if($sorgu){
            echo "Sütun yapisi guncellendi";
            }else{
                echo "Sorgu hatası";
            }
        
            mysqli_close($veritabanibaglantisi);
            -----------------------------------------------------------------------------------*/
            /*
            $veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
            mysqli_set_charset($veritabanibaglantisi,"UTF8");
            
            if(mysqli_connect_errno()){
                echo "Bağlantı hatası<br />";
                echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
            }else{
                echo "Bağlantı kuruldu<br />";
            }
            
            $sorgu	=	mysqli_query($veritabanibaglantisi, "            ALTER TABLE deneme DROP telefonnumarasi     ");
            if($sorgu){
                echo "Sütun silindi";
                }else{
                    echo "Sorgu hatası";
                }
                
                mysqli_close($veritabanibaglantisi);
                -----------------------------------------------------------------------------------*/
      
                $veritabanibaglantisi       =   mysqli_connect("localhost","root","root","ataberk");
                mysqli_set_charset($veritabanibaglantisi,"UTF8");
                
                if(mysqli_connect_errno()){
                    echo "Bağlantı hatası<br />";
                    echo "Hata açıklaması : " . mysqli_connect_error() . "<br />";
                }else{
                    echo "Bağlantı kuruldu<br />";
                }
                
                $sorgu	=	mysqli_query($veritabanibaglantisi, "            ALTER TABLE deneme 
                DROP telefonnumarasi,
                DROP  adres
                
                ");
                if($sorgu){
                    echo "Sütun silindi";
                    }else{
                        echo "Sorgu hatası";
                    }
                    
                    mysqli_close($veritabanibaglantisi);



























?>
</body>
</html>	