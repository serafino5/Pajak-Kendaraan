<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Pemilik</title>
</head>
<body>

<h2>Tambah Pemilik</h2>
	<br/>
	<a href="pemilik.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA Pemilik</h3>
	<form action="formadd.php" method="post">
		<table>
			<tr>			
				<td>NIK</td>
				<td><input type="text" name="NIK"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>TTL</td>
				<td><input type="text" name="TTL"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="Alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>



