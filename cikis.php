<?php

session_start();

$_SESSION=array();
session_destroy();
header("location:panelgiris.php");

//    echo "Kullanıcı Bilgileri ile giriş yapmalısınız."
?>