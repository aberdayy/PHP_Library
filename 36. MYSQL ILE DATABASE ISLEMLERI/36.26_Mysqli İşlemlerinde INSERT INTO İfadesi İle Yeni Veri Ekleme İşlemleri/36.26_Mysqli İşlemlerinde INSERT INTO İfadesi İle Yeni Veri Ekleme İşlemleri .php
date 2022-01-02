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
    INSERT INTO    :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yeni bir kayit satiri ile birlikte verilerinide eklemek icin kullanilir.
    */
   
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");

    $ekle = mysqli_query($veritabanibaglantisi,"INSERT INTO uyeler (adisoyadi, emailadresi, sifre, telefon, yas, cinsiyet, sehir) values ('deneme deneme','deneme@gmail.com','bbbbbbbb','22222333333', '00','notr','notr') ");
        if ($ekle) {
            echo "kayit basariyla eklendi <br /><br />";
        }else {
            echo "kayit eklenemedi!<br /><br />";
        }
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM uyeler ");
        if ($sorgu) {
            $kayitsayisi = mysqli_num_rows($sorgu);    
                if ($kayitsayisi>0) {
                        while ($kayitlar=mysqli_fetch_object($sorgu)) {
                            echo "ID degeri : "             . $kayitlar->id . "<br />";
                            echo "adisoyadi degeri : "      . $kayitlar->adisoyadi . "<br />";
                            echo "emailadresi degeri : "    . $kayitlar->emailadresi . "<br />";
                            echo "sifre degeri : "          . $kayitlar->sifre . "<br />";
                            echo "telefon degeri : "        . $kayitlar->telefon . "<br />";
                            echo "yas degeri : "            . $kayitlar->yas . "<br />";
                            echo "cinsiyet degeri : "       . $kayitlar->cinsiyet . "<br />";
                            echo "sehir degeri : "          . $kayitlar->sehir . "<br />";
                            echo "kayittarihi degeri : "    . $kayitlar->kayittarihi . "<br /><br />";

                        }
                }else {
                    echo "kayit yok!";
                }
        } else {
            echo "sorgu hatasi !";
        }


    mysqli_close($veritabanibaglantisi);






    ?>
</body>
</html>	