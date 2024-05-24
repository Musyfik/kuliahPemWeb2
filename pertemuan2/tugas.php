<?php

if(isset($_POST['hitung'])){
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $rata = ($uts + $uas + $tugas) / 3;
    $confirm = 'ada';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>
    <form action="" method='post'>
        <table>
        <tr>
            <td><label for="">Nama</label></td>
            <td>:</td>
            <td><input type="text" name='nama'></td>
        </tr>
        <tr>
            <td><label for="">Jurusan</label></td>
            <td>:</td>
            <td><input type="text" name='jurusan'></td>
        </tr>
        <tr>
            <td><label for="">Nilai Tugas</label></td>
            <td>:</td>
            <td><input type="text" name='tugas'></td>
        </tr>
        <tr>
            <td><label for="">Nilai UTS</label></td>
            <td>:</td>
            <td><input type="text" name='uts'></td>
        </tr>
        <tr>
            <td><label for="">Nilai UAS</label></td>
            <td>:</td>
            <td><input type="text" name='uas'></td>
        </tr>
        </table>
        <button type='submit' name='hitung'>Hitung</button>
    </form>
    <?php if(isset($confirm)):?>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$nama?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?=$jurusan?></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><?=$tugas?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?=$uts?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?=$uas?></td>
            </tr>
            <tr>
                <td>Rata-rata</td>
                <td>:</td>
                <td><?=$rata?></td>
            </tr>
        </table>
    <?php endif;?>
</body>
</html>