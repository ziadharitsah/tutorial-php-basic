<?php


function scanf ($masukkan){
    // echo("Masukkan : ");
    echo $masukkan;
    $input = fopen("php://stdin","m1");
    $m1 = trim(fgets($input));
    return $m1;
}



?>