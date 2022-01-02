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

<form action="sonuc.php" method="POST">

    adiniz soyadiniz : <input type="text" name="adisoyadi"><br />
    email adresiniz : <input type="email" name="email"><br />
    sifreniz : <input type="password" name="sifre"><br />
    telefonunuz : <input type="text" name="telefon"><br />
    yasiniz : <select name="yas">
        <option value="">lutfen seciniz!</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
    </select> <br />
    cinsiyetiniz : <input type="radio" name="cinsiyet" value="erkek">erkek<input type="radio" name="cinsiyet" value="kadin">kadin<input type="radio" name="cinsiyet" value="diger">diger<br />
    sehiriniz : <input type="text" name="sehir"><br />
    <input type="submit" value="kaydet">
</form>
<br /><br /><br />
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");

$sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM uyeler ");
    if ($sorgu) {
        $kayitsayisi = mysqli_num_rows($sorgu);    
            if ($kayitsayisi>0) {
                    while ($kayitlar=mysqli_fetch_object($sorgu)) {
                        echo " "             . $kayitlar->id ;
                        echo " |  "      . $kayitlar->adisoyadi ;
                        echo " |  "    . $kayitlar->emailadresi;
                        echo " |  "          . $kayitlar->sifre;
                        echo " |  "        . $kayitlar->telefon ;
                        echo " |  "            . $kayitlar->yas;
                        echo " |  "       . $kayitlar->cinsiyet;
                        echo " |  "          . $kayitlar->sehir;
                        echo " |  "    . $kayitlar->kayittarihi . "<br /><br />";

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