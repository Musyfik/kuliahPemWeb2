<?php

if(isset($_GET['hitung'])){
$pilihan = $_GET['pilihan'];
$nilai1= intval($_GET['nilai1']);
$nilai2= intval($_GET['nilai2']);

// if($pilihan == '/'){
//    $hasil = $nilai1 / $nilai2;
// }elseif($pilihan == 'x'){
//    $hasil = $nilai1 * $nilai2;
// }elseif($pilihan == '-'){
//     $hasil = $nilai1 - $nilai2;
// }elseif($pilihan == '+'){
//     $hasil = $nilai1 + $nilai2;
// }else{
//     $hasil = "pilih operator yang ada !";
// }

switch($pilihan){
    case '/':
    $hasil = $nilai1 / $nilai2;
    break;
    case 'x':
    $hasil = $nilai1 * $nilai2;
    break;
    case '-':
    $hasil = $nilai1 - $nilai2;
    break;
    case '+':
    $hasil = $nilai1 + $nilai2;
    break;
    default:
    $hasil = "pilih operator yang ada !";

}


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
    <form action="">
        <table>
            <tr>
                <td>Nilai I</td>
                <td></td>
                <td>Nilai II</td>
            </tr>
            <tr>
                <td><input type="text" name='nilai1'></td>
                <td>
                    <select name="pilihan" id="">
                        <option value="p">Pilih Operator</option>
                        <option value="x">x</option>
                        <option value="/">/</option>
                        <option value="-">-</option>
                        <option value="+">+</option>
                    </select>
                </td>
                <td><input type="text" name='nilai2'></td>
                <td><button type='submit' name='hitung'>Hitung</button></td>
            </tr>
        </table>
    </form>
    <h1>Hasil :</h1>
    <?php if(isset($hasil)):?>
    <p><?=$hasil?></p>
    <?php endif;?>
</body>
</html>