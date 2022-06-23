<!DOCTYPE html>
<html>
<head>
	<title>UPDATE JADWAL</title>
</head>
<body>
	<br/>
	<a href="indexadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h2>EDIT DATA JADWAL</h2>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM Jadwal WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksiedit_jadwal.php">
			<table>
				<tr>			
					<td>Kelas</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="Kelas" value="<?php echo $d['Kelas']; ?>">
					</td>
				</tr>
				<tr>
					<td>Hari,Tanggal</td>
					<td><input type="text" name="hari_tanggal" value="<?php echo $d['hari_tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>Jam</td>
					<td><input type="text" name="Jam" value="<?php echo $d['Jam']; ?>"></td>
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