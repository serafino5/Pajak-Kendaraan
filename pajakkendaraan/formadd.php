<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 ?>

<?php 
$NIK= $_POST['NIK'];
$Nama = $_POST['Nama'];
$TTL = $_POST['TTL'];
$Alamat = $_POST['Alamat'];
mysqli_query($connect,"INSERT INTO Pemilik VALUES('$NIK','$Nama','$TTL','$Alamat')");
header("location:pemilik.php");
 
?>