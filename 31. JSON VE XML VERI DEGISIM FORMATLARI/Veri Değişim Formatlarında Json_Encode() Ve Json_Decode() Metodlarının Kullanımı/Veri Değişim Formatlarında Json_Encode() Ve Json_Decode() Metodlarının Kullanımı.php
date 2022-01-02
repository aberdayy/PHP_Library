<?php 
 header("Refresh:2")
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
json_encode()   :   Belirtilecek olan icerigin json karsiligini bularak buldugu degeri geriye dondurur.   
    JSON_HEX_TAG        :   Belirtilecek olan icerikte bulunan tag(etiket) baslangic ve bitis karakterlerini hexadecimal (onaltilik) turunde donusturmek icin kullanilir
    JSON_HEX_APOS       :   Belirtilecek olan icerikte bulunan ' (tek tirnak) karakterlerini hexadecimal (onaltilik) turunde donusturmek icin kullanilir.
    JSON_HEX_QUOT       :   Belirtilecek olan icerikte bulunan " (cift tirnak) karakterlerini hexadecimal(onaltilik) turunde donusturmek icin kullanilir.
    JSON_HEX_AMP        :   Belirtilecek olan icerikte bulunan & (ampersant) karakterlerini hexadecimal (onaltilik) turunde donusturmek icin kullanilir.
    JSON_FORCE_OBJECT   :   belirtilecek olan icerigi nesne donusum yapisina gore zorlamak icin kullanilir.
json_decode()   :   Belirtilecek olan JSON değerinin standart kodlama karşılığını bularak, bulduğu değeri geriye döndürür.
*/

