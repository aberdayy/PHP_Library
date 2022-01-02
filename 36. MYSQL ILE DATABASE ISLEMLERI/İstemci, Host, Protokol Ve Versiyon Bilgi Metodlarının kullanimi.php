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
mysqli_get_client_info()        :   PHP yazilimi icerisinde sisteme tanimli olan MySQL istemcisi kutuphanesinin(libmysql) detay bilgisini bularak buldugu degeri geriye dondurur.
mysqli_get_client_version()     :   PHP yazilimi icerisinde sisteme tanimli olan MySQL istemcisi kutuphanesinin(libmysql) surum bilgisini bularak buldugu degeri geriye dondurur.
mysqli_get_host_info()          :   Sisteme tanimli olan MySQL sunucusunun isim ve baglanti protokol turu bilgisini bularak buldugu degeri geriye dondurur.
host_info()                     :   Sisteme tanimli olan MySQL sunucusunun nesnesel yapi ile isim ve baglanti protokol turu bilgisini bularak buldugu degeri geriye dondurur.
mysqli_get_proto_info()         :   Sisteme tanimli olan MySQL sunucusunun baglanti protokolu surum bilgisini bularak buldugu degeri geriye dondurur.
protocol_version()              :   Sisteme tanimli olan MySQL sunucusunun nesnesel yapi ile baglanti protokolu surum bilgisini bularak buldugu degeri geriye dondurur.
mysqli_get_server_info()        :   Sisteme tanimli olan MySQL sunucusunun detay bilgisini bularak buldugu degeri geriye dondurur. 
server_info()                   :   Sisteme tanimli olan MySQL sunucusunun nesnesel yapi ile detay bilgisini bularak buldugu degeri geriye dondurur. 
mysqli_get_Server_version()     :   Sisteme tanimli olan MySQL sunucusunun surum bilgisini bularak buldugu degeri geriye dondurur. 
server_version()                :   Sisteme tanimli olan MySQL sunucusunun nesnesel yapi ile surum bilgisini bularak buldugu degeri geriye dondurur. 
*/
/*
$bilgi = mysqli_get_client_info();

echo $bilgi;
--------------------------------------*/
/*
$bilgi = mysqli_get_client_version();

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");

$bilgi = mysqli_get_host_info($veritabanibaglantisi);

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");

$bilgi = $veritabanibaglantisi->host_info;

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");

$bilgi = mysqli_get_proto_info($veritabanibaglantisi);

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");

$bilgi = $veritabanibaglantisi->protocol_version;

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");

$bilgi = mysqli_get_server_info($veritabanibaglantisi);

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");

$bilgi = $veritabanibaglantisi->server_info;

echo $bilgi;
--------------------------------------*/
/*
$veritabanibaglantisi = mysqli_connect("localhost","root","root","RDYmedia");

$bilgi = mysqli_get_server_version($veritabanibaglantisi);

echo $bilgi;
--------------------------------------*/
$veritabanibaglantisi = new mysqli("localhost","root","root","RDYmedia");

$bilgi = $veritabanibaglantisi->server_version;

echo $bilgi;







?>
</body>
</html>	