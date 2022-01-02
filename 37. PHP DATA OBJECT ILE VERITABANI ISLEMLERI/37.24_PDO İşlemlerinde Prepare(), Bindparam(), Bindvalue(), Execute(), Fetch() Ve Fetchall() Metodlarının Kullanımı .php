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
    prepare()       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore query hazirlamak icin kullanilir.
    bindParam()     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore prepare metodu kullanilarak hazirlanmis olan query i derlemek icin kullanilir.
    bindValue()     :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore prepare metodu kullanilarak hazirlanmis olan query i derlemek icin kullanilir.

        PDO::PARAM_BOOL     :   Boolean 
        PDO::PARAM_NULL     :   bos degersiz
        PDO::PARAM_INT      :   integer
        PDO::PARAM_STR      :   string

    execute()       :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tabloya yapilacak isleme gore prepare metodu kullanilarak hazirlanmis olan query i calistirmak icin kullanilir.
    fetch()         :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun tekil veri okuma islemi icin prepare metodu kullanilarak hazirlanmis execute metodu kullanilarak calistirilmis ve
    sonuclari alinmis olan querynin verilerini okumak icin kullanilir. Ayrica istenilirse verilere erisim seklide belirtilebilir.
    fetchAll()      :   MySQL sunucusundaki database icerisinde bulunan herhangi bir tablonun cogul veri okuma islemi icin prepare metodu kullanilarak hazirlanmis execute metodu kullanilarak calistirilmis ve
    sonuclari alinmis olan querynin verilerini okumak icin kullanilir. Ayrica istenilirse verilere erisim seklide belirtilebilir.

        FETCH_ASSOC         :   tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide ilgili tablonun sutun isimleri dizinin anahtari olarak tanimlanir ve ilgili verilere sutun isimleri ile 
        erisilir.
        FETCH_NUM           :   tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide dizinin anahtarlari php tarafinda otomatik olarak tanimlanir ve ilgili verilere sutun sira numarasi ile 
        erisilir.
        FETCH_BOTH          :   tablonun verilerini okuma islemi sirasinda olusturulacak olan dizide hem sutun isimleri ile hemde php tarafindan otomatik olarak tanimlanan sira numaralari ile cagirilir. 
        ikiside kullanilabilir.
        FETCH_OBJ           :   tablonun verilerini okuma islemi sirasinda olusturulacak olan nesnede ilgili tablonun sutun isimleri nesnenin ozellikleri olarak tanimlanir ilgili verilere sutun isimleri 
        ile erisilir
    */
    /*
    try {
        $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basarili <br />";    
    } catch (PDOException $error) {
        echo " hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->prepare("SELECT*FROM uyeler");
    $sorgu->execute();
    if ($sorgu) {
        $kayitsayisi = $sorgu->rowCount();
        if ($kayitsayisi>0) {
            foreach ($sorgu as $satirlar) {
                echo $satirlar["id"] . " = " .$satirlar["adisoyadi"] . " | " .$satirlar["emailadresi"] . " | " .$satirlar["sifre"] . " | " .$satirlar["telefon"] . " | " .$satirlar["yas"] . " | " .$satirlar["cinsiyet"] . " | " .$satirlar["kayittarihi"] . "<br />";
            }
        } else {
            echo "kayit yok!";
        }
        
    } else {
        echo "sorgu hatasi ";
    }
    


    $db = null;
-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar[0] . " = " .$satirlar[1] . " | " .$satirlar[2] . " | " .$satirlar[3] . " | " .$satirlar[4] . " | " .$satirlar[5] . " | " .$satirlar[6] . " | " .$satirlar[7] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}



$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler", array(PDO::FETCH_BOTH));
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " .$satirlar["adisoyadi"] . " | " .$satirlar["emailadresi"] . " | " .$satirlar["sifre"] . " | " .$satirlar["telefon"] . " | " .$satirlar["yas"] . " | " .$satirlar["cinsiyet"] . " | " .$satirlar["kayittarihi"] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}



$db = null;
-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler", array(PDO::FETCH_BOTH));
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar[0] . " = " .$satirlar[1] . " | " .$satirlar[2] . " | " .$satirlar[3] . " | " .$satirlar[4] . " | " .$satirlar[5] . " | " .$satirlar[6] . " | " .$satirlar[7] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}
$db = null;

-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler", array(PDO::FETCH_ASSOC));
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " .$satirlar["adisoyadi"] . " | " .$satirlar["emailadresi"] . " | " .$satirlar["sifre"] . " | " .$satirlar["telefon"] . " | " .$satirlar["yas"] . " | " .$satirlar["cinsiyet"] . " | " .$satirlar["kayittarihi"] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}



$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler", array(PDO::FETCH_NUM));
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar[0] . " = " .$satirlar[1] . " | " .$satirlar[2] . " | " .$satirlar[3] . " | " .$satirlar[4] . " | " .$satirlar[5] . " | " .$satirlar[6] . " | " .$satirlar[7] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}



$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler", array(PDO::FETCH_OBJ));
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        foreach ($sorgu as $satirlar) {
            echo $satirlar["id"] . " = " .$satirlar["adisoyadi"] . " | " .$satirlar["emailadresi"] . " | " .$satirlar["sifre"] . " | " .$satirlar["telefon"] . " | " .$satirlar["yas"] . " | " .$satirlar["cinsiyet"] . " | " .$satirlar["kayittarihi"] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}

//kullanim yapisi budur!

$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayit = $sorgu->fetch();
        
            echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] . " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";

    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayit = $sorgu->fetch();
        
        echo $kayit[0] . " = " .$kayit[1] . " | " .$kayit[2] . " | " .$kayit[3] . " | " .$kayit[4] . " | " .$kayit[5] . " | " .$kayit[6] . " | " .$kayit[7] . "<br />";

    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayit = $sorgu->fetch(PDO::FETCH_BOTH);
        
            echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] . " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
            
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayit = $sorgu->fetch(PDO::FETCH_BOTH);
        
        echo $kayit[0] . " = " .$kayit[1] . " | " .$kayit[2] . " | " .$kayit[3] . " | " .$kayit[4] . " | " .$kayit[5] . " | " .$kayit[6] . " | " .$kayit[7] . "<br />";
            
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayit = $sorgu->fetch(PDO::FETCH_ASSOC);
        
        echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] . " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
            
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayit = $sorgu->fetch(PDO::FETCH_OBJ);
        
        echo $kayit->id . " = " .$kayit->adisoyadi . " | " .$kayit->emailadresi . " | " .$kayit->sifre . " | " .$kayit->telefon . " | " .$kayit->yas . " | " .$kayit->cinsiyet . " | " .$kayit->kayittarihi . "<br />";
            
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
//                                                   FETCHALL    FETCH METODU ILE KULLANIMI AYNIDIR!!!
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT*FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayitlar = $sorgu->fetchAll();
        foreach ($kayitlar as $deger) {        
            echo $deger["id"] . " = " .$deger["adisoyadi"] . " | " .$deger["emailadresi"] . " | " .$deger["sifre"] . " | " .$deger["telefon"] . " | "
            .$deger["yas"] . " | " .$deger["cinsiyet"] . " | " .$deger["kayittarihi"] . "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/

/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT adisoyadi, emailadresi,telefon FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayitlar = $sorgu->fetchAll();
        foreach ($kayitlar as $deger) {        
            echo $deger["adisoyadi"] . " | " .$deger["emailadresi"] . " | " .$deger["telefon"] . " | ". "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/

/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT adisoyadi AS kisiadi,telefon AS iletisimnumarasi FROM uyeler");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayitlar = $sorgu->fetchAll();
        foreach ($kayitlar as $deger) {        
            echo $deger["kisiadi"] . " | ".$deger["iletisimnumarasi"] . " | ". "<br />";
        }
    } else {
        echo "kayit yok!";
    }
    
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/

/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>2");
$sorgu->execute();
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayitlar = $sorgu->fetchAll();
        foreach ($kayitlar as $kayit) {        
            echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
             " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
            }
        } else {
            echo "kayit yok!";
        }
        
} else {
    echo "sorgu hatasi ";
}


$db = null;
-------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
/*
try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>?");
$sorgu->execute([3]);
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayitlar = $sorgu->fetchAll();
        foreach ($kayitlar as $kayit) {        
            echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
             " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
            }
        } else {
            echo "kayit yok!";
        }
        
    } else {
        echo "sorgu hatasi ";
    }
    
    
    $db = null;
    -------------------------------------------*/
    //-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
    /*
    try {
    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
    echo "basarili <br />";    
} catch (PDOException $error) {
    echo " hata kodu : " . $error->getMessage();
    die();
}
$sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>? AND id<?");
$sorgu->execute([3,6]);
if ($sorgu) {
    $kayitsayisi = $sorgu->rowCount();
    if ($kayitsayisi>0) {
        $kayitlar = $sorgu->fetchAll();
        foreach ($kayitlar as $kayit) {        
            echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
             " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
            }
        } else {
            echo "kayit yok!";
        }
        
    } else {
        echo "sorgu hatasi ";
    }
    
    
    $db = null;
    -------------------------------------------*/
    /*
    try {
        $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
        echo "basarili <br />";    
    } catch (PDOException $error) {
        echo " hata kodu : " . $error->getMessage();
        die();
    }
    $sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>:idninilkkosulu AND id<:idsonkosulu");
    $sorgu->execute([":idninilkkosulu"=>3,":idsonkosulu"=>6]);
    if ($sorgu) {
        $kayitsayisi = $sorgu->rowCount();
        if ($kayitsayisi>0) {
            $kayitlar = $sorgu->fetchAll();
            foreach ($kayitlar as $kayit) {        
                echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
                 " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
                }
            } else {
                echo "kayit yok!";
            }
            
        } else {
            echo "sorgu hatasi ";
        }
        
        
        $db = null;
        -------------------------------------------*/
        //-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
        /*
        try {
            $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
            echo "basarili <br />";    
        } catch (PDOException $error) {
            echo " hata kodu : " . $error->getMessage();
            die();
        }
        $ilkdeger = 3;
        $ikincideger = 7;

        $sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>? AND id<?");
        
        $sorgu->bindParam(1, $ilkdeger, PDO::PARAM_INT);
        $sorgu->bindParam(2, $ikincideger, PDO::PARAM_INT);
        
        $sorgu->execute();
        if ($sorgu) {
            $kayitsayisi = $sorgu->rowCount();
            if ($kayitsayisi>0) {
                $kayitlar = $sorgu->fetchAll();
                foreach ($kayitlar as $kayit) {        
                    echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
                    " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
                }
                } else {
                    echo "kayit yok!";
                }
                
            } else {
                echo "sorgu hatasi ";
            }
            
            
            $db = null;
            -------------------------------------------*/
            //-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
            /*
        try {
            $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
            echo "basarili <br />";    
        } catch (PDOException $error) {
            echo " hata kodu : " . $error->getMessage();
            die();
        }
        $ilkdeger = 3;
        $ikincideger = 7;
        
        $sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>:ilkiddegeri AND id<:soniddegeri");
        
        $sorgu->bindParam(":ilkiddegeri", $ilkdeger, PDO::PARAM_INT);
        $sorgu->bindParam(":soniddegeri", $ikincideger, PDO::PARAM_INT);
        
        $sorgu->execute();
        if ($sorgu) {
            $kayitsayisi = $sorgu->rowCount();
            if ($kayitsayisi>0) {
                $kayitlar = $sorgu->fetchAll();
                foreach ($kayitlar as $kayit) {        
                    echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
                    " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
                }
            } else {
                    echo "kayit yok!";
                }
                
            } else {
                echo "sorgu hatasi ";
            }
            
            
            $db = null;
            -------------------------------------------*/
            //-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
            /*
            try {
                $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
                echo "basarili <br />";    
        } catch (PDOException $error) {
            echo " hata kodu : " . $error->getMessage();
            die();
        }
        $ilkdeger = 3;
        $ikincideger = 7;
        
        $sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>:ilkiddegeri AND id<:soniddegeri");
        
        $sorgu->bindValue(":ilkiddegeri", $ilkdeger, PDO::PARAM_INT);
        $sorgu->bindValue(":soniddegeri", $ikincideger, PDO::PARAM_INT);
        
        $sorgu->execute();
        if ($sorgu) {
            $kayitsayisi = $sorgu->rowCount();
            if ($kayitsayisi>0) {
                $kayitlar = $sorgu->fetchAll();
                foreach ($kayitlar as $kayit) {        
                    echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
                    " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
                }
            } else {
                    echo "kayit yok!";
                }
                
            } else {
                echo "sorgu hatasi ";
            }
            
            
            $db = null;
            -------------------------------------------*/
            //-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
            /*
            try {
                $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
                echo "basarili <br />";    
            } catch (PDOException $error) {
                echo " hata kodu : " . $error->getMessage();
                die();
            }
            $ilkdeger = 3;
            $ikincideger = 7;
            
            $sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>? AND id<?");
            
            $sorgu->bindValue(1, $ilkdeger, PDO::PARAM_INT);
            $sorgu->bindValue(2, $ikincideger, PDO::PARAM_INT);
            
            $sorgu->execute();
            if ($sorgu) {
                $kayitsayisi = $sorgu->rowCount();
                if ($kayitsayisi>0) {
                    $kayitlar = $sorgu->fetchAll();
                    foreach ($kayitlar as $kayit) {        
                        echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
                        " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
                    }
                } else {
                    echo "kayit yok!";
                }
                    
            } else {
                    echo "sorgu hatasi ";
                }
                
                
                $db = null;
                -------------------------------------------*/
                //-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/
                /*
                try {
                    $db = new PDO ("mysql:hosr=localhost;dbname=RDYmedia;charset=utf8;","root","root");
                    echo "basarili <br />";    
            } catch (PDOException $error) {
                echo " hata kodu : " . $error->getMessage();
                die();
            }
            $ilkdeger = 3;
            $ikincideger = 7;
            
            $sorgu = $db->prepare("SELECT *FROM uyeler WHERE id>:ilkiddegeri AND id<:soniddegeri");
            
            $sorgu->bindValue(":ilkiddegeri", $ilkdeger, PDO::PARAM_INT);
            $sorgu->bindValue(":soniddegeri", $ikincideger, PDO::PARAM_INT);
            
            $sorgu->execute();
            if ($sorgu) {
                $kayitsayisi = $sorgu->rowCount();
                if ($kayitsayisi>0) {
                    $kayitlar = $sorgu->fetchAll();
                    foreach ($kayitlar as $kayit) {        
                        echo $kayit["id"] . " = " .$kayit["adisoyadi"] . " | " .$kayit["emailadresi"] . " | " .$kayit["sifre"] .
                        " | " .$kayit["telefon"] . " | " .$kayit["yas"] . " | " .$kayit["cinsiyet"] . " | " .$kayit["kayittarihi"] . "<br />";
                    }
                } else {
                    echo "kayit yok!";
                    }
                    
                } else {
                    echo "sorgu hatasi ";
                }
                
                
                $db = null;
                -------------------------------------------*/
//-------------------------------------------*/-------------------------------------------*/-------------------------------------------*/

            
            



        
?>





</body>
</html>	