<?php

$sayi = $_POST['sayi'];


$sayi = (int)$sayi;




function controls($sayi){
    if ($sayi % 3 == 0){
        echo "sayı 3 e tam bölünüyor.";
    }else{
        echo "sayı 3 e bölünmüyor.";
    }
}

if ($sayi == ""){
    echo "boş değer gönderilemez.";
}else{
    echo controls($sayi);
}

