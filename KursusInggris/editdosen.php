<!DOCTYPE html>
<html>
<head>
	<title>UPDATE DOSEN</title>
</head>
<body>
	<br/>
	<a href="indexadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h2>EDIT DATA DOSEN</h2>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM Dosen WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="aksiedit_dosen.php">
			<table>
				<tr>			
					<td>Nama Dosen</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']; ?>">
					</td>
				</tr>
				<tr>
					<td>No Induk</td>
					<td><input type="text" name="noinduk" value="<?php echo $d['noinduk']; ?>"></td>
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