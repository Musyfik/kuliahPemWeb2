<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $data = "$nama\n$email\n$komentar\n\n";

    $berkas = fopen("bukutamu.dat", "a");
    fwrite($berkas, $data);
    fclose($berkas);
    $notif = true;
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
    <h1>Masukkan data</h1>
    <p>data yang anda masukkan akan tersimpan dalam file bukutamu.dat</p>
    <form action="" method='post'>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name='nama'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name='email'></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td><textarea name="komentar" id=""></textarea></td>
            </tr>
        </table>
        <button type='submit' name='simpan'>Simpan</button>
    </form>
    <?php if(isset($notif)):?>
        <h1 style='color: blue; font-style: italic;'>Terimakasih telah mengirimkan data</h1>
    <?php endif;?>

</body>
</html>