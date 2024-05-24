<?php
// latihan update dan delete ke database
$conn = mysqli_connect('localhost', 'root', '', 'lat_dbase');
// mysqli_query($conn, "UPDATE tbl_nilai SET matakuliah = 'psikologi' WHERE nama_mhs = 'Husna'");
mysqli_query($conn, "DELETE FROM tbl_nilai WHERE nama_mhs = 'Husna'");

?>