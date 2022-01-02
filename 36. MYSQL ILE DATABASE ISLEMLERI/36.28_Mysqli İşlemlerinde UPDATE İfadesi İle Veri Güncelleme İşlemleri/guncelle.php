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


    $gelenIDdegeri = $_GET["id"];
    
    $sorgu = mysqli_query($veritabanibaglantisi,"SELECT * FROM uyeler WHERE id=" .$gelenIDdegeri);
        if ($sorgu) {
            $kayitsayisi=mysqli_num_rows($sorgu);
                    if ($kayitsayisi>0) {
                            $kayit = mysqli_fetch_assoc($sorgu);
                                
                    
                        }else {
                        header("location:index.php");
                        }
        }else {
            echo "sorgu hatasi";
        }
    mysqli_close($veritabanibaglantisi);

    ?>
<form action="sonuc.php?id=<?php echo $gelenIDdegeri; ?>" method="POST">
    ad soyad : <input type="text" name="adisoyadi" value="<?php echo $kayit["adisoyadi"];?>"><br />
    Email adresi : <input type="email" name="emailadresi" value="<?php echo $kayit["emailadresi"];?>"><br />
    sifre : <input type="password" name="sifre" value="<?php echo $kayit["sifre"];?>"><br />
    telefon : <input type="text" name="telefon" value="<?php echo $kayit["telefon"];?>"><br />
    yas : <select name="yas" ><br />
        <option value="">lutfen seciniz</option>
    <option value="18" <?php if($kayit["yas"] == 18){?>selected="selected"<?php }?> >18</option>
        <option value="19"<?php if($kayit["yas"] == 19){?>selected="selected"<?php }?> >19</option>
        <option value="20"<?php if($kayit["yas"] == 20){?>selected="selected"<?php }?> >20</option>
        <option value="21"<?php if($kayit["yas"] == 21){?>selected="selected"<?php }?> >21</option>
        <option value="22"<?php if($kayit["yas"] == 22){?>selected="selected"<?php }?> >22</option>
        <option value="23"<?php if($kayit["yas"] == 23){?>selected="selected"<?php }?> >23</option>
        <option value="24"<?php if($kayit["yas"] == 24){?>selected="selected"<?php }?> >24</option>
        <option value="25"<?php if($kayit["yas"] == 25){?>selected="selected"<?php }?> >25</option>
        <option value="26"<?php if($kayit["yas"] == 26){?>selected="selected"<?php }?> >26</option>
        <option value="27"<?php if($kayit["yas"] == 27){?>selected="selected"<?php }?> >27</option>
        <option value="28"<?php if($kayit["yas"] == 28){?>selected="selected"<?php }?> >28</option>
        <option value="29"<?php if($kayit["yas"] == 29){?>selected="selected"<?php }?> >29</option>
        <option value="30"<?php if($kayit["yas"] == 30){?>selected="selected"<?php }?> >30</option>
        <option value="31"<?php if($kayit["yas"] == 31){?>selected="selected"<?php }?> >31</option>
        <option value="32"<?php if($kayit["yas"] == 32){?>selected="selected"<?php }?> >32</option>
        <option value="33"<?php if($kayit["yas"] == 33){?>selected="selected"<?php }?> >33</option>
        <option value="34"<?php if($kayit["yas"] == 34){?>selected="selected"<?php }?> >34</option>
        <option value="35"<?php if($kayit["yas"] == 35){?>selected="selected"<?php }?> >35</option>
        <option value="36"<?php if($kayit["yas"] == 36){?>selected="selected"<?php }?> >36</option>
        <option value="37"<?php if($kayit["yas"] == 37){?>selected="selected"<?php }?> >37</option>
        <option value="38"<?php if($kayit["yas"] == 38){?>selected="selected"<?php }?> >38</option>
        <option value="39"<?php if($kayit["yas"] == 39){?>selected="selected"<?php }?> >39</option>
    cinsiyet : <input type="radio" name="cinsiyet" value="erkek" <?php if($kayit["cinsiyet"] == "erkek"){?> checked="checked"<?php } ?>>erkek<input type="radio" name="cinsiyet" value="kadin" <?php if($kayit["cinsiyet"] == "kadin"){?> checked="checked"<?php } ?>>kadin<br />
    sehir : <input type="text" name="sehir"value="<?php echo $kayit["sehir"];?>"><br />
        <input type="submit" value="guncelle">

    
    
    
    
    
    


</form>













</body>
</html>	