<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_dosen = $_POST['nama_dosen'];
$noinduk = $_POST['noinduk'];

 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO Dosen Values ('$id','$nama_dosen','$noinduk')");
 
// mengalihkan halaman kembali ke index.php
header("location:indexadmin.php");
 
?>