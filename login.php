<?php


    $host = "localhost";
    $user = "loginn";
    $pass = "bambang12";
    $dabe = "logindabe";
    

    $conn = mysqli_connect($host,$user, $pass,$dabe);
    if(!$conn)
    {
        die("gagal".mysqli_connect_error());
    }
    else
    {
        echo"";
    }

  
    if(isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO loginn VALUES('','$email','$password')";
        $hasil = mysqli_query($conn,$query);
        if($hasil)
        {
            echo"
            <script>
                alert('data telah disimpan ke database');
            </script>
            
            ";
        }
        else
        {
            echo"gagal insert";
        }
      
    }

    

        
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Kereta Api!</title>
  </head>
  <body>

  <nav class="navbar  navbar-expand-lg">
          <div class="container">
          <img src="img/logo.png" class = "gmb" alt="">
          <a class="navbar-brand text-white" href="index.php"><h4 class="h4"><b>Tiket Kereta Api</b></h4></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ml-auto ">
            <a class="nav-link text-white" href="index.php"><b>Home <span class="sr-only">(current)</span></b></a>
                <a class="nav-link text-white " href="tiket.php"><b>Tiket</b></a>
                <a class="nav-link text-white" href="jadwal.php"><b>Jadwal</b></a>                  
                <a class="nav-link text-white" href="registerasi.php"><b>Daftar</b></a> 
                <a class="btn btn-primary " href="login.php" ><b>Login</b></a> 
                        
          </div>
      </div>
    </nav>

   
    <div class="view7">
        
            <h2 class="h2">Login</h2>
            <p class = "p">Nikmati Promo Setiap Pembelian Tiket Kereta Api</p>
            <a href=""><button class = "btn btn-primary">Get Now</button></a>
        </div>
    </div>

   
   <div class="container view5">
        <form action="" method = "POST">
        <h4 class="text-center">Silahkan Login</h4>
        <hr>    
                <label>Nama</label> <br>       
                <input type="email" name = "email" class="formlogin"><br>
                <label>Password</label><br>
                <input type="password" name = "password"  class="formlogin">
                <br>
                <br>
                <input type="submit" name = "submit" value = "Submit" class = "tombolsub">
        </div>
        </form>
   </div>
   
     
   
    
    <footer class="text-white">
      <h5>PT KAI INDONESIA</h5>
      <p>© 2019 PT.KAI INDONESIA All Rights Reserved</p> 
     
       
         <a href=""><img src="img/l.png" alt="" height="30" width="30"></a> 
         <a href=""><img src="img/f.png" alt="" height="30" width="30"></a> 
         <a href=""><img src="img/t.png" alt="" height="30" width="30"></a>     
     
    </footer>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>