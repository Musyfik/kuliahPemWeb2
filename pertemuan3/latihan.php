<?php

// latihan menggunakan if else dan switch case


$hari = 'rabu';

if($hari == 'rabu'){
    echo "hari pemersatu bangsa";
    echo "<br>";
}else{
    echo "waktunya login";
    echo "<br>";
}

switch($hari){
    case 'senin':
        echo "senin bahagia";
        break;
    case 'selasa':
        echo "selasa makan bersama";
        break;
    case 'rabu':
        echo "rabu thanksgiving";
        break;
    default:
        echo "tidak ada sarapan :(";
}


?>