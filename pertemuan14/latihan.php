<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_latihan14");
if(isset($_POST['kirim'])){
    $kode = (int)$_POST['kode'];
    $jumlah = (int)$_POST['jumlah'];
    $query = "CALL update_datatable($kode, $jumlah)";
    mysqli_query($koneksi, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
   <h2>Tabel 1</h2> 
   <table border='1' cellspacing='0' cellpadding='10'>
    <tr>
        <th>kode</th>
        <th>nama barang</th>
        <th>jumlah</th>
    </tr>
    <?php
    $tabel1 = mysqli_query($koneksi, "SELECT * FROM tabel1");
    while($dataku=mysqli_fetch_row($tabel1)){
        echo "
       <tr>
       <td>$dataku[0]</td> 
       <td>$dataku[1]</td> 
       <td>$dataku[2]</td> 
       </tr>
        ";
    }
    ?>
   </table>
   <h2>Tabel 2</h2> 
   <table border='1' cellspacing='0' cellpadding='10'>
    <tr>
        <th>kode</th>
        <th>nama barang</th>
        <th>jumlah</th>
    </tr>
    <?php
    $tabel2 = mysqli_query($koneksi, "SELECT * FROM tabel2");
    while($dataku=mysqli_fetch_row($tabel2)){
        echo "
       <tr>
       <td>$dataku[0]</td> 
       <td>$dataku[1]</td> 
       <td>$dataku[2]</td> 
       </tr>
        ";
    }
    ?>
   </table>
   <h2>Kirim Barang</h2>
   <form action="" method='post'>
    <label for="">Kode Barang</label>
    <select name="kode" id="">
        <option value="1001">1001/Buku</option>
        <option value="1002">1002/pulpen</option>
    </select>
    <label for="">Jumlah</label>
    <input type="text" name='jumlah'>
    <button type='submit' name='kirim'>Kirim</button>
   </form>
</body>
</html>