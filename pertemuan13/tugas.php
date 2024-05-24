<?php
$koneksi = mysqli_connect("localhost", "root", "", "pertemuan13");
$hasil = mysqli_query($koneksi, "SELECT * FROM latihan ORDER BY role asc");
if(isset($_POST['kirim'])){
    $pilihan = $_POST['rubah'];
    $nama = $_POST['nama'];
$hasil = mysqli_query($koneksi, "SELECT * FROM latihan WHERE nama = '$nama'");
// $hasil = mysqli_query($koneksi, "SELECT * FROM latihan WHERE role = '$pilihan'");
}
// while($data=mysqli_fetch_row($hasil)){
//     echo $data[0] . "<br>";
//     echo $data[1] . "<br>";
//     echo $data[2] . "<br>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='1' cellpadding='10' cellspacing='0'>
        <?php while($data=mysqli_fetch_row($hasil)):?>
        <tr>
            <td><?=$data[0]?></td>
            <td><?=$data[1]?></td>
            <td><?=$data[2]?></td>
            <td><?=$data[3]?></td>
        </tr>
        <?php endwhile;?>
    </table>
    <br>
    <hr>
    <br>
    <form action="" method='post'>
    <select name="rubah" id="rubah">
        <option value="x">Rubah Tampilan</option>
        <option value="x">Semua Data</option>
        <option value="dosen">Dosen</option>
        <option value="mahasiswa">Mahasiswa</option>
    </select>
    <button type='submit' name='kirim'>Terapkan</button>
    <br><br>
    <label for="">Cari Nama</label>
    <input type="text" name='nama'>
    <button type='submit' name='kirim'>Terapkan</button>
    </form>
</body>
</html>