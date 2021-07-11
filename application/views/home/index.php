<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider1.jpg" class="d-block w-100" alt="...">
          <style>
            /*carousel*/
            .carousel-item{
                height: 550px;
            }

            .carousel-item img{
                margin-top: -200px;
            }
            .carousel-item .btn {
                background-color: grey;
                border: none;
                border-radius: 25px;
                padding-right: 25px;
                padding-left: 25px;
            }

            button {
                width: 380px;
            }
          </style>
          <div class="carousel-caption d-none d-md-block">
            <h5>
              <font color="grey">Sound Quality</font>
            </h5>
            <p>
              <font color="grey" class="font-weight-bold">Dapatkan kualitas suara terbaik dari produk kami!</font>
            </p>
            <a class="btn btn-secondary btn-lg" href="kategori/headset" role="button">KUNJUNGI</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>
              <font color="white">Ergonomic mouse</font>
            </h5>
            <p>
              <font color="white">Mau betah ber jam jam di depan komputer dengan mouse yang ergonomis ?</font>
            </p>
            <a class="btn btn-secondary btn-lg" href="kategori/mouse" role="button">KUNJUNGI</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/keyboard.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>
              <font color="white">Mechanical Keyboard</font>
            </h5>
            <p>
              <font color="white">Dapatkan Keyboard dengan Mechanical switch !!!</font>
            </p>
            <a class="btn btn-secondary btn-lg" href="kategori/keyboard" role="button">KUNJUNGI</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <br><br>

  <div class="container">
    <h3>Product</h3> <br>
      <div class="row">
          <?php foreach ($barang as $brg) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-3">Rp <?php echo number_format($brg->harga, 0,',','.') ?></span>
                <?php echo anchor('home/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <?php echo anchor('home/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?>
            </div>
            </div>

          <?php endforeach; ?>
      </div>
  </div>

  

  <!-- <div class="container">
    <h3>Gaming</h3> 
    <div class="row">
      <div class="col-lg-6">
        <p>
          <a href="kursi.php">
            <img src="img/kursigaming.jpg" width="550" height="400">
          </a>
        </p>
      </div>
      <div class="col-lg-6">
        <p>
          <a href="monitor.php">
            <img src="img/monitorgaming.jpg" width="550" height="400">
          </a>
        </p>
      </div>
    </div>
  </div>

  <br><br>  

  <div class="container">
    <h3>Top Seller</h3> 
    <div class="row">
      <div class="col-lg-12">
        <a href="topseller.php">
          <img src="img/topseller.jpg" width="1100" height="400">
        </a>
      </div>
    </div>
  </div> -->

  <br><br>

  <footer class="py-5 bg-dark container-fluid">
    <div class="container">
      <p class="m-10 text-center text-white">Copyright &copy; POLINEMART 2019</p>
    </div>
    <!-- /.container -->
  </footer>
</body>
</html>    