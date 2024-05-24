<?php

$nama_file = "contoh.txt";

if(file_exists($nama_file)){
    // Buka file dalam mode baca dan tulis
    $berkas1 = fopen($nama_file, "r+");
    if ($berkas1) {
        $pencacah1 = (integer)trim(fgets($berkas1, 255));
        $pencacah1++;
        // Pindahkan pointer file ke awal untuk menulis ulang
        rewind($berkas1);
        fputs($berkas1, $pencacah1);
        fclose($berkas1);
    } else {
        echo "Gagal membuka file untuk pembaruan.";
    }
} else {
    // File tidak ada, buat file baru dan inisialisasi pencacah
    $pencacah1 = 1;
    $berkas1 = fopen($nama_file, "w");
    if ($berkas1) {
        fputs($berkas1, $pencacah1);
        fclose($berkas1);
    } else {
        echo "Gagal membuat file baru.";
    }
}

echo "Anda pengunjung ke - $pencacah1 <br>";



?>