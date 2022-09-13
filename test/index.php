<?php
include "db_baglanti.php"; //veri tabanı bilgilerini çağırdık.
if (isset($_SESSION["oturum"])) {
    // eğer oturum sessionu tanımlandıysa oturum açılmış demektir.
    // çünkü bu sessionu kullanıcı bilgileri tabloda kayıtlıysa tanımlamıştık.
    // başka bir yerde tanımlaması olmadığı için güvenilir bir kontrol sağlıyor.
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Anasayfa | Php Mutfağı</title>
    </head>

    <body>
        <?php
        echo "Hoşgeldin, " . $_SESSION["adi"];
        //session ile tanımlamış olduğumuz kullanıcı adını yazdık.
        ?>
        <br />
        <a href="cikis.php">Çıkış Yap</a>
    </body>

    </html>
<?php
} else {
    echo '<script>window.location.replace("login.php")</script>';
    //eğer oturum session tanımlanmadıysa kullanıcı giriş yapmamış demektir.
    //bundan dolayı giriş sayfasına yönlendirdik.
}
?>