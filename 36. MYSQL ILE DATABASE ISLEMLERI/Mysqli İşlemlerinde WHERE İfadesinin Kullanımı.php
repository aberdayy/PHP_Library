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
    WHERE   :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun islem esnasinda tum verilerini islemek yerine sadece kosula bagli verilerin islemek istenildigini belirtmek icin kullanilir. 
                                    NESNE YAPISIYLADA KULLANIMLARI TAMAMEN AYNIDIR!
    */
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas=18");
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";

        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas!=18");
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas>38");
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas<38");
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE isim LIKE '%kan%'"); //%kan% = basi sonu kan olur. %kan = basinda herhangi bisey olur ama sonu kan olacak. kan% = basi kan olacak ama sonu fark etmez.
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE isim LIKE '%kan%'");
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE isim NOT LIKE '%kan%'"); // NOT LIKE = icerisinde ... olmayan anlaminda kullanilir.
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE id IN (5,8,2,11,9)"); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE isim IN ('ataberk','pelin','sila') "); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE isim NOT IN ('ataberk','pelin','sila') "); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE FIND_IN_SET ('10',beceriseviyeleri)"); // FIND_IN_SET metodu sadece virgul ile ayrilmis degerleri kontrol eder!!!
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE FIND_IN_SET ('js',beceriler)"); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE  NOT FIND_IN_SET ('js',beceriler)"); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas BETWEEN 18 AND 25"); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas NOT BETWEEN 18 AND 25"); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
    /*
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE yas IN(20,51) AND beceriler LIKE ('%php%') AND FIND_IN_SET('89',beceriseviyeleri)"); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    --------------------------------------------------------------------------*/
       
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi, "UTF8");
    if (mysqli_connect_errno()) {
        echo "veritabani hatasi : ";
        echo "hata kodu : " . mysqli_connect_error() . "<br />";
        die();
    }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM kisiler WHERE (yas=21 OR yas=18) AND beceriler LIKE ('%php%') "); 
    if ($sorgu) {
        while($kayitlar=mysqli_fetch_assoc($sorgu)){
            echo "id degeri : ".$kayitlar["id"]."<br />";
            echo "isim degeri : ".$kayitlar["isim"]."<br />";
            echo "yas degeri : ".$kayitlar["yas"]."<br />";
            echo "beceriler degeri : ".$kayitlar["beceriler"]."<br />";
            echo "beceriseviyeleri degeri : ".$kayitlar["beceriseviyeleri"]."<br /><br />";
            
        }
    } else {
        echo "sorgu hatasi!";
    }
    mysqli_close($veritabanibaglantisi);
    
    





















    ?>
    </body>
    </html>	