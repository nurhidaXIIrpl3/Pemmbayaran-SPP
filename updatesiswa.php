<?php
include 'koneksi.php';
if (isset($_POST["ok"])) {
    $NIS = $_POST["NIS"];
    $nama = $_POST["nama"];
    $id_kelas = $_POST["id_kelas"];
    $input = mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', id_kelas='$id_kelas' WHERE NIS='$NIS'");
    header("location:tampilsiswa.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <title>Aplikasi Pembayaran SPP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css"><div id="tanggapan" class="contact-us section">
      <!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <h4>Pengaduan Masyarakat <img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="tampilpengaduanpetugas.php" class="active">Data Pengaduan</a></li> 
              <li class="scroll-to-section"><div class="main-blue-button"><a href="logout.php">Log out</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
    <div class="container">
    <div class="container">
    <?php
    if(isset($_GET['NIS'])){
        $NIS    =$_GET['NIS'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include 'koneksi.php';
    $no = 1;
    $update    =mysqli_query($koneksi, "SELECT * FROM siswa WHERE NIS='$NIS'");
    foreach ($update as $row) {
?>
      <div class="row">
        <div class="col-lg-15 wow fadeInUp " data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row justify-content-center">
              <div class="col-lg-10 offset-lg-0">
                <div class="section-heading">
                  <h6> Update Siswa</h6>                  
                </div>
              </div>

              <div class="col-lg-9">
                <div class="row">
                  <div class="container">
                    
                      <label>NIS</label>
                      <input type="text" name="NIS" id="NIS" value="<?php echo $row['NIS']; ?>" readonly placeholder="0000/000/000" autocomplete="on" required>
                    
                  </div>
                  <div class="container">
                    <fieldset>
                    <label>Nama Siswa</label>
                      <input type="text" name="nama" id="nama" placeholder="Nur Hidayati" value="<?php echo $row['nama']; ?>" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="container">
                    <fieldset>
                    <label>ID Kelas</label>
                    <input type="text" name="id_kelas" value="<?php echo $row['id_kelas']; ?>" id="id_kelas" placeholder="K01" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="ok" class="btn btn-info">Submit</button>
                    </fieldset>
                  <?php } ?>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
    </html>

