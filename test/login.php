<?php
//## include "dosyayolu/dosyayolu/dosya.php";
//bir dosyayı içeriye aktarmak için kullanılır.
//her sayfaya veritabanı bağlantı cümlesi yazmak yerine 1 kere yazıp dosyayı çağırmak daha mantıklıdır.
//projeyi başka veritabanına taşımakta kolay olur.
include "db_baglanti.php";

//oturum tanımlanmadıysa çalışmasını söyledik.
//isset() ve empty() gibi hazır fonksiyonların başında ! (ünlem) işareti olursa görevinin tam tersini yapar.
//isset(degiskeniniz) tanımlıysa demektir !isset(degiskeniniz) tanımlı değilse demektir.
//empty(degiskeniniz) boşsa demektir. !empty() boş değilse demektir.
if (!isset($_SESSION["oturum"])) {
    if ($_POST) {//eğer post işlemi gerçekleştiyse
        $kullanici_adi = strip_tags(htmlspecialchars(trim($_POST['kullanici_adi'])));
        $sifre = strip_tags(htmlspecialchars(trim($_POST['sifre'])));
        //bilgileri post yöntemi ile aldık.
        //trim() Sağdan ve soldan gereksiz boşlukları temizler.
        //htmlspecialchars() html özel taglarını temizler.
        //strip_tags() HTML, XML, PHP, JS taglarını kodlarını temizler. Normal metin olarak algılatır.

        if (empty($kullanici_adi) || empty($sifre)) { 
            //empt() boş olup olmadığını kontrol eder.
            $hata = '<div class="hata">
                        <p>Kullanıcı adı ve ya şifre boş bırakılamaz.</p>
                    </div>';
        } else {
            $sifre = sha1($sifre);
            //Şifrelerinizi veritabanında şifreli halde tutmalısınız.
            //Böylece güvenlik sorunlarının bazılarından kurtulursunuz.
            //Ayrıca güvenirliğiniz artar.
            //sha1() php de şifreleme yollarından sadece 1 tanesidir. Çözülemez.
            //md5() methoduda mevcut ancak artık bunu kırabiliyorlar.


            $uye = $db->prepare("SELECT * FROM uyeler WHERE kullanici_adi = :kullanici_adi AND sifre = :sifre");
            $uye->execute(array("kullanici_adi" => $kullanici_adi, "sifre" => $sifre));
            //sql kodlarımızı çalıştırdık
            //bilgilerin ilgili alanlara gitmesini sağladık.

            if ($uye->rowCount()) {
                //$uye değerinde satır sayısı varsa
                $uye  = $uye->fetch(); //verileri yazacağımızı belirttik ve buna hazırla dedik.

                $_SESSION["oturum"] = "true";//oturum adında session tanımladık. Bunun sayesinde oturum açtığını biliyoruz.
                $_SESSION["adi"] = $uye["adi"];//hangi kullanıcının girdiğini öğrendik.
                echo '<script>window.location.replace("index.php")</script>';//giriş yapınca artık kullanıcı anasayfasına yönlendirdik.
            } else {
                //Tabloda girdiğini bilgilere ait kullanıcı bulamadıysa.
                $hata = '<div class="hata">
                            <p>Kullanıcı adı ve ya şifre hatalıdır.</p>
                        </div>';
            }
        }
    }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Üye Girişi | Php Mutfağı</title>
        <!--
            aşağıdaki iki satırlık kod google fonts larıdır.
            size nasıl kullanılması gerektiğini ve neleri kopyalamanız gerektiğini söyler.
            farklı fontları denemenizi tavsiye ediyoruz.

            https://fonts.google.com/
        -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">
        <!-- google fonts bitiş. -->
    </head>
    <style>
        /* CSS KODLARIMIZ */
        body {
            /* eğer başında nokta(.) yoksa direk yazmış olduğunuz tag adının özelliklerine etki eder. */
            background-color: #f1f1f1; /* arkaplan rengi */
        }

        .ortala { 
            /* ortala adında class oluşturduk ve bu özellikleri verdik. */
            width: 20%; /* genişliği ekranın yüzde 20 sini kaplasın */
            margin-left: auto; /* sol tarafa otomatik kendini ayarlasın ki ekranın ortasında dursun */
            margin-right: auto;/* sag tarafa otomatik kendini ayarlasın ki ekranın ortasında dursun */
            /* right ve left auto olursa ekranın ortasında durar otomatik kendini ayarlar. */
            margin-top: 10%; /* bu class a sahip tagların üstten boşlukları ekranın yüzde 10nu kadar olsun. */
        }

        .hata {
            background: #ff8164; 
            border: solid 1px #ff4013; /* oluşturulan tagın etrafına çizgi çek. Şeklini kalınlığını ve rengini belirledik. */
            padding: 0px 15px; /* iç kısmında boşluklar oluştur. Yukarıdan ve aşağıdan 0px sağdan soldan 15px boşluk ver. */
            font-family: 'Lato', sans-serif; /* fontu bu olsun. */
            color: #fff; /* rengi */
            border-radius: 3px; /* köşelerini 3px ovalleştir. rakamı arttırarak daha iyi anlayabilirsiniz. */
            margin-bottom: 15px; /* altından 15px boşluk oluştur. Sonrasında gelen tag ile birleşmesin diye. */
        }

        .formum {
            width: 89%;
            background-color: #fff;
            border-radius: 3px;
            border: solid 1px #ddd;
            padding: 15px;
        }

        .grupla {
            display: block; /* varsayılan özelliklerini hiçe say. Eğer yazılmazsa yazmış olduğunuz css si görmeyebilir. */
            width: 100%;
            height: auto; /* yüksekğini otomatik içeriğe göre ayarla. */
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: 700; /* yazının kalınlığını ayarlar 100 den başlayıp 900 e kadar 100 er 100 er artarak gider. 100, 200, 300, 400 ... */
            font-family: 'Lato', sans-serif;
            font-size: 14px; /* yazı boyutu */
            color: #333;/* yazı rengi */
            margin-bottom: 3px;
        }

        input {
            display: block;
            border: solid 1px #ddd;
            width: 98%;
            height: 35px;
            font-family: 'Lato', sans-serif;
            font-size: 14px;
        }

        button {
            display: block;
            border: solid 1px #0077bd;
            background-color: #00a1ff;
            font-family: 'Lato', sans-serif;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            margin-left: auto;
            margin-right: auto;
            text-align: center; /* içerisine yazılan yazıları sağdan soldan ortala */
            padding: 7px 15px;
            cursor: pointer;  /* mouse üzerine gelince tıklanma şeklini alsın. */
        }
    </style>

    <body>
        <div class="ortala">
            <?php 
            if(isset($hata)) echo $hata; // eğer hata değişkeni tanımlandıysa yaz.
            ?>
            <div class="formum">
                <form action="login.php" method="POST">
                    <div class="grupla">
                        <label>Kullanıcı Adınız</label>
                        <input type="text" name="kullanici_adi" />
                        <!--
                            type ifadesi inputun türünü belirler
                            yazımı, şifremi, mail adresimi vb.
                            text  , password, email        vb.
                            ******
                            name ise inputun adını belirler
                            post olduğu zaman bu değişken ismi ile gider.
                        -->
                    </div>
                    <div class="grupla">
                        <label>Şifreniz</label>
                        <input type="password" name="sifre" />
                    </div>
                    <button type="submit">Giriş</button>
                    <!-- 
                        type ifadesi butonun türünü belirler.
                        formu göndersin, formu resetlesin, buton olarak kalsın vb.
                        submit         , reset           , button              vb.
                        type ları içerisinde bulunduğu formu etkiler.
                    -->
                </form>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    echo '<script>window.location.replace("index.php")</script>';
    //eğer kullanıcı oturum açtıysa giriş sayfasını görmesine gerek yok.
    //bu yüzden direk anasayfaya yönlendirdik.
}
?>