<?php 
$connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  

if(isset($_GET['Id_STNK']))
{
    $id = $_GET['Id_STNK'];
    mysqli_query($connect, "DELETE FROM STNK WHERE Id_STNK='$id'");
    header("location:infoSTNK.php");
}
?>