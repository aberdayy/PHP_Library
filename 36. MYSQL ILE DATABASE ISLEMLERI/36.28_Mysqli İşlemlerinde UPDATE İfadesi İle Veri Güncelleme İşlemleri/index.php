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
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($veritabanibaglantisi,"UTF8");
    
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM uyeler");
        if ($sorgu) {
            $kayitsayisi=mysqli_num_rows($sorgu);
                if ($kayitsayisi>0) {
                        while ($kayitlar = mysqli_fetch_assoc($sorgu)) {
                            echo $kayitlar["id"] . " | ". $kayitlar["adisoyadi"] . " | " . $kayitlar["emailadresi"] . " | " . $kayitlar["sifre"] .
                             " | " . $kayitlar["telefon"] . " | ". $kayitlar["yas"] . " | ". $kayitlar["cinsiyet"] . " | " .$kayitlar["sehir"] . " | " .$kayitlar["kayittarihi"] 
                             . "| <a href='guncelle.php?id=" . $kayitlar["id"] ."'>GUNCELLE</a><br />";
                        }
                }else {
                    echo "kayit yok";
                }
        }else {
            echo "sorgu hatasi";
        }
    mysqli_close($veritabanibaglantisi);

    ?>
</body>
</html>	