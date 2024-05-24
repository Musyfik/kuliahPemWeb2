<?php

if(isset($_POST['tombol'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $pelajaran = $_POST['pelajaran'];
    $jmlHadir = $_POST['jmlHadir'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $h = true;


    // hitung
    $jmlHadir = ($jmlHadir/18) * 100 * 0.10;
    $tugas = $tugas * 0.20;
    $uts = $uts * 0.30;
    $uas = $uas * 0.40;
    
    $nilaiAkhir = $jmlHadir + $tugas + $uts + $uas;
    if($nilaiAkhir>=80){
        $grade = "A";
    }elseif($nilaiAkhir>=70){
        $grade = "B";
    }elseif($nilaiAkhir>=60){
        $grade = "C";
    }elseif($nilaiAkhir>=50){
        $grade = "D";
    }else{
        $grade = "E";
    }
    if($nilaiAkhir>=65){
        $keterangan = "LULUS";
        $warna = "green";
    }else{
        $keterangan = "TIDAK LULUS";
        $warna = "red";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
   <h1>Program untuk menampilkan nilai akhir dan keterangan grade</h1> 
   <form action="" method='post'>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name='nama'></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="number" name='nim'></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name='pelajaran'></td>
        </tr>
        <tr>
            <td>Jumlah Kehadiran</td>
            <td>:</td>
            <td><input max="18" type="number" name='jmlHadir'></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><input type="number" name='tugas'></td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>:</td>
            <td><input type="number" name='uts'></td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>:</td>
            <td><input type="number" name='uas'></td>
        </tr>
    </table>
        <button type='submit' name='tombol'>Hitung</button>
   </form>
   <?php if(isset($h)):?>
    <h1>Hasil :</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$nama;?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?=$nim;?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?=$pelajaran;?></td>
        </tr>
        <tr>
            <td>Nilai Kehadiran</td>
            <td>:</td>
            <td><?=floor($jmlHadir);?><td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?=$tugas;?></td>
        </tr>
        <tr>
            <td>UTS</td>
            <td>:</td>
            <td><?=$uts;?></td>
        </tr>
        <tr>
            <td>UAS</td>
            <td>:</td>
            <td><?=$uas;?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td>:</td>
            <td><?=$grade;?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td style='color:<?=$warna?>'><?=$keterangan;?></td>
        </tr>
    </table>
    <?php endif;?>
</body>
</html>