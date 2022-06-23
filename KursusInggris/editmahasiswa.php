<!DOCTYPE html>
<html>
<head>
	<title>UPDATE MAHASISWA</title>
</head>
<body>
	<br/>
	<a href="indexadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h2>EDIT DATA MAHASISWA</h2>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM Mahasiswa WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksiedit_mahasiswa.php">
			<table>
				<tr>
					<td>Id Jadwal</td>
					<td><input type="text" name="id_jadwal" value="<?php echo $d['id_jadwal']; ?>"></td>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
				</tr>
				<tr>
					<td>Id Dosen</td>
					<td><input type="text" name="id_dosen" value="<?php echo $d['id_dosen']; ?>"></td>
				</tr>
				<tr>
					<td>Nama Mahasiswa</td>
					<td><input type="text" name="Nama_Mahasiswa" value="<?php echo $d['Nama_Mahasiswa']; ?>"></td>
				</tr>
				<tr>
					<td>No Telp.</td>
					<td><input type="text" name="no_telp" value="<?php echo $d['no_telp']; ?>"></td>
				</tr>
				<tr>
					<td>Tahun Masuk</td>
					<td><input type="text" name="tahun_masuk" value="<?php echo $d['tahun_masuk']; ?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>