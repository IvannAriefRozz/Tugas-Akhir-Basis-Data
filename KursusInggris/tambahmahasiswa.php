<!DOCTYPE html>
<html>
<head>
	<title>Input Data Mahasiswa</title>
</head>
<body>
 
	<h2>DATA MAHASISWA</h2>
	<br/>
	<a href="indexadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="aksitambah_mahasiswa.php">
		<table>
			<tr>			
				<td>no</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>			
				<td>id jadwal</td>
				<td><input type="text" name="id_jadwal"></td>
			</tr>
			<tr>			
				<td>id dosen</td>
				<td><input type="text" name="id_dosen"></td>
			</tr>
			<tr>			
				<td>Nama Mahasiswa</td>
				<td><input type="text" name="Nama_Mahasiswa"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
				<td>Tahun Masuk</td>
				<td><input type="text" name="tahun_masuk"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>