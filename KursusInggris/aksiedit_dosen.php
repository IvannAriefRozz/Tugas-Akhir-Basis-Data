<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_dosen = $_POST['nama_dosen'];
$noinduk = $_POST['noinduk'];

// update data ke database
mysqli_query($koneksi,"UPDATE Dosen SET nama_dosen='$nama_dosen', noinduk='$noinduk' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:indexadmin.php");
 
?>