<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 session_start();  
 ?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title> Daftar Pemilik </title>
</head>
<body>
<div class = "container" style = "width:800px;">
    <h2 align="center">Daftar Pemilik</h2>
    <br/>
    <a href="add.php">TAMBAH Pemilik</a>
    <br/>
    <br/>
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
 $no = 1;
 $data = mysqli_query($connect, "SELECT * FROM Pemilik");
 while($d = mysqli_fetch_array($data)){
     ?>
     <tr>
     <td><?php echo $no++; ?></td>
     <td><?php echo $d['NIK']; ?></td>
     <td><?php echo $d['Nama']; ?></td>
     <td><?php echo $d['TTL']; ?></td>
     <td><?php echo $d['Alamat']; ?></td>
     <td>
        <a href="delete.php?Nama=<?php echo $d['Nama']; ?>">HAPUS</a> |
        <a href="index.php">Kendaraan</a>
    </td>
    </tr>
    <?php
 }
 ?> 
 </table> 
 </body>
 </html>
 