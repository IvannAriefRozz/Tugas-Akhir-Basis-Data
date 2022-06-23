<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$id_jadwal = $_POST['id_jadwal'];
$id_dosen = $_POST['id_dosen'];
$Nama_Mahasiswa = $_POST['Nama_Mahasiswa'];
$no_telp = $_POST['no_telp'];
$tahun_masuk = $_POST['tahun_masuk'];
 
// mengedit data ke database
mysqli_query($koneksi,"UPDATE Mahasiswa SET id_jadwal='$id_jadwal',id_dosen='$id_dosen',Nama_Mahasiswa='$Nama_Mahasiswa', no_telp='$no_telp', tahun_masuk ='$tahun_masuk' WHERE id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:indexadmin.php");
 
?>