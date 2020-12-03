<html>
<head>    
    <head>
	<title>Edit</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
</head>
<body>
    <h2 align='center' line-height='50%'>Edit Pemilik</h2>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");
    $nama = $_GET['edit'];
    $result = mysqli_query($connect, "SELECT * FROM Pemilik WHERE nama='$nama'");
    while($user_data = mysqli_fetch_array($result))
    {
    ?>
    <div class="container" style="width:500px;"> 
    <form action="updateproses.php" method="post" class="form-control"><br>  
           NIK  :<input type="text" name="NIK" ><br>
           NAMA :<input type="text" name="Nama" ><br>
           TTL : <input type="text" name="TTL" ><br>
           ALAMAT : <input type="text" name="Alamat" ><br>
		   <input type="submit" name="update"  value="update">
    </form>
    <?php } ?>
</div>
</body>
</html>
