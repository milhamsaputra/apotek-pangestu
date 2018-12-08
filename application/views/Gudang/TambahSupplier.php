   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <form method="POST" action="<?php echo base_url()."Gudang/Supplier/set_add"?>">
      <h1>Tambah Supplier</h1>
      <hr>
      <div class="grid">
          <div class="row">
              <div class="span2">
                Nama Supplier
              </div>
              <div class="input-control text size4">
                    <input type="text" name="nama" placeholder="Nama Supplier">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Alamat
              </div>
              <div class="input-control text size4">
                    <input type="text" name="alamat" placeholder="Alamat Supplier">
                    <button class="btn-clear"></button>
              </div>
          </div>
           <div class="row">
              <div class="span2">
                Telepon
              </div>
              <div class="input-control text size4">
                    <input type="text" name="telepon" placeholder="Nomor Telepon">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <input type="submit" name="Tambah" Value="Tambah Supplier" class="primary large"> 
          </div>
      </div>
    </form>
    </div>
</div>
