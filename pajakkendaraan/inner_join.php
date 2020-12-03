<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>INFORMASI LENGKAP</title>
	<style type="text/css">
		* {
			font-family: "Trebuchet MS";
		}
		h1 {
			text-transform: uppercase;
			color: navy;
		}
		table {
			border: 1px solid #ddeeee;
			border-collapse: collapse;
			border-spacing: 0;
			width: 70%;
			margin: 10px auto 10px auto;
		}
		th, td {
			border: 1px solid #ddeeee;
			padding: 20px;
			text-align: left;
		}
	</style>
</head>
<body>
	<center><h1>INFORMASI LENGKAP</h1></center>
    <form method="GET" action="inner_join.php" style="text-align: center;"></form>
    <table>
		<thead>
			<tr>
				<th>Id_Kendaraan</th>
				<th>NIK</th>
				<th>Jenis</th>
				<th>Merk</th>
                <th>Warna</th>
                <th>Tanggal_Penetapan</th>
                <th>Jumlah_Pajak</th>

			</tr>
		</thead>
        <?php
		 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
        $sql=mysqli_query($connect, "SELECT A.Id_Kendaraan, A.NIK, A.Jenis, B.Merk, B.Warna, B.Tanggal_Penetapan, B.Jumlah_Pajak 
							FROM Kendaraan A INNER JOIN STNK B 
							ON A.Id_Kendaraan = B.Id_Kendaraan");
            while($d = mysqli_fetch_array($sql)){  
            
            ?>
        <tr>
          <td><?php echo $d['Id_Kendaraan']; ?></td>
          <td><?php echo $d['NIK']; ?></td>
          <td><?php echo $d['Jenis']; ?></td>
          <td><?php echo $d['Merk']; ?></td>
          <td><?php echo $d['Warna']; ?></td>
          <td><?php echo $d['Tanggal_Penetapan'];?></td>
          <td><?php echo $d['Jumlah_Pajak'];?></td>
          
        </tr>
      <?php
      }
      ?> 
	</table>
</body>
</html>
