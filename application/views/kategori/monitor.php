<br><br><br>
<div class="container">
    <h3>Monitor</h3> <br>
      <div class="row">
          <?php foreach ($monitor as $brg) : ?>

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