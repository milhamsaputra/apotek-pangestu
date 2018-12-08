   <?php
    foreach ($data as $row) {
        $Vnama=$row['nama_supplier'];
        $Valamat=$row['alamat'];
        $Vtelepon=$row['telepon'];
        $id=$row['id_supplier'];
    }
   ?>
</div>
   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <form method="POST" action="<?php echo base_url()."Gudang/Supplier/Update/".$id ?>">
      <h1>Edit Supplier</h1>
      <hr>
      <div class="grid">
          <div class="row">
              <div class="span2">
                Nama Supplier
              </div>
              <div class="input-control text size4">
                    <input type="text" name="nama" placeholder="Nama Supplier" value="<?php echo $Vnama; ?>">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Alamat
              </div>
              <div class="input-control text size4">
                    <input type="text" name="alamat" placeholder="Alamat Supplier" value="<?php echo $Valamat; ?>">
                    <button class="btn-clear"></button>
              </div>
          </div>
           <div class="row">
              <div class="span2">
                Telepon
              </div>
              <div class="input-control text size4">
                    <input type="text" name="telepon" placeholder="Nomor Telepon" value="<?php echo $Vtelepon; ?>">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <input type="submit" name="Tambah" Value="Update Data" class="primary large"> 
          </div>
      </div>
    </form>
    </div>
</div>
