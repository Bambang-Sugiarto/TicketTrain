<?php

    $hostname = "localhost";
    $user = "tiket";
    $pass = "bambang12";
    $dabe = "formtiket";

    $conn = mysqli_connect($hostname,$user,$pass,$dabe);
   

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
        $ke = $_POST["ke"];
        $dari = $_POST["dari"];
        $berangkat = $_POST["berangkat"];
        $penumpang=$_POST["penumpang"];
        $kelas =$_POST["kelas"] ;
    
        $query = "INSERT INTO tiket VALUES('','$ke','$dari','$berangkat',
        '$penumpang','$kelas')";
        $exe = mysqli_query($conn,$query);
        if($exe)
        {
        echo"
            
            <script>
                alert('Selamat Data Sudah Disimpan ke Database');
            </script>
            
        ";
    
        }
    
        else
        {
            echo"gagal";
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

  <nav class="navbar  navbar-expand-lg navbar-light">
          <div class="container">
          <img src="img/logo.png" class = "gmb" alt="">
          <a class="navbar-brand text-black" href="index.php"><h4 class="h4">Tiket Kereta Api</h4></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ml-auto ">
            <a class="nav-link " href="index.php"><b>Home <span class="sr-only">(current)</span></b></a>
                <a class="nav-link " href="tiket.php"><b>Tiket</b></a>
                <a class="nav-link " href="jadwal.php"><b>Jadwal</b></a>                  
                <a class="nav-link " href="registerasi.php"><b>Daftar</b></a> 
                <a class="btn btn-primary " href="login.php" ><b>Login</b></a> 
                        
          </div>
      </div>
    </nav>

   
    <div class="view3">
        
            <h2 class="h2">Beli Tiket Kereta Api Sekarang</h2>
            <p class = "p">Nikmati Promo Setiap Pembelian Tiket Kereta Api</p>
            <a href=""><button class = "btn btn-primary">Get Now</button></a>
        </div>
    </div>

        <div class="container tiket">
            <form action="view.php" method="POST">
                <h4 class = "text text-center">Silahkan Isi Form Berikut</h4>
                <hr>
                
                    <label>Dari</label><br>
                    <input type="text" name = "dari"class="formlogin"><br>
                    <label>Ke</label><br>
                    <input type="text" name = "ke"class="formlogin"><br>
                    <label>Berangkat</label><br>
                    <input type="date" name = "berangkat"class="formlogin"><br>
                    <label>Penumpang</label><br>
                    <input type="number" name = "penumpang"class="formlogin"><br>
                    <label>Kelas</label><br>
                    <input type="text" name = "kelas" value="ekonomi,bisnis,eksekutif" class="formlogin"><br>
                    <input type="submit" value="Submit" name="submit" class="tombolsub"><br>
                      
                  
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