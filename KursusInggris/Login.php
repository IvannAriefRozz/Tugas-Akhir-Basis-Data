<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$select_admin = mysqli_query($koneksi, "SELECT * FROM Admin WHERE nama_admin ='$username'");
$select_dosen = mysqli_query($koneksi," SELECT * FROM Dosen WHERE nama_dosen ='$username'");
$select_mahasiswa = mysqli_query($koneksi," SELECT * FROM Mahasiswa WHERE Nama_Mahasiswa ='$username'"); 
// menghitung jumlah data yang ditemukan
$cek1 = mysqli_num_rows($select_admin);
$cek2 = mysqli_num_rows($select_dosen);
$cek3 = mysqli_num_rows($select_mahasiswa); 
if($cek1 > 0){
	$_SESSION['username'] = $nama_admin;
	$_SESSION['status'] = "login";
	header("location:indexadmin.php");
}else if($cek2 > 0){
	$_SESSION['username'] = $nama_dosen;
	$_SESSION['status'] = "login";
	header("location:indexdosen.php");
}else if($cek3 > 0){
	$_SESSION['username'] = $Nama_Mahasiswa;
	$_SESSION['status'] = "login";
	header("location:indexmahasiswa.php");
}else{
	header("location:index.php?pesan=gagal");
}	
?>