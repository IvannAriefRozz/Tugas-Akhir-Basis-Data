<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>CRUD DATA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br>
	<a href="tambahdosen.php">+ TAMBAH DOSEN</a>
	<br/>
	<br/>
	<table border="2">
		<tr>
			<th>NO</th>
			<th>Nama Dosen</th>
			<th>No Induk Dosen</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Dosen");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama_dosen']; ?></td>
				<td><?php echo $d['noinduk']; ?></td>
				<td>
					<a href="editdosen.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_dosen.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>	
			<?php 
		}
		?>
	</table>
	</table>
	<br>
	<a href="tambahjadwal.php">+ TAMBAH JADWAL</a>
	<br/>
	<br/>
	<table border="2">
		<tr>
			<th>NO</th>
			<th>Kelas</th>
			<th>Hari/Tanggal</th>
			<th>Jam</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Jadwal");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Kelas']; ?></td>
				<td><?php echo $d['hari_tanggal']; ?></td>
				<td><?php echo $d['Jam']; ?></td>
				<td>
					<a href="editjadwal.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_jadwal.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>	
			<?php 
		}
		?>
	</table>
	<br/>
	<a href="tambahmahasiswa.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Id Jadwal</th>
			<th>Id Dosen</th>
			<th>Nama Mahasiswa</th>
			<th>No Telp.</th>
			<th>Tahun Masuk</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['id_jadwal']; ?></td>
				<td><?php echo $d['id_dosen']; ?></td>
				<td><?php echo $d['Nama_Mahasiswa']; ?></td>
				<td><?php echo $d['no_telp']; ?></td>
				<td><?php echo $d['tahun_masuk']; ?></td>
				<td>
					<a href="editmahasiswa.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_mahasiswa.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>	
			<?php 
		}
		?>
		<tr></tr>
	</table>
	
</body>
</html>