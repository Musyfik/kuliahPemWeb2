<?php

// latihan array
// indexed or numeric array
$buah = array('mangga', 'apel', 'lemon', 'semangka');
echo $buah[0];
echo "<br>";
// associative array
$mahasiswa = array('nama'=>'ubay', 'nim'=>'2110', 'jurusan'=>'teknik informatika');
echo $mahasiswa['jurusan'];
echo "<br>";
// array multidimensional
$hewan = [['nama'=>'kucing', 'ekor'=>'satu'], ['nama'=>'beruang', 'ekor'=>'tidak ada'], ['nama'=>'ayam', 'ekor'=>'banyak']];
echo $hewan[1]['ekor'];
echo "<br>";
echo count($hewan);

?>