
<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan STNK</title>
</head>
<body>
	<h3>TAMBAH STNK</h3>
	<form action="formaddstnk.php" method="post" class="form-control">
        <label>Id_STNK </label>
           <input type="text" name="Id_STNK" class="form-control">
        <label>Id_Kendaraan</label>
           <input type="text" name="Id_Kendaraan" class="form-control">
        <label>Merk</label>
           <input type="text" name="Merk" class="form-control">
        <label>Warna</label>
           <input type="text" name="Warna" class="form-control">
        <label>Tanggal Penetapan</label>
           <input type="text" name="Tanggal_Penetapan" class="form-control">
        <label>Jumlah Pajak</label>
           <input type="text" name="Jumlah_Pajak" class="form-control">
        <input type="submit" name="submit" class="submit" value="simpan"></td>
        
    </form>
    <?php
    if(isset($_POST['submit'])) {
        $Id_STNK = $_POST['Id_STNK'];
        $Id_Kendaraan = $_POST['Id_Kendaraan'];
        $Merk= $_POST['Merk'];
        $Warna = $_POST['Warna'];
        $Tanggal_Penetapan = $_POST['Tanggal_Penetapan'];
        $Jumlah_Pajak = $_POST['Jumlah_Pajak'];
        $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  

        $result = mysqli_query($connect, "INSERT INTO STNK (Id_STNK, Id_Kendaraan, Merk, Warna, Tanggal_Penetapan, Jumlah_Pajak) 
        VALUES('$Id_STNK','$Id_Kendaraan', '$Merk','$Warna','$Tanggal_Penetapan','$Jumlah_Pajak')");
        echo "STNK added successfully";
        header("Location: infoSTNK.php");
    }
    ?>
    <a href="infoSTNK.php">BACK</a>
</body>
</html>




