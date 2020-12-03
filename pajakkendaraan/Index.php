<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 session_start();  
 ?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<title> INDEX </title>
</head>
<h3>Cari Disini</h3>
 
<form action="index.php" method="get">
 <label>Cari :</label>
 <input type="text" name="cari">
 <input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
 $cari = $_GET['cari'];
 echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
 <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Kendaraan</th>
      <th scope="col">NIK</th>
      <th scope="col">JENIS</th>
    </tr>
  </thead>
 <?php 
 if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
  $data = mysqli_query($connect,"select * from Kendaraan where NIK like '%".$cari."%'");    
 }else
 {
  $data = mysqli_query($connect,"select * from Kendaraan");  
 }
 $no = 1;
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
  <td><?php echo $no++; ?></td>
  <td><?php echo $d['Id_Kendaraan']; ?></td>
  <td><?php echo $d['NIK']; ?></td>
  <td><?php echo $d['Jenis']; ?></td>
  <td><a href='infoSTNK.php'>InfoSTNK</a>
  <td><a href='inner_join.php'>Info Lengkap</a>
      </td></tr>

 </tr>
 <?php } ?>
</table>
<a href='pemilik.php'>Kembali Ke Halaman Sebelumnya</a>