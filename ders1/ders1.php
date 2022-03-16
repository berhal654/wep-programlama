<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wep Programlama</title>
</head>
<body>
    <!--  -->
    <?php
    // Açıklama satiri
    /*Aciklama */
    /* kullanılan komutlar 
    echo ekrana yazdırma işlemi yapar.
      İçerisinde html etiketleri kllanılabilir.
      Çift ile tek tırnak kullnılabilir.
      Çift tırnak içerisinde değişken içerikleri gösterilebilir.
      Nokya işareti ile birleştirme yapılabilir 
      \ kaçış karekteridir. Özel ifadelerden önce kullanılır. */
    
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo '<h4>Aydın Meslek Yüksekokulu</h4>';
    echo "Bilgisayar Programcılığı " ." Wep Teknolojileri"."<br>";
    echo "Bilgisayar Programcılığı" . "<br>"."Wep Teknolojileri";

    echo "<hr> <h4> Değişken Tanımlama Kuralları</h4>";
    echo "<ol>
            <li>Değişken işlemleri $ ile başlar.</li>
            <li>Değişken işlemleri sayısal bir ifade ile başlar.</li>
            <li>Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa birinci_sinif örneklerindeki kullanımlar önerilir.</li>
            <li>Değişken ve dosya isimlerinde Türkçe karekter kullanılmalıdır.</li>
            <li>Değişken işlemlerinde büyük küçük harf kullanımına duyarlıdır. \$sayi != \$Sayi</li>
            <li>Değişken içerisinde eğer metinsel bir ifade varsa çifttırnak (\") veya tek tırnak (') kullanılabilir.</li>
            <li>Değişken içerisinde eğer sayısal ifade varsa tırnak kullanılmadan yazılır.</li>
            <li>Değişken ismi, değişkenin içeriğini ifade etmeli.</li>
     </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";

    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 34;

    echo $isim ." " .$soyisim;
    echo "<br>";
    echo "$isim $soyisim"; 
    echo "<br>";

    /* Uygulama :
         Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
         Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.
     */
    echo "Uygulama";
    echo "<br>";
    $universite   = "Adnan Menderes Ünivrsitesi";
    $meslek       = "Aydın Meslek Yüksekokulu";
    $ad           = "Ebru";
    $soyad        = "Kaya";
    $numara       = 216001030;

   




    ?>
    <form action="">
        <label for="uni">Üniversite</label>
        <input type="text" name="" value="<?php echo $universite; ?>" id=""><br>

        <label for="meslek">MYO</label>
        <input type="text" name="" value="<?php echo $meslek; ?>" id=""><br>

        <label for="ad">İsim</label>
        <input type="text" name="" value="<?php echo $ad; ?>" id=""><br>

        <label for="soyad">Soyisim</label>
        <input type="text" name="" value="<?php echo $soyad; ?>" id=""><br>

        <label for="numara">Numara</label>
        <input type="text" name="" value="<?php echo $numara; ?>" id=""><br>
</form>




    
</body>
</html>