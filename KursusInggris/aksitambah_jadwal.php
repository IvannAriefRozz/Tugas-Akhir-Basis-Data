<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$Kelas = $_POST['Kelas'];
$hari_tanggal = $_POST['hari_tanggal'];
$Jam = $_POST['Jam'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO Jadwal Values ('$id','$Kelas','$hari_tanggal','$Jam')");
 
// mengalihkan halaman kembali ke index.php
header("location:indexadmin.php");
 
?>