/*
$degerler   =   array("extra egitim","ataberk erday");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("Firma"=>"Extra Egitim","Yonetici"=>"Ataberk Erday");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array(
    "Firma"=>"Extra Egitim",
    "Yonetici"=>"Ataberk Erday",
    "egitimler" => array(
        "HTML",
        "CSS3",
        "JS",
        "PHP"
    ),
    "egitmenler"=>array(
        array(
            "egitmen"=>"ataberk erday",
        "ders"  => "PHP"
        ),
        array(
            "egitmen"=>"mert kasap",
            "ders"=>"CSS3"
        ),
        array(
            "egitmen"=>"sadik erday",
            "ders"=>"HTML"
        ),
        array(
            "egitmen"=>"esra erday",
            "ders"=>"JS"
        ),
        array(
            "egitmen"=> "roka erday",
            "ders"=>"NodeJS"
        )
        )
    );
    
    $donustur   =   json_encode($degerler);
    
    echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("<i>extra egitim</i>","ataberk erday", "A'dan Z'ye PHP gorsel egitim seti","27\"monitor","HTML & CSS3 & JS");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("<i>extra egitim</i>","ataberk erday", "A'dan Z'ye PHP gorsel egitim seti","27\"monitor","HTML & CSS3 & JS");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler,JSON_HEX_TAG);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("<i>extra egitim</i>","ataberk erday", "A'dan Z'ye PHP gorsel egitim seti","27\"monitor","HTML & CSS3 & JS");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler,JSON_HEX_APOS);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("<i>extra egitim</i>","ataberk erday", "A'dan Z'ye PHP gorsel egitim seti","27\"monitor","HTML & CSS3 & JS");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler,JSON_HEX_QUOT);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("<i>extra egitim</i>","ataberk erday", "A'dan Z'ye PHP gorsel egitim seti","27\"monitor","HTML & CSS3 & JS");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler,JSON_HEX_AMP);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("<i>extra egitim</i>","ataberk erday", "A'dan Z'ye PHP gorsel egitim seti","27\"monitor","HTML & CSS3 & JS");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler,JSON_HEX_TAG|JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =   array("extra egitim","ataberk erday");
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_encode($degerler,JSON_FORCE_OBJECT);

echo $donustur;
--------------------------------------------------*/
/*
$degerler   =  '[
    "extra egitim",
    "ataberk erday"
]';

$donustur   =   json_decode($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";
--------------------------------------------------*/
/*
$degerler   =   '{
    "firma" : "extra egitim",
    "yonetici":"ataberk erday"
}';
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_decode($degerler);
echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur->firma."<br />";
echo $donustur->yonetici."<br />";
--------------------------------------------------*/
/*
$degerler   =   '{
    "firma" : "extra egitim",
    "yonetici":"ataberk erday"
}';
// echo "<pre>";
// print_r($degerler);
// echo "</pre>";

$donustur   =   json_decode($degerler,true);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur["firma"]."<br />";
echo $donustur["yonetici"]."<br />";
--------------------------------------------------*/
/*
$degerler = '{
    "firma": "Extra Egitim",
    "yonetici": "Ataberk Erday",
    "egitimler": [
        "HTML",
      "CSS3",
      "JS",
      "PHP"
    ],
    "egitmenler": [
      {
        "egitmen": "ataberk erday",
        "ders": "PHP"
      },
      {
        "egitmen": "mert kasap",
        "ders": "CSS3"
    },
      {
          "egitmen": "sadik erday",
        "ders": "HTML"
      },
      {
        "egitmen": "esra erday",
        "ders": "JS"
    },
    {
        "egitmen": "roka erday",
        "ders": "NodeJS"
    }
    ]
  }';
  
  
  $donustur    =   json_decode($degerler);
  
  echo "<pre>";
  print_r($donustur);
  echo "</pre>";
  
  echo $donustur->firma ."<br />";
    echo $donustur->yonetici ."<br /><br />";
    echo $donustur->egitimler[0]."<br />";
    echo $donustur->egitimler[1]."<br />";
    echo $donustur->egitimler[2]."<br />";
    echo $donustur->egitimler[3]."<br /><br />";
    
    $sinifbir   =   $donustur->egitmenler[0];  //icerisinde obje oldudugu icin degiskene atanip oyle cekilir.
    echo $sinifbir->egitmen."<br />";
    echo $sinifbir->ders."<br /><br />";
    $sinifiki   =   $donustur->egitmenler[1];
    echo $sinifiki->egitmen."<br />";
    echo $sinifiki->ders."<br /><br />";
    $sinifuc     =   $donustur->egitmenler[2];
    echo $sinifuc->egitmen . "<br />";
    echo $sinifuc->ders . "<br /><br />";
    $sinifdort  =   $donustur->egitmenler[3];
    echo $sinifdort->egitmen. "<br />";
    echo $sinifdort->ders. "<br /><br />";
    $sinifbes   =   $donustur->egitmenler[4];
    echo $sinifbes->egitmen . "<br />";
    echo $sinifbes->ders . "<br />"; 
    --------------------------------------------------*/
    /*
    $degerler = '{
        "firma": "Extra Egitim",
        "yonetici": "Ataberk Erday",
        "egitimler": [
            "HTML",
          "CSS3",
          "JS",
          "PHP"
        ],
        "egitmenler": [
          {
              "egitmen": "ataberk erday",
            "ders": "PHP"
        },
        {
            "egitmen": "mert kasap",
            "ders": "CSS3"
        },
          {
              "egitmen": "sadik erday",
              "ders": "HTML"
            },
          {
            "egitmen": "esra erday",
            "ders": "JS"
        },
        {
            "egitmen": "roka erday",
            "ders": "NodeJS"
        }
        ]
    }';
      
    
    $donustur    =   json_decode($degerler,true);
      
      echo "<pre>";
      print_r($donustur);
      echo "</pre>";
      
      echo $donustur["firma"] . "<br />";
      echo $donustur["yonetici"] . "<br />";
      echo $donustur["egitimler"][0] . "<br />";
        echo $donustur["egitimler"][1] . "<br />";
        echo $donustur["egitimler"][2] . "<br />";
        echo $donustur["egitimler"][3] . "<br />";
        echo $donustur["egitmenler"][0]["egitmen"] . "<br />";
        echo $donustur["egitmenler"][0]["ders"] . "<br /><br />";
        echo $donustur["egitmenler"][1]["egitmen"] . "<br />";
        echo $donustur["egitmenler"][1]["ders"] . "<br /><br />";
        echo $donustur["egitmenler"][2]["egitmen"] . "<br />";
        echo $donustur["egitmenler"][2]["ders"] . "<br /><br />";
        echo $donustur["egitmenler"][3]["egitmen"] . "<br />";
        echo $donustur["egitmenler"][3]["ders"] . "<br /><br />";
        echo $donustur["egitmenler"][4]["egitmen"] . "<br />";
        echo $donustur["egitmenler"][4]["ders"] . "<br /><br />";
--------------------------------------------------*/
/*
$dosya      =   file_get_contents("ornekdizi.json");
$donustur   =   json_decode($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";


echo $donustur[0] . "<br />";
echo $donustur[1];
--------------------------------------------------*/
/*
$dosya      =   file_get_contents("orneknesne.json");
$donustur   =   json_decode($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";


echo $donustur->firma . "<br />";
echo $donustur->yonetici;
--------------------------------------------------*/
/*
$dosya      =   file_get_contents("orneknesne.json");
$donustur   =   json_decode($dosya,true);

echo "<pre>";
print_r($donustur);
echo "</pre>";


echo $donustur["firma"] . "<br />";
echo $donustur["yonetici"];
--------------------------------------------------*/
/*
$dosya      =   file_get_contents("ornegelismis.json");
$donustur   =   json_decode($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";



echo $donustur->firma ."<br />";
echo $donustur->yonetici ."<br /><br />";
echo $donustur->egitimler[0]."<br />";
echo $donustur->egitimler[1]."<br />";
echo $donustur->egitimler[2]."<br />";
echo $donustur->egitimler[3]."<br /><br />";

$sinifbir   =   $donustur->egitmenler[0];  //icerisinde obje oldudugu icin degiskene atanip oyle cekilir.
echo $sinifbir->egitmen."<br />";
echo $sinifbir->Ders."<br /><br />";
$sinifiki   =   $donustur->egitmenler[1];
echo $sinifiki->egitmen."<br />";
echo $sinifiki->Ders."<br /><br />";
$sinifuc     =   $donustur->egitmenler[2];
echo $sinifuc->egitmen . "<br />";
echo $sinifuc->Ders . "<br /><br />";
$sinifdort  =   $donustur->egitmenler[3];
echo $sinifdort->egitmen. "<br />";
echo $sinifdort->Ders. "<br /><br />";
$sinifbes   =   $donustur->egitmenler[4];
echo $sinifbes->egitmen . "<br />";
echo $sinifbes->Ders . "<br />"; 
--------------------------------------------------*/
/*
$dosya      =   file_get_contents("ornegelismis.json");
$donustur   =   json_decode($dosya,true);

echo "<pre>";
print_r($donustur);
echo "</pre>";

echo $donustur["firma"] . "<br />";
echo $donustur["yonetici"] . "<br />";
echo $donustur["egitimler"][0] . "<br />";
echo $donustur["egitimler"][1] . "<br />";
echo $donustur["egitimler"][2] . "<br />";
  echo $donustur["egitimler"][3] . "<br />";
  echo $donustur["egitmenler"][0]["egitmen"] . "<br />";
  echo $donustur["egitmenler"][0]["ders"] . "<br /><br />";
  echo $donustur["egitmenler"][1]["egitmen"] . "<br />";
  echo $donustur["egitmenler"][1]["ders"] . "<br /><br />";
  echo $donustur["egitmenler"][2]["egitmen"] . "<br />";
  echo $donustur["egitmenler"][2]["ders"] . "<br /><br />";
  echo $donustur["egitmenler"][3]["egitmen"] . "<br />";
  echo $donustur["egitmenler"][3]["ders"] . "<br /><br />";
  echo $donustur["egitmenler"][4]["egitmen"] . "<br />";
  echo $donustur["egitmenler"][4]["ders"] . "<br /><br />";
  --------------------------------------------------*/
  /*
  $deger	=	'[
      "Extra Eğitim", 
	"Volkan Alakent"
	]';

	$donustur	=	json_decode($deger);
	
	echo "<pre>";
	print_r($donustur);
	echo "</pre>";
	
	foreach($donustur as $anahtar => $deger){
        echo $anahtar . " : " . $deger . "<br />";
	}
    --------------------------------------------------*/
	/*
    $dosya  =   file_get_contents("ornekdizi.json");
    $donustur	=	json_decode($dosya);
	
	echo "<pre>";
	print_r($donustur);
	echo "</pre>";
	
	foreach($donustur as $anahtar => $deger){
        echo $anahtar . " : " . $deger . "<br />";
	}
    --------------------------------------------------*/
    /*
    $deger	=	'{
        "firma": "Extra Eğitim", 
        "yonetici":"Volkan Alakent"
    }';
  
    $donustur	=	json_decode($deger);
      
      echo "<pre>";
      print_r($donustur);
      echo "</pre>";
      
      foreach($donustur as $anahtar => $deger){
          echo $anahtar . " : " . $deger . "<br />";
        }
        --------------------------------------------------*/
        /*
        $deger	=	file_get_contents("orneknesne.json");
        $donustur	=	json_decode($deger);
          
          echo "<pre>";
          print_r($donustur);
          echo "</pre>";
          
          foreach($donustur as $anahtar => $deger){
              echo $anahtar . " : " . $deger . "<br />";
            }
--------------------------------------------------*/
/*
$degerler = '{
    "firma": "Extra Egitim",
    "yonetici": "Ataberk Erday",
    "egitimler": [
        "HTML",
      "CSS3",
      "JS",
      "PHP"
    ],
    "egitmenler": [
      {
          "egitmen": "ataberk erday",
        "ders": "PHP"
    },
    {
        "egitmen": "mert kasap",
        "ders": "CSS3"
    },
      {
          "egitmen": "sadik erday",
          "ders": "HTML"
        },
      {
        "egitmen": "esra erday",
        "ders": "JS"
    },
    {
        "egitmen": "roka erday",
        "ders": "NodeJS"
    }
    ]
}';
$donustur   =   json_decode($degerler);

echo "<pre>";
print_r($donustur);
echo "</pre>";
    
foreach ($donustur as $anahtar => $icerik) {
    if (!is_array($icerik)) {
        echo $anahtar . " : ". $icerik . "<br />";
    }else {
        foreach ($icerik as $yenianahtar => $yeniicerik) {
            if (!is_object($yeniicerik)) {
                echo $yenianahtar . " : " . $yeniicerik . "<br />";
            }else {
               foreach ($yeniicerik as $sonanahtar => $sonicerik) {
                   echo $sonanahtar . " : " . $sonicerik . "<br />";
               }
           }
        }
    }
}
--------------------------------------------------*/
/*
$dosya      = file_get_contents("ornegelismis.json");
$donustur   = json_decode($dosya);

echo "<pre>";
print_r($donustur);
echo "</pre>";

foreach ($donustur as $anahtar => $icerik) {
    if (!is_array($icerik)) {
        echo $anahtar . " : ". $icerik . "<br />";
    }else {
        foreach ($icerik as $yenianahtar => $yeniicerik) {
            if (!is_object($yeniicerik)) {
                echo $yenianahtar . " : " . $yeniicerik . "<br />";
            }else {
               foreach ($yeniicerik as $sonanahtar => $sonicerik) {
                   echo $sonanahtar . " : " . $sonicerik . "<br />";
                }
            }
        }
    }
}
--------------------------------------------------*/
/*
$degerler = '{
    "firma": "Extra Egitim",
    "yonetici": "Ataberk Erday",
    "egitimler": [
        "HTML",
      "CSS3",
      "JS",
      "PHP"
    ],
    "egitmenler": [
      {
          "egitmen": "ataberk erday",
        "ders": "PHP"
    },
    {
        "egitmen": "mert kasap",
        "ders": "CSS3"
    },
      {
          "egitmen": "sadik erday",
          "ders": "HTML"
        },
      {
          "egitmen": "esra erday",
        "ders": "JS"
    },
    {
        "egitmen": "roka erday",
        "ders": "NodeJS"
    }
    ]
}';
    
$donustur = json_decode($degerler,true);

    echo "<pre>";
    print_r($donustur);
    echo "</pre>";
    
    function oku($veriler){
        foreach ($veriler as $anahtar => $eleman) {
            if (!is_array($eleman)) {
                echo $anahtar . " : " . $eleman . "<br />";
            }else {
                oku($eleman);
            }
        }
    }
    oku($donustur);
--------------------------------------------------*/
/*
$dosya      = file_get_contents("ornegelismis.json");
$donustur = json_decode($dosya,true);

echo "<pre>";
print_r($donustur);
echo "</pre>";

function oku($veriler){
    foreach ($veriler as $anahtar => $eleman) {
        if (!is_array($eleman)) {
            echo $anahtar . " : " . $eleman . "<br />";
        }else {
            oku($eleman);
        }
    }
}
oku($donustur);
--------------------------------------------------*/
	
$degerler		=	array("Extra Eğitim", "Ataberk Erday", "A'dan Z'ye PHP Görsel Eğitim Seti", "27\" Monitör", "HTML & CSS & Javascript & PHP");

echo "<pre>";
print_r($degerler);
echo "</pre>";
$donustur = json_encode($degerler);
echo $donustur . "<br />";

$geridonustur   =   json_decode($donustur);
echo "<pre>";
print_r($geridonustur);
echo "</pre>";


    ?>
    </body>
    </html>	
	
