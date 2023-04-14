<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Anasayfa</title>

    <!-- <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script> -->

    <!-- Google font linkleri -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">  

    <link rel="stylesheet" href="css/style.css"> <!--Kendi dosyamdaki css linki-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"> <!-- Bootstarp icon linki-->

    <!-- todo owlcarousel linkleri (Eğitimler kısmındaki resimlerimizin kayma işlemleri için) -->
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">



    
</head>
<body>
    <section id="menu">
        <div id="logo">Eğitimci</div>
        <nav>     
            <a href=""><i class="bi bi-house-check-fill ikon"></i>Anasayfa</a>
            <a href=""><i class="bi bi-info-square-fill ikon"></i>Hakkımızda</a>
            <a href=""><i class="bi bi-mortarboard-fill ikon"></i>Eğitimler</a>
            <a href=""><i class="bi bi-microsoft-teams ikon"></i>Ekip</a>
            <a href=""><i class="bi bi-geo-alt ikon"></i>İletişim</a>
        </nav>
    </section>

    <section id="anasayfa">
        <!-- arka resmin üstünde bir siyahımsı perde olacak bunun için bir div açıyoruz -->
        <div id="black">
            
        </div>
    </section>

    <div id="icerik">
        <h2>Eğitimci</h2>
        <hr width="300" align=left>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit animi magnam corporis rem maxime voluptatem illo ullam optio assumenda cupiditate earum officia repudiandae exercitationem quam illum, ducimus dignissimos eaque debitis.</p>
    </div>

    <!--TODO  HAKKIMIZDA BÖLÜMÜ -->


    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                </h5>
            </div>

            <div id="sag">
                <span>L</span>
                <p id="psag">orem ipsum dolor sit amet consectetur adipisicing elit. Fugiat provident, porro, iure distinctio nobis dolores ad eum cum quae, est odio pariatur? Quidem impedit assumenda eius id laudantium, laborum sunt!</p>
            </div>
            <img src="img/about.jpg" alt="" class="img-fluid mt100">
            <p id="pson">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ratione delectus eum sunt sit tempore facere inventore qui! Numquam non voluptate harum sequi aperiam iure facere quibusdam officiis eum expedita.</p>
        </div>
    </section>

    <!--TODO EĞİTİMLER BÖLÜMÜ -->

    <section id="egitimler">
        <div class="container">
            
            <h3>Eğitimler</h3>

            <div class="owl-carousel owl-theme"> <!--! Bu dive (class="owl-carousel owl-theme") bu clası vermem gerekiyordu ancak eklediğim anda resimler kayboluyor yani yapmak istediğimiz kayan resimler caruselini oluşturamamış oldum-->
                <!-- ! yukarda bahs ettiğim sorunun kaynağını tesbit ettim ancak çözümünü bulamadım (owl.carousel.min.css) dosyasındaki (display:none;) özelliğinden kaynaklanmaktadır. -->
                <!-- todo sayfa da body sonundaki scrip linkelerin sırasından kaynaklı olduğunu ve owl-js linkini Jquery linkinden sonraya kaydırınca sorun düzelti bi önceki display:none; özelliğine dokunmadan bıraktım. -->

                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">
                        HTML5 ve CSS3 Eğitimi
                    </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">
                        HTML5 ve CSS3 Eğitimi
                    </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">
                        HTML5 ve CSS3 Eğitimi
                    </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">
                        HTML5 ve CSS3 Eğitimi
                    </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.</p>
                </div>

                <div class="card item" data-merge=1.5>
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardbaslik">
                        HTML5 ve CSS3 Eğitimi
                    </h5>
                    <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="ekip">
        <div class="container">
            <h3 id="h3ekip">Ekiip</h3>

            <div class="sutun-sol-sag">
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Hakan ÇELİK</h4>
                <p class="pekip">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, illum.
                </p>

                <div class="icon-ekip">
                    <a href="#"><i class="bi bi-facebook social"></i></a>
                    <a href="#"><i class="bi bi-instagram social"></i></a>
                    <a href="#"><i class="bi bi-envelope-at social"></i></a>
                    <a href="#"><i class="bi bi-twitter social"></i></a>
                </div>
            </div>

            <div class="sutun-orta">
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Sibel SADE</h4>
                <p class="pekip">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, illum.
                </p>

                <div class="icon-ekip">
                    <a href="#"><i class="bi bi-facebook social"></i></a>
                    <a href="#"><i class="bi bi-instagram social"></i></a>
                    <a href="#"><i class="bi bi-envelope-at social"></i></a>
                    <a href="#"><i class="bi bi-twitter social"></i></a>
                </div>
            </div>

            <div class="sutun-sol-sag">
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Hülya CANLI</h4>
                <p class="pekip">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni, illum.
                </p>

                <div class="icon-ekip">
                    <a href="#"><i class="bi bi-facebook social"></i></a>
                    <a href="#"><i class="bi bi-instagram social"></i></a>
                    <a href="#"><i class="bi bi-envelope-at social"></i></a>
                    <a href="#"><i class="bi bi-twitter social"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim">İletişim</h3>

            <!-- form etiketini açıp actiona index.php ekleme sebebimiz formdaki veri göndermelerin sağlanması gerekli php komutlarını index sayfasından girdiğimizden dolayıdır.-->
            <form action="index.php" method="post">
                <div id="iletisimopak">
                    <div id="formgroup">
                        <div id="solform">
                            <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                            <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                        </div>
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <input type="text" name="konu" placeholder="Konu Başlığı Girin" required class="form-control">
                        </div>
                        <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>

                        <input type="submit" value="Gönder">
                    </div>

                    <div id="adres">
                        <h4 id="adresbaslik">Adres : </h4>
                        <p class="padres">Necip Fazıl Kısakürek Mah.</p>
                        <p class="padres">Akyıldız Caddesi</p>
                        <p class="padres">Köprülü Sokak No:123</p>
                        <p class="padres">0212 389 99 99</p>
                        <p class="padres">Email : egitimci@egitim.com</p>

                    </div>
                </div>
            </form>

            <footer>
                <div id="copyright">
                    2020 | Tüm Hakları Saklıdır.
                </div>
                <!-- <br> -->
                <div id="socialfooter">
                    <a href="#"><i class="bi bi-facebook social"></i></a>
                    <a href="#"><i class="bi bi-instagram social"></i></a>
                    <a href="#"><i class="bi bi-envelope-at social"></i></a>
                    <a href="#"><i class="bi bi-twitter social"></i></a>
                </div>

                <a href="#menu">
                    <i class="bi bi-arrow-up-circle" id="up"></i>
                </a>


            </footer>
        </div>
    </section>

    

    
    <!-- todo jquery cdn linki kendi sayfasından alıp ekledik (Eğitimler kısmındaki resimlerimizin kayma işlemleri için)-->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>

    <!--todo owlcarousel JS linki (Eğitimler kısmındaki resimlerimizin kayma işlemleri için)-->
    <script src="owl/owl.carousel.min.js"></script>

    <!-- şimdide owlcarousel sitesinden alıp owl dosyasına eklediğimiz JS kodları barındıran scrip kodlarımızn olduğu dosyayı eklicez -->
    <script src="owl/script.js"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script> -->
</body>
</html>


<?php
//todo baglanti.php sayfasını buraya çekmek için komut veriyoruz

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
{
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["mail"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];

    $ekle = "INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('$adsoyad','$telefon','$email','$konu','$mesaj')";

    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız Başarı ile Gönderilmiştir.')</script>";
    }else{
        echo "<script>alert('Mesajınız Gönderilken Bir Hata Oluştu.')</script>";
    }


}


?>