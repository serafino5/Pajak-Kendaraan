<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 session_start();  
 ?>
 <html>
 <head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
 <title> STNK </title>
 </head>

<body>
<div class = "container" style = "width:800px;">
<h3 align = "center">Info STNK</h3>
<a align = "center" href="formaddstnk.php">TAMBAH STNK</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">TTL</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
 <?php 
  $data = mysqli_query($connect,"SELECT * from STNK");  
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['Id_STNK']; ?></td>
  <td><?php echo $d['Id_Kendaraan']; ?></td>
  <td><?php echo $d['Merk']; ?></td>
  <td><?php echo $d['Warna']; ?></td>
  <td><?php echo $d['Tanggal_Penetapan']; ?></td>
  <td><?php echo $d['Jumlah_Pajak']; ?></td>
  <td><a href='Edit.php'>Edit</a> | <a href="deletestnk.php?Id_STNK=<?php echo $d['Id_STNK']; ?>">Delete</a></td></tr>
 
 </tr>
 <?php } ?>
</table>

<a href='index.php'>Kembali Ke Halaman Sebelumnya</a>
</body>
</html>