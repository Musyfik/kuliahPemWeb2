<?php

$conn = new mysqli('localhost', 'root', '', 'lat_dbase');
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
echo "koneksi berhasil";
echo "<br>";
$sql = "CREATE DATABASE db_latihan11";
if($conn->query($sql)===TRUE){
    echo "database berhasil di buat";
}else{
    echo "gagal memuat database" . $conn->error;
}
$conn->close();
?>