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
   mysqli_real_escape_string()      :   belirtilecek olan icerikte bulunabilecek olan tum ozel karakterlerin onune bir ters slash \ isareti yani kacirma operatoru ekler ve sade bir metin icerigi olusturarak
    ve olusturdugu degeri geriye dondurur.
   
    real_escape_string()             :   belirtilecek olan icerikte bulunabilecek olan tum ozel karakterlerin onune nesnesel yapi ile  bir ters slash \ isareti yani kacirma operatoru ekler ve sade bir metin icerigi olusturarak
    ve olusturdugu degeri geriye dondurur.
   */
  /*
    $db = mysqli_connect("localhost","root","root","RDYmedia");
    mysqli_set_charset($db,"UTF8");
    $deger = "extra egitim - ataberk erday - a'dan z'ye php gorsel egitim  seti - 32\" monitor - birde \ yaziyim ";
    echo $deger . "<br />";
    $islem  = mysqli_real_escape_string($db, $deger);
    echo $islem . "<br />";


    mysqli_close($db);
----------------------------------------*/
mysqli_report(MYSQLI_REPORT_ERROR| MYSQLI_REPORT_STRICT);
$db = new mysqli ("localhost","root","root","RDYmedia");
$db->set_charset("UTF8");
$deger = "extra egitim - ataberk ereeeeday - a'dan z'ye php gorsel egitim  seti - 32\" monitor - birde \ yaziyim ";
echo $deger . "<br />";
$islem  = $db->real_escape_string($deger);
echo $islem . "<br />";
$db->close();


    ?>
</body>
</html>	