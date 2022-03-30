<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 3</title>
</head>
<body>
    <?php

    /* Uygulama Ödevi
    Kuyruk  ve Yığın  veri yığınının php üzrinde dizileri kullanarak örneklendirilmesini gerçekleştiriniz.
    */
    /* Rastgele üretlen sayı
    50'den büyükse
      Geçtiniz:Notunuz: xx
    50'den küçük ise
      Kaldınız:Notunuz: yy 
      uygulamasını gerçekleştiriniz
    */
   /* $rastgele_sayi = rand(10, 100);
    if($ogr_notu>=50) {
        echo "Geçtiniz - Notunuz: $rastgele_sayi";
   } else {
       echo "Kaldınız - Notunuz: $ogr_notu ";
   }*/
   $not = rand(10, 100);
   if($not > 50) {
   echo "Geçtiniz $not";
   } else {
     echo "Kaldınız $not";
   }


   echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";
   $yazi = "Aydın Adnan Menderes Üniversitesi";
   echo "\$yazi Değişkeninin İçeriği";
   echo "<br>\$yazi Değişkeninin türü" . gettype($yazi); 

   /*İçeriğin Büyük Harfe Dönüştürülmesi */
   echo "<br>\$yazi'nın büyük harfle yazılması:" . $byazi = strtoupper($yazi);
   echo "<br>\$yazi'nın küçük harfle yazılması:" . $byazi = mb_strtoupper($yazi)
   
   /*İçeriğin Küçük Harfe Dönüştürülmesi */;
   echo "<br>\$yazi'nın küçük harfle yazılması:" . $kyazi = strtolower($yazi);
   echo "<br>\$yazi'nın küçük harfle yazılması:" . $kyazi = mb_strtolower($yazi);
   echo "<br>"
   /* İçeriğin İlk Harfinin Büyük Olması */;
   echo "<br>\$yazi'nın ilk harfi büyük:" . $yazi = ucfirst($kyazi);
   echo "<br>";

    /* İçerikteki Her Kelimenin Büyük Harfle Dönüştürülmrsi */;
    echo "<br>\$yazi'nın Her Kelimenin Büyük  Başlaması:" . $yazi = ucwords($kyazi);
    echo "<br>";

    /*İçeriğin Harf Sayısı */
    echo "<br>$yazi'nın harf sayısı:" . strlen($yazi);
    echo "<br>"

    /* Ascıı Char Dönüşüm */;
    echo "Karakter karşılığı(65):" . chr(65);
    echo "<br>";
    echo "Karakter Karşılığı(100):" . chr(100);
    echo "<br>"

    /*0-255 arasındaki değerleri chr fonksiyonununa sokarak satır satır yazdırınız */;
    for($i = 33; $i <=126; $i++ ){
      echo "$i:" . chr($i) . "";
    }
    /*Metnin Parçalanarak Diziye Dönüştürülmesi */
    echo "<br><br>";
    echo$yazi . "<br>";
    $dizi= explode(" ", $yazi);
    echo "<pre>";
    print_r($dizi);
    echo "<pre>";

    /*Uygulama: Metin içerisindeki kelime ve cümle sayısını alt alta yazdırınız */
    $metin = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem assumenda deleniti dolorum iure, est, dignissimos corrupti animi et rerum impedit minima ad? Impedit distinctio ipsam inventore eum, obcaecati animi reprehenderit. ndgyrjfvkf jfbkuglknfb fjhgı jkskg. dsıır ssrglk.fdh. dghhefgdffmfkg ghug fdjghyr dmhr cbur dtr.";
    $kelimedizisi = explode(" " , $metin);
    $cumledizisi = explode(" ." , $metin);
    echo "Kelime Sayısı:" . count($kelimedizisi);
    echo "<br>";
    echo "Cümle Sayısı:" . count($cumledizisi);
    /*Uygulama: Veri tabanıdan 2022-11-20 şeklinde gelen  tarihi 20-11-2022 şeklinde gösteriniz */;
    $tarih = "2022-11-20";
    $tarihDizisi = explode("-" , $tarih);
    echo "<pre>";
    print_r($tarihDizisi);
    echo "</pre>";
     ECHO "Tarih: $tarihDizisi[2].$tarihDizisi[1].$tarihDizisi[0]";
      
     /*Dzinin Metine Dönştüülmesi(implode) */;
     echo "<br>";
     $sayilarDizisi = array (
       "Ocak",
       "Şubat",
       "Mart",
       "Nisan",
       "Mayıs",
       "Haziran"

     );
     echo "<pre>";
     print_r($sayilarDizisi);
     echo "</pre>";


      echo $sayilarString = implode("-", $sayilarDizisi);

      /*str_split String parçalama işlemi */;

      echo "<br>";

      $iban="TR00000000001111111222333333";
      $yeniiban= str_split($iban, 4);
      echo "<pre>";
      print_r($yeniiban);
      echo "</pre>";

      echo "Foreach İban";
      foreach($yeniiban as $parca){
        echo "$parca";
      }

      echo "İmplode İban";
      echo "<br>";
      echo "İmplode iban". implode("-", $yeniiban);
      echo "<br>";
 
      echo "For İban";
      for ($i = 0; $i < count($yeniiban); $i++) {
        echo $yeniiban[$i] . " ";
      }






    ?>
</body>
</html>