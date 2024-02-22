<?php
    include 'koneksi.php';
    if (isset($_POST["ok"])) {
      $id_petugas = $_POST["id_petugas"];
      $NIS = $_POST["NIS"];
      $tgl_bayar = $_POST["tgl_bayar"];
      $jumlah_bayar = $_POST["jumlah_bayar"];
      $input = mysqli_query($koneksi, "insert into pembayaran (id_petugas,NIS,tgl_bayar,jumlah_bayar) values ('$id_petugas','$NIS','$tgl_bayar','$jumlah_bayar')");
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

    <title>Pembayaran SPP</title>

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
    $query    =mysqli_query($koneksi, "SELECT * FROM siswa WHERE NIS='$NIS'");
    foreach ($query as $row) {
?>

      <div class="row">
        <div class="col-lg-15 wow fadeInUp " data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row justify-content-center">
              <div class="col-lg-10 offset-lg-0">
                <div class="section-heading">
                  <h6>Pembayaran SPP</h6>                  
                </div>
              </div>

              <div class="col-lg-9">
                <div class="row">
                  <div class="container">                  
                  <fieldset>
                      <label><b>ID Petugas</b></label>
                      <input type="text" name="id_petugas" class="form-control">
                    </fieldset>
                  </div>
                  <div class="container">
                    <fieldset>
                      <label><b>NIS</b></label>
                      <input type="text" name="NIS" readonly class="form-control" value="<?php echo $row['NIS']; ?>">
                    </fieldset>
                  </div>       
                  <div class="container">
                    <fieldset>
                      <label><b>Tanggal Bayar</b></label>
                      <input type="date" name="tgl_bayar" class="form-control">
                    </fieldset>
                  </div>
                  <div class="container">
                    <fieldset>
                      <label><b>Jumlah Bayar</b></label>
                      <input type="text" name="jumlah_bayar" class="form-control">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" name="ok" class="btn btn-info">Submit</button>
                    </fieldset>
                    <a href="tampilbayar.php">Data Bayar</a>
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