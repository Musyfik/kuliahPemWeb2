<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $materi = $_POST['materi'];
    function pindah($data){
        switch($data){
            case '1':
                header("Location:https://google.com");
                break;
            case '2':
                header("Location:https://google.com");
                break;
            case '3':
                header("Location:https://google.com");
                break;
            case '4':
                header("Location:https://google.com");
                break;
            default:
                echo "yang anda masukkan tidak sesuai";
        }
    }
    pindah($materi);
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
    <span>Pilih materi yang ingin anda pelajari : </span>
    <input type="text" name='materi'>
    <span>1 / 2 / 3 / 4</span>
    <button type='submit' name='kirim'>Kirim</button>
    </form>
</body>
</html>