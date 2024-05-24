<?php

if(isset($_POST['submit'])){
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    $jumlah = [];
    $total = 0;
    $count = 0;
    
    for($angka = $awal; $angka <= $akhir; $angka++){
        if($angka % 2 != 0 && $angka % 3 == 0){
            $jumlah[] = $angka;
            $total += $angka;
            $count++;
        }
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
   <form action="" method='post'>
    <table>
        <tr>
            <td>Nilai Awal</td>
            <td>:</td>
            <td><input type="number" name='awal'></td>
        </tr>
        <tr>
            <td>Nilai Akhir</td>
            <td>:</td>
            <td><input name='akhir' type="number"></td>
        </tr>
    </table>
   <input type="submit" name='submit' value='Kirim'>
   </form> 
   <?php if(isset($_POST['submit'])):?>
   <p>bilangan ganjil yang habis dibagi 3 dari <?=$awal?> sampai <?=$akhir?> : <?php echo implode(", ", $jumlah)?></p>
   <p>banyaknya bilangan yang tampil : <?=$count?></p>
   <p>jumlah dari bilangan tersebut : <?=$total?></p>
   <?php endif;?>
</body>
</html>