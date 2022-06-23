<!DOCTYPE html>
<html>
<head>
	<title>Input Data Dosen</title>
</head>
<body>
 
	<h2>DATA DOSEN</h2>
	<br/>
	<a href="indexadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA DOSEN</h3>
	<form method="post" action="aksitambah_dosen.php">
		<table>
			<tr>			
				<td>no</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>			
				<td>Nama Dosen</td>
				<td><input type="text" name="nama_dosen"></td>
			</tr>
			<tr>			
				<td>Nomor Induk Dosen</td>
				<td><input type="text" name="noinduk"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>