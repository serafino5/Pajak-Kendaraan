<?php  
 $connect = mysqli_connect("localhost", "root", "", "pajakkendaraan");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:masuk.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["Nama"]) && empty($_POST["Password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $Nama = mysqli_real_escape_string($connect, $_POST["Nama"]);  
           $Password = mysqli_real_escape_string($connect, $_POST["Password"]);  
           $Password = md5($Password);  
           $query = "INSERT INTO Akun (Nama, Password) VALUES('$Nama', '$Password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["Nama"]) && empty($_POST["Password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $Nama = mysqli_real_escape_string($connect, $_POST["Nama"]);  
           $Password = mysqli_real_escape_string($connect, $_POST["Password"]);  
           $Password = md5($Password);  
           $query = "SELECT * FROM Akun WHERE Nama = '$Nama' AND Password = '$Password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['Nama'] = $Nama;  
                header("location:pemilik.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Informasi Pajak Kendaraan</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Informasi Pajak Kendaraan</h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Masukan Nama</label>  
                     <input type="text" name="Nama" class="form-control" />  
                     <br />  
                     <label>Masukan Password</label>  
                     <input type="Password" name="Password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="full.php">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Masukan Nama</label>  
                     <input type="text" name="Nama" class="form-control" />  
                     <br />  
                     <label>Masukan Password</label>  
                     <input type="Password" name="Password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="full.php?action=login">Login</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  