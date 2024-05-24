<?php
$nama = "Musyfik Ubaidillah";
$email = "musyfiku@gmail.com";
$jurusan = "Teknik Informatika";
$hobi = "Ngoding";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <style>
        h1{
            text-align: center;
            color: red;
        }
        .kotak p{
            color: blue;
            font-size: 1.5rem;
        }
        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
   <h1>BIODATA</h1> 
   <div class="kotak">
    <p>Nama : <?=$nama?></p>
    <p>Email : <?=$email?></p>
    <p>Jurusan : <?=$jurusan?></p>
    <p>Hobi : <?=$hobi?></p>
   </div>
</body>
</html>