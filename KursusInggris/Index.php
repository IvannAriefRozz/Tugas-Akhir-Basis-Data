<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Basis Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <center><h1>Kursus Bahasa Inggris</h1></center>
	
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username tidak ditemukan !</div>";
		}
	}
	?>
 	<center>
 		<div class="kotak_login">
		<p class="tulisan_login">Silahkan Masukkan Username</p>
 
		<form action="Login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
	
 	</center>
		</form>
		
	</div>
 
 
</body>
</html>