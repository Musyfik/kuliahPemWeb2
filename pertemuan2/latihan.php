<?php

// latihan penggunaan variabel, method get dan method pos

$namaHewan = "Kucing";
$ekor = 2;
echo $namaHewan, " memiliki ", $ekor, " ekor";
echo "<hr>";
if(isset($_GET['kirim'])){
    $nama = $_GET['nama'];
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
   <form action="" method="get">
    <p>masukkan nama</p>
    <label for="">Nama : </label>
    <input type="text" name='nama'>
    <button type='submit' name='kirim'>Kirim</button>
   </form> 
   <?php if (isset($nama)):?>
   <p>nama yang anda masukkan : <?=$nama?></p>
   <?php endif;?>
</body>
</html>