<!DOCTYPE html>
<html>
<head>
	<title>Input Data Jadwal</title>
</head>
<body>
 
	<h2>DATA JADWAL</h2>
	<br/>
	<a href="indexadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA JADWAL</h3>
	<form method="post" action="aksitambah_jadwal.php">
		<table>
			<tr>			
				<td>no</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>			
				<td>Kelas</td>
				<td><input type="text" name="Kelas"></td>
			</tr>
			<tr>			
				<td>Hari,Tanggal</td>
				<td><input type="text" name="hari_tanggal"></td>
			</tr>
			<tr>			
				<td>Jam</td>
				<td><input type="text" name="Jam"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>