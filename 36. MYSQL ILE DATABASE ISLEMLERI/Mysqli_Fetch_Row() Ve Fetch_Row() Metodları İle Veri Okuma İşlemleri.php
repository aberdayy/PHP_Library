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
mysqli_fetch_row()  :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tum verilerini numaralandirilmis bir dizi halinde okumak icin kullanilir.
fetch_row()         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun nesnesel yapiyla tum verilerini numaralandirilmis bir dizi halinde okumak icin kullanilir.
*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglati kurulamadi<br />";
    echo "hata kodu : " . mysqli_connect_error()."<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi , "SELECT*FROM kisiler");
if ($sorgu) {
    $kayit = mysqli_fetch_row($sorgu);

    echo "<pre>";
    print_r($kayit);
    echo "</pre>";


}else{
    echo "sorgu hatasi";
}

mysqli_close($veritabanibaglantisi);
---------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglati kurulamadi<br />";
    echo "hata kodu : " . mysqli_connect_error()."<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi , "SELECT*FROM kisiler");
if ($sorgu) {
    
    $kayit = mysqli_fetch_row($sorgu);
 echo "kayit ID degeri : " . $kayit[0]."<br />";
 echo "kayit isim degeri : " . $kayit[1]."<br />";
 echo "kayit yas degeri : " . $kayit[2]."<br />";
 echo "kayit beceriler degeri : " . $kayit[3]."<br />";
 echo "kayit beceri seviyeleri degeri : " . $kayit[4]."<br />";
}else{
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);
---------------------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");
mysqli_set_charset($veritabanibaglantisi,"UTF8");
if (mysqli_connect_errno()) {
    echo "baglati kurulamadi<br />";
    echo "hata kodu : " . mysqli_connect_error()."<br />";
    die();
}
$sorgu = mysqli_query($veritabanibaglantisi , "SELECT*FROM kisiler");
if ($sorgu) {
    
    while($kayit = mysqli_fetch_row($sorgu)){
 echo "kayit ID degeri : " . $kayit[0]."<br />";
 echo "kayit isim degeri : " . $kayit[1]."<br />";
 echo "kayit yas degeri : " . $kayit[2]."<br />";
 echo "kayit beceriler degeri : " . $kayit[3]."<br />";
 echo "kayit beceri seviyeleri degeri : " . $kayit[4]."<br /><br />";
    }
}else{
    echo "sorgu hatasi";
}
mysqli_close($veritabanibaglantisi);
---------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglati kurulamadi<br />";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error."<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query("SELECT*FROM kisiler");
if ($sorgu) {
    $kayit = $sorgu->fetch_row();

    echo "<pre>";
    print_r($kayit);
    echo "</pre>";

    
}else{
    echo "sorgu hatasi";
}

$veritabanibaglantisi->close();
---------------------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglati kurulamadi<br />";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error."<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query("SELECT*FROM kisiler");
if ($sorgu) {
    $kayit = $sorgu->fetch_row();

    echo "kayit ID degeri : " . $kayit[0]."<br />";
    echo "kayit isim degeri : " . $kayit[1]."<br />";
    echo "kayit yas degeri : " . $kayit[2]."<br />";
    echo "kayit beceriler degeri : " . $kayit[3]."<br />";
    echo "kayit beceri seviyeleri degeri : " . $kayit[4]."<br />";
}else{
    echo "sorgu hatasi";
}
$veritabanibaglantisi->close();
---------------------------------------------------*/

$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");
$veritabanibaglantisi->set_charset("UTF8");
if ($veritabanibaglantisi->connect_errno) {
    echo "baglati kurulamadi<br />";
    echo "hata kodu : " . $veritabanibaglantisi->connect_error."<br />";
    die();
}
$sorgu = $veritabanibaglantisi->query("SELECT*FROM kisiler");
if ($sorgu) {
   while( $kayit = $sorgu->fetch_row()){
    echo "kayit ID degeri : " . $kayit[0]."<br />";
    echo "kayit isim degeri : " . $kayit[1]."<br />";
    echo "kayit yas degeri : " . $kayit[2]."<br />";
    echo "kayit beceriler degeri : " . $kayit[3]."<br />";
    echo "kayit beceri seviyeleri degeri : " . $kayit[4]."<br />";
        }
}else{
    echo "sorgu hatasi";
}
$veritabanibaglantisi->close();


?>
</body>
</html>	