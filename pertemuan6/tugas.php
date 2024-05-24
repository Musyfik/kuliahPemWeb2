<?php

$data = [
    ['alas'=>8, 'tinggi'=>4],
    ['alas'=>9, 'tinggi'=>6],
    ['alas'=>6, 'tinggi'=>2],
    ['alas'=>5, 'tinggi'=>3],
    ['alas'=>7, 'tinggi'=>3],
];
function luas($alas, $tinggi){
    return 0.5 * $alas * $tinggi;
}
$angka = 1;
foreach($data as $d){
    $alas = $d['alas'];
    $tinggi = $d['tinggi'];
    $luas = luas($alas, $tinggi);
    echo "luas segitiga ke - $angka dengan alas : $alas dan tinggi : $tinggi adalah : $luas <br><br> ";
    $angka++;
}

?>