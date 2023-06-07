/*

Echo Kullanarak Ekrana Yazdırmak:

*/

<?php 
echo “Merhaba”;
Echo “Selam”; 
?>

/*

Echo İçerisinde HTML Tagları Kullanmak:

*/

<?php 
echo "Merhaba";
echo "<br>";
echo "<hr>";
echo "<h3>Adu-Bilgisayar Programcılığı</h3>";
echo "<h2>Adu-Bilgisayar Programcılığı</h2>";
echo "<h1>Adu-Bilgisayar Programcılığı</h1>";
?>


/*

Echo Kullanarak Birleştirme Yapmak

*/

<?php

echo "Aydın MYO" . "Bilgisayar Programcılığı" . "<br/>";
?>

/*

Değişken Kullanımı

alt tuğuna basarak imleci birden fazla yerde tutabiliriz.

*/

<?php
echo "<ol>
          <li> Değişken isimleri \$ işareti ile başlar. </li>
          <li> Değişken isimleri sayısal bir ifadeyle başlayamaz. </li>
          <li> Değişken isimlerinde boşluk kullanılmaz. </li>
          <li> Dosya, değişken ve dizin isimlerinde Türkçe karakter kullanılmamalıdır. </li>
          <li> Değişken isimleri büyük küçük harfe duyarlıdır. (test != Test) </li>
          <li> Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak veya tek tırnak kullanılır. </li>
          <li> Değişken içerisinde sayısal bir ifade varsa burada da tırnak kullanabiliriz. Sayısalifadelerin her biri matematiksel ifade anlamına gelmez, telefon numarası gibi. </li>
          <li> Değişkenin ismi, değişkenin içeriğini etmelidir. Clean code yazmak için bu çok önemlidir. </li>
          <li> Değişkenler ekrana echo komutu ile yazdırılabilir. </li>
          <li> </li>
          <li> </li>
          40
      </ol>"

?>


/*

İsim Soyisim Yazdırma

*/

<?php
$isim = "Buse";
$soyisim = "Çetin";
$yas = 18;

echo $isim . $soyisim . "<br>";
echo $isim . " ". $soyisim . "<br>";
echo $isim $soyisim "<br>";


$uni =     "ADÜ";
$myo =     "AYMES";
$ad =      "Buse";
$soyad =   "Çetin";
$no =      "32099";

?>



/*

Uygulama - 1

*/


<?php
       <h3> Öğrenci Bilgileri </h3>
       <form action="" method="post">
        
           <label for=""> Üniversite Adı: </label>
           <input type="text" name="" id="uni" value ="<?php echo $uni ?>"> 
<br>
           <label for=""> MYO </label>
           <input type="text" name="" id="mo" value ="<?php echo $myo ?>"> 
<br>
           <label for=""> Öğrenci Adı </label>
           <input type="text" name="" id="ad" value ="<?php echo $ad ?>"> 
<br>
           <label for=""> Öğrenci Soydı </label>
           <input type="text" name="" id="soyad" value ="<?php echo $soyad ?>"> 
<br>
           <label for=""> Öğrenci Numarası </label>
           <input type="text" name="" id="no" value ="<?php echo $no ?>"> 
