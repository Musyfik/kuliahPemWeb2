<?php
$satu = false;
$dua = false;
$tiga = false;
$empat = false;
$tidak = false;

if(isset($_POST['kirim'])){
if(isset($_POST['nama'])){
 $nama = $_POST['nama'];
 if($nama == 1){
    $satu = true;
 }else if($nama == 2){
    $dua = true;
 }else if($nama == 3){
    $tiga = true;
 }else if($nama == 4){
    $empat = true;
 }
 else{
    $tidak = true;
 }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method='post'>
<h3>Materi Pemrograman</h3>
<p>[1] Penggunaan IF</p>
<p>[2] Penggunaan SWITCH .. CASE</p>
<p>[3] Penggunaan Looping</p>
<p>[4] Penggunaan Array</p>
<span>Pilih materi yang ingin anda pelajari : </span>
    <input type="text" name='nama'>
    <button type='submit' name='kirim'>Kirim</button>
</form>
<hr>
    <?php if($satu):?>
    <h1>ini ketika di input angka satu</h1>
    <?php endif;?>
    <?php if($dua):?>
    <h1>ini ketika di input angka dua</h1>
    <?php endif;?>
    <?php if($tiga):?>
    <h1>ini ketika di input angka tiga</h1>
    <?php endif;?>
    <?php if($empat):?>
    <h1>ini ketika di input angka empat</h1>
    <?php endif;?>
    <?php if($tidak):?>
    <h1 style='color: red; font-style: italic;'>Inputan anda salah</h1>
    <?php endif;?>
</body>
</html>