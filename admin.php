
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
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 563 SEO Dream

https://templatemo.com/tm-563-seo-dream

-->

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <h4>SMKN 6 Malang<img src="assets/images/logo-icon.png" alt=""></h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
             <li class="scroll-to-section"><a href="#siswa">Siswa</a></li> 
             <li class="scroll-to-section"><a href="#kelas">Kelas</a></li> 
             <li class="scroll-to-section"><div class="main-blue-button"><a href="logout.php">Logout</a></div></li> 
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
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-5 col-sm-6">
                    <div class="info-stat">
                      <h4>Pembayaran SPP Siswa</h4>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h2>Selamat Datang</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="siswa" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post" autocomplete="off">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Siswa</h6>
                  <h2>Isi Data Siswa dengan Sesuai dan Benar</h2>
                </div>
              </div>

              <?php
                include 'koneksi.php';
                if (isset($_POST["ok"])) {
                  $NIS = $_POST["NIS"];
                  $nama = $_POST["nama"];
                  $id_kelas = $_POST["id_kelas"];
                  $input = mysqli_query($koneksi, "insert into siswa (NIS,nama,id_kelas) values ('$NIS','$nama','$id_kelas')");
                }
                ?>

              <div class="col-lg-9">
                <div class="row">
                  <div class="container">
                    
                      <label>NIS</label>
                      <input type="text" name="NIS" id="NIS" placeholder="0000/000/000" autocomplete="on" required>
                    
                  </div>
                  <div class="container">
                    <fieldset>
                    <label>Nama Siswa</label>
                      <input type="text" name="nama" id="nama" placeholder="Nur Hidayati" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="container">
                    <fieldset>
                    <label>ID Kelas</label>
                    <input type="text" name="id_kelas" id="id_kelas" placeholder="K01" autocomplete="on">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="ok" class="btn btn-info">Kirim</button>
                    </fieldset>
                    <a href="tampilsiswa.php">Data Siswa</a>
                  </div>       
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="kelas" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post" autocomplete="off">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Kelas</h6>
                  <h2>Isi Data Kelas dengan Sesuai dan Benar</h2>

                </div>
              </div>

              <?php
                include 'koneksi.php';
                if (isset($_POST["oke"])) {
                  $id_kelas = $_POST["id_kelas"];
                  $nama_kelas = $_POST["nama_kelas"];
                  $kompetensi_keahlian = $_POST["kompetensi_keahlian"];
                  $input = mysqli_query($koneksi, "insert into kelas (id_kelas,nama_kelas,kompetensi_keahlian) values ('$id_kelas','$nama_kelas','$kompetensi_keahlian')");
                }
                ?>

              <div class="col-lg-9">
                <div class="row">
                  <div class="container">
                  <label>ID Kelas</label>
                    <fieldset>
                      <input type="text" name="id_kelas" id="id_kelas" placeholder="Name" autocomplete="off" required>
                    </fieldset>
                  </div>

                  <div class="container">
                  <label>Nama Kelas</label>
                    <fieldset>
                      <input type="text" name="nama_kelas" id="nama_kelas" placeholder="x" autocomplete="off" required>
                    </fieldset>
                  </div>

                  <div class="container">
                  <label>Kompetensi Keahlian</label>
                    <fieldset>
                      <input type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" placeholder="RPL" required>
                    </fieldset>
                  </div>
                  <div class="container">
                    <fieldset>
                      <button type="submit" name="oke" class="btn btn-info">Kirim</button>
                    </fieldset>
                    <a href="tampilkelas.php">Data Kelas</a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2021 SEO Dream Co., Ltd. All Rights Reserved. 
          
          <br>Web Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>
</html>

 