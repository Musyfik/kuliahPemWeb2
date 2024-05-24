<?php
$waktu = Date("d-F-Y");
$detik = getdate()['seconds'];
echo "Sekarang anda berada dalam waktu : $waktu => $detik detik";
echo "<br>";
$tulisan = "ini adalah tulisan kecil yang dirubah menjadi besar menggunakan PHP";
echo strtoupper($tulisan);
?>