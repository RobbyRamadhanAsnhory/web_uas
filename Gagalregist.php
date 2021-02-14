<?php

?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bglogin.css">


    <title>Registrasi</title>
  </head>
  <body>
       <!-- Awal Koding Navbar MENU -->
       <header>
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.php">Website<b>Robby</b></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="Login.php"><b>Home</b></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="Login.php">Profil</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="Login.php">Kontak</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <a class="btn btn-outline-primary my-2 my-sm-0" href="Login.php" role="button">Login</a>
                </form>
              </div>
            </nav>
        </div>
    </header>
    <!-- Akhir Koding Navbar MENU -->
    
    <!--Awal Register-->
    <div class="edit-register">

            <div class="alert alert-danger" role="alert">
                Belum Mendaftar,Silahkan Mendaftar Dulu!
                  </div>
                  <h4 class="text-center">Register</h4>
                  <hr>
                  <form action="configsql/create_user.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="input" name="name" id="name" class="form-control" placeholder="Silahkan Masukkan Nama" required autofocus>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="input" name="username" id="username" class="form-control" placeholder="Silahkan Masukkan Username" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="Silahkan Masukkan Password" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Konfirmasi Password</label>
                <input type="password" name="konfirmasipass" id="konfirmasipass" class="form-control" placeholder="Masukkan Ulang Password" required>
            </div>
            <button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="regist" id="regist">Register</button>
            <a class="btn btn-outline-primary my-2 my-sm-0" href="Login.php" role="button">Login</a>  
        </form>
                  </div>
        <!--Akhir Register-->

        <!-- Awal Footer Bawah -->
     <footer>
        <div class=" text-center pt-3 pb-3">
          @Copyright by 18111147_RobbyRamadhanAnshory_Mahasiswa_TIF RP 18 CID B_UASWEB1
        </div>
    </footer>
  <!-- Awal Footer Bawah -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>