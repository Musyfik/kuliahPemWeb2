<?php


// latihan built in php
// string

$tulisan = "hari ini saya akan belajar pemrograman php";
echo $tulisan;
echo "<hr>";
echo strlen($tulisan);
echo "<hr>";
echo strtoupper($tulisan);
echo "<hr>";
echo strtolower($tulisan);
echo "<hr>";
echo ucfirst($tulisan);
echo "<hr>";
echo ucwords($tulisan);
echo "<hr>";

// tanggal / waktu

echo Date("d-F-Y");
echo "<hr>";
echo getdate()['minutes'];
echo "<hr>";
$sekarang = getdate();
$bulanini = $sekarang['month'];
$hariini = $sekarang['mday'];
$hariin = $sekarang['wday'];
echo $bulanini;
echo "<hr>";
echo $hariini;
echo "<hr>";
echo $hariin;


?>