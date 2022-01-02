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
CURLOPT_POST        :       Baslatilmis olan bir CURL oturumunda istenilen URL adresine HTTP POST islemi tanimlamak icin kullanilir.
CURLOPT_POSTFIELDS  :       Baslatilmis olan bir CURL oturumunda istenilen URL adresine HTTP POST isleminde gonderilecek olan veri veya verileri tanimlamak icin kullanilir.
*/ 
?>
<form action="sonuc.php" method="post">
    adiniz soyadiniz : <input type="text" name="adisoyadi"><br />
    E-mail adresiniz : <input type="email" name="Email"><br />
    telefonunuz : <input type="text" name="telefon"><br />
    cinsiyetiniz : <input type="radio" name="cinsiyet" value="erkek">erkek <input type="radio" name="cinsiyet" value="kadin">kadin <input type="radio" name="cinsiyet" value="belirtisiz">belirtmek istemiyorum<br />
    yasiniz : <select name="yas">
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
    </select>
    <input type="submit" value="gonder">
</form>

</body>
</html>	