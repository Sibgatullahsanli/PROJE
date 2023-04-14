<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="root";
$vt_adi="egitimci";

$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

if(!$baglan)
{
    die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_errno());
}
else{
    echo "Bağlantı Başarılı";
}

?>