<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>
<body>
    
<h3> Php'de Diziler </h3>
    <ol>
        <li> Dizi oluşturmak için dizi() fonksiyonu veya [] kullanılabilir. </li>
        <li> Dizi içerisinde farklı türlerde, çift içerir.(int, string, obje) (1,2,3,"Ali","Ahmet","125,20") </li>
        <li>"echo $ diziAdi " ile hesaplanamaz. Diziden Dizeye Dönüştürme Hatası verir. Ancak sayı 3 indisine sahip öğe elemanı "echo $diziAdi[3]" şeklinde yazdırılabilir. </li>
        <li> Dizinin dize ifadeler çift tırnak("") içinde. </li>
        <li> Dizinin int ifadeler üzerinden yazılabilir. </li>
        <li> Dizinin gücü virgül(,) ile konumlanır. </li>
        <li> Dizi içinde varsayılan olarak 0'dan başlar. </li>
        <li> Diziler içinde diziler. </li>
    </ol>

 <?php
 
$dizi1 = array(1, 2, 3, 4, "kemal", "arıca", 130.5);
$dizi2 = [1, "tarık", "koca", 227.5];
echo "<pre>";
print_r($dizi1);
echo "</pre>";

echo "<pre>";
print_r($dizi2);
echo "</pre>";

echo "Dizinin 5. elamanı: $dizi1[5]";
echo "<br>Dizinin 1. elamanı:" . gettype($dizi1[1]);

echo "<br>Dizinin 0. elamanı: $dizi1[0]";
echo "<br>Dizinin 1. elamanı: $dizi1[1]";
echo "<br>Dizinin 2. elamanı: $dizi1[2]";
echo "<br>Dizinin 3. elamanı: $dizi1[3]";
echo "<br>Dizinin 4. elamanı: $dizi1[4]";
echo "<br>Dizinin 5. elamanı: $dizi1[5]";
echo "<br>Dizinin 6. elamanı: $dizi1[6]";

echo "<h3>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-1</h3>";

foreach($dizi1 as $value) {
    echo $value . "<br>";
}

echo "<h3>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2</h3>";

foreach($dizi1 as $key => $value) {
    echo "$key - $value . <br>";
}

echo "<h3>Dizinin İçeriğinin Foreach Döngüsü İle Yazdırılması-2</h3>";

for ($i=0; $i < count($dizi1); $i++) {
echo $dizi1[$i] . "<br>";

}



$sayilar = array(1, 2, 3, 4, 5, 6);

$sayilar = array (
    array(1, 3, 5, 7, 9),
    array(2, 4, 6, 8, 10)
);

echo "<pre>";
print_r($sayilar);
echo "</pre>";

echo "Sayılar Dizisinin İçerisindeki 2. Dizinin 3. Elemanı: " . $sayilar[1][2];
echo "<br>Sayılar Dizisinin İçerisindeki 2. Dizinin 3. İndisli Elamanı: " . $sayilar[1][3];
echo "<br>Sayılar Dizisinin İçerisindeki 1. Dizinin 4. İndisli Elamanı: " . $sayilar[0][4];

echo "<br>";

$sayilar = array(
    "integer" => array(55, 23, 15, 24),
    "double" => array(13.5, 2.5, 1.36)
);
echo "<pre>";
print_r($sayilar);
echo "</pre>";

echo "<br>Sayılar Dizisinin İçerisindeki 1. Dizinin 1. İndisli Elamanı: " . $sayilar["integer"][1];
echo "<br>Sayılar Dizisinin İçerisindeki 1. Dizinin 2. İndisli Elamanı: " . $sayilar["double"][2];

$bilgiler= array(
    "id" => "0",
    "adi" => "Neslihan",
    "soyadi"=> "Gülmez",
    "gsm" => "555 666 55 44",
    "yas" => 32
);
 
echo "$bilgiler[adi] $bilgiler[souadi] hogeldiniz.";


echo "<pre>";
print_r($bilgiler);
echo "</pre>";


 $isimler = array();
 $isimler[] = "Ahmet";
 $isimler[] = "Mehmet";
 $isimler[] = "Aişe";
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

 $ogrenciDetay=array(
     "id" => 1,
     "adi" => "Nurrulah",
     "soyadi" => "Yıldız",
     "bolum" => "Bilgisayar",
     "yas" => "25",
     "dersler" => array(
         "ders1" => "Veri Tabanı",
         "ders2" => "Wep Programlama",
         "ders3" => "Mobil Programlama"
     ),
     "sinif" => "2"
    );

echo "<pre>";
 print_r($ogrenciDetay);
 echo "</pre>";

 echo "Öğrencinin Dersleri: <br>";

 echo $ogrenciDetay["dersler"]["ders1"] . "<br>";
 echo $ogrenciDetay["dersler"]["ders2"] . "<br>";
 echo $ogrenciDetay["dersler"]["ders3"] . "<br>";

 /* Uygulama Öğrenci Detayı Dizisiini Alt Alta döngüleri kullanarak yazıcaağız 
 $ogrenciDetay=array(
     "ogrenci1" => array()
    "id" => 1,
    "adi" => "Nurrulah",
    "soyadi" => "Yıldız",
    "bolum" => "Bilgisayar",
    "yas" => "25",
    "dersler" => array(
        "ders1" => "Veri Tabanı",
        "ders2" => "Wep Programlama",
        "ders3" => "Mobil Programlama"
    ),
    "sinif" => "2"
   );  
   */


    ?>
    <hr>
<h3>Koşul İfadeleri (If-Else)</h3>
<p>If-else bloklarında öncelikle koşul belirtilir ve sonraki dallama koşula göre devam eder.</p>
<h5>Karşılaştırma Opertaörleri</h5>
<ol>
    <li>== ($a==$b) eşit ise. (Genellikle Matematikdel bir karşılaştırma yapılır.)</li>
    <li>=== ($a===$b) denk ise. (Genellikle String bir karşılaştırma yapılır.)  </li>
    <li>!= ($a != $b) eşit değil ise. (Genellikle Matematikdel bir karşılaştırma yapılır.)</li>
    <li>!== ($a !== $b) denk değil ise. (Genellikle String bir karşılaştırma yapılır.) </li>
    <li>> ($a > $b) büyük ise.</li>
    <li>>= ($a >= $b) büyük eşit ise.</li>
    <li>< ($a < $b) küçük ise.</li>
    <li><= ($a <= $b) küçük eşit ise.</li>

</ol>

<h5>Mantıksal Operatörler</h5>
<ol>
<li> ! (olumsuzsa) (!$a) --> $a'nın değeri false ise true döner. Aksini yapar olumsuz mu diye sorar.</li>
<li> && - AND (ve) ($a && $b) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul sağlaamak zorundadır. Koşullardan bir tanesi false dönerse genel değer false olur.</li>
<li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç true döner. Herhangi birisinin koşulu sağlaması genel dönüşü true yapar.</li>

</ol>

<h4>Not:</h4>
<ol>
    <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
    <li>Else son kapanş koşuludur. (Herhangi bir şart belirtilmez. Hiçnir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>
</ol>





?>

</body>
</html>