<br>
        </form>

    

    ?>

    <?php


    $dizi1 = array(1, 2, 3, 4, "kemal", "arıca", 130.5);
    $dizi2 = [1, "tarık", "koca", 227.5];

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";


    echo "Dizinin 5. Elemanı: $dizi1[5]";
    echo "<br>Dizinin 1. Elemanı:" . gettype($dizi1[1]);

    echo "<br>Dizinin 0. Elemanı: $dizi1[0]";
    echo "<br>Dizinin 1. Elemanı: $dizi1[1]";
    echo "<br>Dizinin 2. Elemanı: $dizi1[2]";
    echo "<br>Dizinin 3. Elemanı: $dizi1[3]";
    echo "<br>Dizinin 4. Elemanı: $dizi1[4]";
    echo "<br>Dizinin 5. Elemanı: $dizi1[5]";
    echo "<br>Dizinin 6. Elemanı: $dizi1[6]";


    echo "<h3> Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-1</h3>";

    foreach ($dizi1 as $value) {
        echo $value . "<br>";
    }

    echo "<h3> Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2</h3>";

    foreach ($dizi1 as $key => $value) {
        echo "$key - $value  <br>";
    }


    echo "<h3> Dizinin İçeriğinin For Döngüsü İle Yazdırılması</h3>";

    for ($i = 0; $i < count($dizi1); $i++) {
        echo $dizi1[$i] . "<br>";
    }



    $sayilar = array(1, 2, 3, 4, 5, 6);

    $sayilar = array(
        array(1, 3, 5, 7, 9),
        array(2, 4, 6, 8, 10)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizinisinin İçerisindeki 2. Dizinin 3 İndisli Elemanı: " .  $sayilar[1][3];

    echo "<br>Sayılar Dizinisinin İçerisindeki 1. Dizinin 4 İndisli Elemanı: " .  $sayilar[0][4];

    echo "<br>-------------";

    $sayilar = array(
        "integer" => array(55, 23, 15, 24),
        "double"   => array(13.5, 2.5, 1.36)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "Sayılar Dizinisinin İçerisindeki 1. Dizinin 1 İndisli Elemanı: " .  $sayilar["integer"][1];

    echo "<br>Sayılar Dizinisinin İçerisindeki 1. Dizinin 2 İndisli Elemanı: " .  $sayilar["double"][2];


    $bilgiler = array(
        "id"     => "0",
        "adi"    => "Neslihan",
        "soyadi" => "Gülmez",
        "gsm"    => "555 666 55 44",
        "yas"    => 32
    );
    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";

    echo "$bilgiler[adi] $bilgiler[soyadi] hoşgeldiniz.";

    $kullanicilar = array(
        "kullanici1"    => array(
            "id"     => "0",
            "adi"    => "Neslihan",
            "soyadi" => "Gülmez",
            "gsm"    => "555 666 55 44",
            "yas"    => 32
        ),
        "kullanici2"    => array(
            "id"     => "1",
            "adi"    => "Ahmet",
            "soyadi" => "Keskin",
            "gsm"    => "555 666 55 44",
            "yas"    => 32
        )
    );

    echo "<pre>";
    print_r($kullanicilar);
    echo "</pre>";




    // 8. HAFTA

    <?php

    $isimler = array();

    $isimler[] = "Ahmet";
    $isimler[] = "Mehmet";
    $isimler[0] = "Ayşe";
    $isimler[] = "Nur";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $isimler2 = array();

    $isimler2["isim1"] = "Kerim";
    $isimler2["isim2"] = "Hatice";
    $isimler2["isim3"] = "Burcu";
    $isimler2[] = "Hüseyin";
    $isimler2[] = "Gülcan";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";


    $ogrenciDetay = array(
        "id"        => 1,
        "adi"       => "Nurullah",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => "25",
        "dersler"   => array(
            "ders1" => "Veri Tabanı",
            "ders2" => "Web Programlama",
            "ders3" => "Mobil Programlama"
        ),
        "sinif"     => "2"
    );
    /* Uygulama: Öğrenci Detayı Dizisini Alt Alta döngüleri kullanarak yazdırınız. */

    echo "<pre>";
    print_r($ogrenciDetay);
    echo "</pre>";

    echo "Öğrencinin Dersleri: <br>";

    echo $ogrenciDetay["dersler"]["ders1"] . "<br>";
    echo $ogrenciDetay["dersler"]["ders2"] . "<br>";
    echo $ogrenciDetay["dersler"]["ders3"] . "<br>";

    /* Uygulama: Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta yazdırınız. */
    $ogrenciDetaylari = array(
        "ogrenci1" => array(
            "id"        => 1,
            "adi"       => "Nurullah",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => "25",
            "dersler"   => array(
                "ders1" => "Veri Tabanı",
                "ders2" => "Web Programlama",
                "ders3" => "Mobil Programlama"
            ),
            "sinif"     => "2"
        ),
        "ogrenci2" => array(
            "id"        => 1,
            "adi"       => "Ayşen",
            "soyadi"    => "Güler",
            "bolum"     => "Makine",
            "yas"       => "22",
            "dersler"   => array(
                "ders1" => "Matematik",
                "ders2" => "Sayı Teorileri",
                "ders3" => "Model Geliştirme"
            ),
            "sinif"     => "4"
        )
    );

    ?>


    <?php

        if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    } */


    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    /* eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* eşitlik Yoksa Varsa */
    if ($sayi1 != $sayi2) {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */
    if ("ogrenci" === "ogrenci") {
        echo "<br>Girilen değerler aynı";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* Denklik Varsa */
    if ($metin === "Adü") {
        echo "<br>Girilen değerler aynı : $metin";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* And Örneği */
    if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }

    /* OR Örneği */
    if (($sayi1 < $sayi2) or (15 > 25)) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }


    if ($sayi1 > $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    if ($sayi1 >= $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }



    /* uygulama: 
    1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 
    2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
    3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız. */



    echo "<hr>";
    $dogumYili = rand(1990, 2012);
    echo "Doğum Yılı: $dogumYili";
    if ((2022 - $dogumYili) >= 18) {
        echo "Ehliyet Alabilir";
    } else {
        echo "Ehliyet alamazsınız";
    }








    ?>




    <br><br> <br><br>
    




    ?>