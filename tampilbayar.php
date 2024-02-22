
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
            <li class="scroll-to-section"><a href="admin.php">Siswa</a></li> 
             <li class="scroll-to-section"><a href="admin.php">Kelas</a></li> 
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

  <br>
  <br><br>
  <br>
  <br>
  <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
              <h2><span><center>Data Bayar</center></span></h2>
          </div>
        </div>
      </div>
    </div>
  <div class="container">
  <div class="col-lg-15 wow fadeInUp " data-wow-duration="0.5s" data-wow-delay="0.15s">
    <form action="" align="left" method="post">
      Cari pada kolom :
<select class="form-control" name="pilih" required>
        <option value="id_pembayaran">ID Bayar</option>
        <option value="NIS">NIS</option>  
        <option value="tgl_bayar">Tanggal Bayar</option>
        <option value="jumlah_bayar">Jumlah bayar</option>
</select>
    <label>Cari data :</label><br>
      <input type="text" name="textcari" size="70" />
      <input type="submit" class="btn btn-success" name="cari" value="cari" />
      <input type="submit" class="btn btn-outline-dark" style="margin-bottom: 5px; margin-right: 5px; float: right;" href="semua" value="Tampilkan semua" />
    </form>
    <table class="table table-bordered table-striped table-striped">
      <tr>
        <th>No</th>
        <th>ID Pembayaran</th>
        <th>ID Petugas</th>
        <th>NIS</th>
        <th>Tanggal Bayar</th>
        <th>Jumlah Bayar</th>
        <th>Opsi</th>
      </tr><br>
      <?php
      include 'koneksi.php';
      $input="";
        if (isset($_POST["cari"])){
          $opsi=$_POST["pilih"];
          $id_pembayaran=$_POST["textcari"];
          $input=mysqli_query($koneksi, "SELECT * from pembayaran WHERE $opsi like '%$id_pembayaran%'");
        }else{
          $input = mysqli_query($koneksi, "SELECT * from pembayaran");
        }

      $no = 1;
      foreach ($input as $row) {
        echo "<tr>
                <td align='center'>$no</td>
                <td align='center'>" . $row['id_pembayaran'] . "</td>
                <td align='center'>" . $row['id_petugas'] . "</td>
                <td>" . $row['NIS'] . "</td>
                <td>" . $row['tgl_bayar'] . "</td>
                <td>" . $row['jumlah_bayar'] . "</td>
                <td>
                <a href='updatebayar.php?id_pembayaran=$row[id_pembayaran]'>Update</a><br>
                <a href='hapusbayar.php?id_pembayaran=$row[id_pembayaran]'>Hapus</a></td>
                </tr>";
        $no++;
      }
      ?>
    </table>
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

 