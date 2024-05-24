<?php

// latihan while, do ... while, for dan for ... each
$angka = 1;
while($angka<=5){
    echo $angka;
    echo "<hr>";
    $angka++;
}
echo "<br>";
do{
    echo $angka;
    echo "<hr>";
    $angka++;
}while($angka<=9);

echo "<br>";

for($angka = 1; $angka <= 5; $angka++){
    echo $angka;
    echo "<hr>";
}
echo "<br>";
$hewan2 = array("kucing", "serigala", "macan", "buaya");
$hewan2[] = "harimau";
foreach($hewan2 as $hewan){
    echo $hewan;
    echo "<hr>";
}

?>