<?php 
$connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  

if(isset($_GET['Nama']))
{
    $id = $_GET['Nama'];
    mysqli_query($connect, "DELETE FROM Pemilik WHERE Nama='$id'");
    header("location:pemilik.php");
}
?>