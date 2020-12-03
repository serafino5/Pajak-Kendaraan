<?php

if(isset($_POST['update']))
{   
    $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");

    $NIK = $_POST['NIK'];
    $NAMA = $_POST['Nama'];
    $TTL=$_POST['TTL'];
    $Alamat=$_POST['Alamat'];
    $result = mysqli_query($connect, "UPDATE pemilik SET NIK='$NIK', Nama='$NAMA' TTL='$TTL',
     Alamat='$alamat', WHERE Nama='$Nama'");
    header("Location: pemilik.php");

    if($result)
    {
        echo 'Data Telah Di Update';
    }else{
        echo 'Gagal Update';
    }
    mysqli_close($connect);
}
?>