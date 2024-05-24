<?php

$matriks = 
[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
// foreach($matriks as $matrik){
//     echo $matrik[0];
//     echo $matrik[1];
//     echo $matrik[2];
//     echo "<br>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <table border='1' cellpadding='20' cellspacing='0'>
   <?php foreach($matriks as $matrik) :?>
        <tr>
            <td><?=$matrik[0]?></td>
            <td><?=$matrik[1]?></td>
            <td><?=$matrik[2]?></td>
        </tr>
    <?php endforeach;?>
    </table>
</body>
</html>