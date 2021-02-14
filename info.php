<?php
require_once 'configsql/koneksi.php';
$id = $_GET['id'];

try {
    $sql = 'SELECT * FROM `informasi` WHERE id = ?';
    $q = $database_connection->prepare($sql);
    $q->execute([$id]);
    $row = $q->fetch();
    $id = $row['id'];
    $title = $row['judul'];
    $desc = $row['deskripsi'];
    $img = $row['image'];
    $footer = $row['footer'];
    $nama = $row['atas_nama'];
    $kategori = $row['kategori'];
    $tanggal = $row['tanggal'];
} catch (PDOException $e) {
    die("Tidak Bisa Membuka Database $database_name :" . $e->getMessage());
}

?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/img.css">

    <title>Pengenalan Web | Selamat Datang</title>
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
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <a class="btn btn-outline-primary my-2 my-sm-0" href="configsql/signout_user.php" role="button">Logout</a>
              </form>
              </div>
            </nav>
        </div>
    </header>
    <!-- Akhir Koding Navbar MENU -->
    <!--Nav awal-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="HalamanUtama.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pengenalan Web</li>
        </ol>
      </nav>
      <!--Nav akhir-->

      <!--Col 7 awal -->
      <div class="container">
      <div class="row">
      <div class="col-sm-9 col-xs-12 konten">
          <img src=<?php echo $img; ?>>
          <h6 class="card-title text-info"><?php echo $title; ?></h6>
          <blockquote class="blockquote text-center">
			<p><?php echo $desc; ?></p>
			<footer class="blockquote-footer"><?php echo $footer; ?></footer>
		</blockquote>
            <p class="spasi">Terima Kasih</p>
            
            <p class="spasi"><?php echo $tanggal; ?></p>

            <p class="spasi"><?php echo $nama; ?></p>
          
      </div>
      

      <!--Col 7 akhir -->

      <!--Col 4 Awal-->
        <div class="col-sm-3 col-xs-12 sidebar">
            <h3>Pencarian</h3>
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <input class="form-control" type="text" placeholder="Cari"> <!--form cari-->

              <!--web-->
              <div class="dropdown">
                <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Web
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="info1.php">Pengenalan #1</a>
                  <a class="dropdown-item" href="info1.php">Pengenalan #2</a>
                  <a class="dropdown-item" href="info1.php">Pengenalan #3</a>
                </div>
                <!--web-->

                <!--php-->
                <div class="dropdown">
                    <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Html
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="info2.php">HTML #1</a>
                      <a class="dropdown-item" href="info2.php">HTML #2</a>
                    </div>
                <!--php-->

                <!--CSS-->
                <div class="dropdown">
                    <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Css
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="info3.php">CSS #1</a>
                      <a class="dropdown-item" href="info3.php">CSS #2</a>
                    </div>
                <!--CSS-->

                <!--bOOSTRAP-->
                <div class="dropdown">
                    <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Boostrap
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="info4.php">Boostrap #1</a>
                <!--bOOSTRAP-->
              </div>

              <form action="configsql/delete_informasi.php" method="POST">
              <input type="hidden" id="id-card" name="id" value=<?php echo $id ?> />
                  <button type="submit" class="btn btn-outline-danger mt-4">Hapus Informasi</button>
           
            </form>       
            </div>
        

    </div><!--penutup row-->
</div> <!--container-->
</div>
</div>
</div>
</div>

        <!--Col 4 Akhir-->
        <!-- Awal Footer Bawah-->

        <hr>
     <footer class="warna-bg">
        <div class="text-black text-center pt-3 pb-3">
          @Copyright by 18111147_RobbyRamadhanAnshory_Mahasiswa_TIF RP 18 CID B_UASWEB1
        </div>
    </footer>
  <!-- Awal Footer Bawah-->

  <script>
        </script>
        
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