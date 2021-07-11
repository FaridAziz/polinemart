<br><br><br>
<div class="container">
<h3 class="text-center">Mulailah Berjualan di POLINEMART</h3>
<br>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus fas fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA BARANG</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOCK</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach($barang as $brg) : ?>

        <tr>
            <td><?= $no++ ?></td>
            <td> <?= $brg['nama_brg'] ?> </td>
            <td> <?= $brg['keterangan'] ?> </td>
            <td> <?= $brg['kategori'] ?> </td>
            <td> <?= $brg['harga'] ?> </td>
            <td> <?= $brg['stok'] ?> </td>
            <td><?php echo anchor('jual/edit_jual/' .$brg['id_brg'], '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>');?></td>
            <td><?php echo anchor('jual/hapus_data/' .$brg['id_brg'], '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>');?></td>
        </tr>            
            
            <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'jual/tambah_data'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">
            </div>  

            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div> 

            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" id="kategori" name="kategori">
                  <option value="Monitor">Monitor</option>
                  <option value="Headset">Headset</option>
                  <option value="Mouse">Mouse</option>
                  <option value="Keyboard">Keyboard</option>
                  <option value="Kursi">Kursi</option>
                </select>
            </div> 

            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control">
            </div> 

            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div> 

            <div class="form-group">
                <label>Gambar Produk</label><br>
                <input type="file" name="gambar" class="form-control">
            </div> 

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>

      </form>
    </div>
  </div>
</div>

