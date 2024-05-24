<?php

// $sql = "CREATE TABLE tbl_nilai (
//     nim VARCHAR(9) PRIMARY KEY,
//     nama_mhs VARCHAR(30),
//     matakuliah VARCHAR(20),
//     uts FLOAT(5,2),
//     uas FLOAT(5,2),
//     tugas FLOAT(5,2),
//     jmlhadir INT(2)
// );"
$conn = mysqli_connect('localhost', 'root', '', 'lat_dbase');
$hasil = mysqli_query($conn, "SELECT * FROM tbl_nilai");
if(isset($_POST['kirim'])){
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];
$hadir = $_POST['hadir'];
$query = "INSERT INTO tbl_nilai(nim, nama_mhs, matakuliah, uts, uas, tugas, jmlhadir) VALUES('$nim', '$nama', '$matkul', $uts, $uas, $tugas, $hadir)";
mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
   <form action="" method='post'>
    <table> 
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name='nim'></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name='nama'></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><input type="text" name='matkul'></td>
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
        <tr>
            <td>Tugas</td>
            <td>:</td>
            <td><input type="number" name='tugas'></td>
        </tr>
        <tr>
            <td>Jumlah Hadir</td>
            <td>:</td>
            <td><input type="number" name='hadir'></td>
        </tr>
    </table>
        <button type='submit' name='kirim'>Kirim</button>
   </form> 
   <br>
   <hr>
   <br>
   <h2>Daftar Mahasiswa</h2>
   <table border='1' cellpadding='10' cellspacing='0'>
    <tr>
        <td>NIM</td>
        <td>Nama</td>
        <td>Mata Kuliah</td>
        <td>UTS</td>
        <td>UAS</td>
        <td>Tugas</td>
        <td>Kehadiran</td>
    </tr>
    <?php while($data = mysqli_fetch_row($hasil)):?>
        <tr>
            <td><?=$data[0]?></td>
            <td><?=$data[1]?></td>
            <td><?=$data[2]?></td>
            <td><?=$data[3]?></td>
            <td><?=$data[4]?></td>
            <td><?=$data[5]?></td>
            <td><?=$data[6]?></td>
        </tr>
        <?php endwhile;?>
   </table>
</body>
</html>