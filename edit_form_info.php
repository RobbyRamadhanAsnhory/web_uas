<?php
session_start();
$id = $_POST['id']; 
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$image = $_POST['image'];
$footer = $_POST['footer'];
$ttd = $_POST['ttd'];
$atas_nama = $_POST['atas_nama'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <title>Edit | Selamat Datang</title>
  </head>
  <body>
      <!-- Awal Koding Navbar MENU -->
      <header>
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">Website<b>Robby</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="HalamanUtama.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Home.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kontak.php"><b>Kontak</b></a>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a class="btn btn-outline-primary my-2 my-sm-0" href="configsql/signout_user.php" role="button">Logout</a>
                  </form>
                </div>
              </nav>
          </div>
      </header>
      <!-- Akhir Koding Navbar MENU -->

      <!-- Awal Banner/Header Terbuat Dari Jumbotron Boostrap 4 -->
      <section class="Jumbotron-bg">
        <div class="jumbotron warna-bg text-white pt-5 pb-5">
        <div class="container">
            <h1 class="display-4">Edit Informasi</h1>
            
        </div> 
        </div>
      </div>
      </section>
      <!-- Akhir Banner/Header Terbuat Dari Jumbotron Boostrap 4  -->
 
       <!-- Awal Konten -->
       <div class="container">
           <div class="row">
               <div class="col-md-8 mb-4"> <!--Awal Colom 8-->
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                        Silahkan Membuat Informasi Yang Anda Inginkan!
                          </div>
                          <form action="configsql/edit_informasi.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Judul</label>
                              <input type="text" class="form-control" name=judul id="exampleInputEmail1" aria-describedby="emailHelp"
                              placeholder="Masukkan Judul" value="<?php echo $judul; ?>">
                  
                            </div>
                            <div class="form-group">
                              <label for="nama">Deskripsi</label>
                              <input type="text" class="form-control" name=desc id="exampleInputPassword1"
                              placeholder="Masukkan Deskripsi" value="<?php echo $deskripsi; ?>">
                            </div>
                            <div class="form-group">
                              <label for="nama">Image</label>
                              <input type="text" class="form-control" name=image  id="exampleInputPassword1"
                              placeholder="Masukkan Url Image" value="<?php echo $image; ?>">
                            </div>
                            <div class="form-group">
                              <label for="nama">Referensi Deskripsi Anda(Url Web)</label>
                              <input type="text" class="form-control" name=ref id="exampleInputPassword1"
                              placeholder="Masukkan Referensi" value="<?php echo $footer; ?>">
                            </div>
                          
                            <div class="form-group">
                              <label for="nama">Kategori</label>
                              <input type="text" class="form-control" name=kategori id="exampleInputPassword1"
                              placeholder="Masukkan Kategori" value="<?php echo $kategori; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" >Edit</button>
                            <button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
                          </form>     
                    </div>
                  </div>
               </div><!--Akhir Colom 8-->

               <div class="col-md-4 mb-4"><!--Awal Colom 4-->
                <div class="card">
                    <div class="card-body bg-light">
                      <h5> Lagi Belajar Pemograman Web?</h5>
                      <p>Yuu kita belajar bareng dan bertukar pikiran untuk mambuat web yang bagus dan menarik.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="*Nama">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="*Email">
                        </div>
                        <button class="btn btn-outline-primary my-2 my-sm-0">Yuu, Saya Mau!</button>
                    </form>
                    </div>
                  </div>
               </div>
           </div><!--Akhir Colom 4-->
       </div>
       <!-- Akhir Konten -->

       <!-- Awal Jumbotron 2 -->
       <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-mb-3">
                    <img src="img/stt.jpg" class="img-thumbnail" width="250px" height="300px">
                </div>
                <div class="col-md-9">        
          <h3>Sekolah Tinggi Teknologi Bandung</h3>
          <p class="lead"> Sekolah Tinggi Teknologi Bandung Merupakan Salah Satu Perguruan 
            Tinggi di Kota Bandung yang mencetak mahasiswa berdaya saing dan unggul di bidang Teknologi</p>
        </div>
      </div>
    </div>
    </div>
       <!-- Akhir Jumbotron 2 -->
       <!-- Awal Footer Bawah-->
     <footer class="warna-bg">
        <div class="text-white text-center pt-3 pb-3">
          @Copyright by 18111147_RobbyRamadhanAnshory_Mahasiswa_TIF RP 18 CID B_UASWEB1
        </div>
    </footer>
  <!-- Awal Footer Bawah-->
     
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    
    

  </body>
</html>