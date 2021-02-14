<?php
include 'configsql/menampilkan_data.php';
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
   


    <title>HalamanUtama | Selamat Datang</title>
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
                    <li class="nav-item">
                      <a class="nav-link" href="HalamanUtama.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="Home.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Kontak.php">Kontak</a>
                      </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                  <div class="ml-4 flex items-center md:ml-6">
                    
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <a class="btn btn-outline-primary my-2 my-sm-0" href="configsql/signout_user.php" role="button">Logout</a>
                </form>
                </div>
              </nav>
          </div>
      </header>
      <!-- Akhir Koding Navbar MENU -->

      <!-- Awal Banner/Header -->
      <section class="Jumbotron-bg">
        <div class="jumbotron warna-bg text-white pt-5 pb-5">
        <div class="container">
            <h1 class="display-4">Selamat Datang,RobbyRamadhanA</h1>
            <p class="lead">Ini Adalah Website yang dibuat Untuk Memenuhi Tugas Mata Kuliah Web Programming Robby Ramadhan Anshory</p>
            <p>Semoga Terlaksana dengan baik dan lancar dan Menghasilkan Nilai Yang Memuaskan Hohoho :D</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya...</a>
        </div> 
        </div>
      </div>
      </section>
      <!-- Akhir Banner/Header -->
 
       
       <!-- Awal Konten -->
       <div class="container">
       <a class="btn btn-primary btn-lg mb-3" href="form_info.php" role="button">Tambah Informasi</a>
        <div class="row">
              <?php while ($row = $q->fetch()) :
                        $id = $row['id'];
                        $title = $row['judul'];
                        $desc = $row['deskripsi'];
                        $img = $row['image'];
                        $footer = $row['footer'];
                        $ttd = $row['ttd'];
                        $nama = $row['atas_nama'];
                        $kategori = $row['kategori'];
                        $tanggal = $row['tanggal'];

                    ?>
            <div class="col-md-3 mb-3">
             <div class="card">
             <form action="edit_form_info.php" method="POST">
             <input type="hidden" name="id" value="<?php echo $id; ?>">
             <input type="hidden" name="judul" value="<?php echo $title; ?>">
             <input type="hidden" name="deskripsi" value="<?php echo $desc; ?>">
             <input type="hidden" name="image" value="<?php echo $img; ?>">
             <input type="hidden" name="footer" value="<?php echo $footer; ?>">
             <input type="hidden" name="ttd" value="<?php echo $ttd; ?>">
             <input type="hidden" name="atas_nama" value="<?php echo $nama; ?>">
             <input type="hidden" name="kategori" value="<?php echo $kategori; ?>">
             <input type="hidden" name="tanggal" value="<?php echo $tanggal; ?>">
             
                 <img src=<?php echo $img; ?> class="card-img-top" alt="Gambar">
                 <div class="card-body">
                   <h6 class="card-title text-info"><?php echo $kategori; ?></h6>
                   <h6 class="card-text"><a href="info.php?id=<?php echo $id ?>" class="text-primary"> 
                   <?php echo $title; ?></h6></a>
                     <p class="card-text"><small class="text-muted"><?php echo $tanggal;?></small></p>
                     <button type="submit" class="btn btn-primary mt-4">Edit</button>
                        
                 </div>
               </div>
            </div>
            <?php endwhile; ?>
                

        </div>
    </div>
    <!-- Akhir Konten -->

       <!--Awal Pagination -->
       <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
       <!--Akhir Pagination -->

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