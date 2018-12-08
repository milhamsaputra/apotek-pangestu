<script src="<?php echo base_url()."js/metro-calendar.js" ?>"></script>
<script src="<?php echo base_url()."js/metro-datepicker.js" ?>"></script>
<?php 
foreach ($data as $value) {
    $Kode_Obat=$value['kode_obat'];
    $Nama=$value['nama_produk'];
    $IdDosis=$value['id_dosis'];
    $Dosis=$value['dosis'];
    $IdKategori=$value['id_kategori'];
    $Kategori=$value['nama_kategori'];
    $IdSatuan=$value['id_satuan'];
    $Satuan=$value['nama_satuan'];
    $Indikasi=$value['indikasi'];
    $Harga=$value['harga'];
    $Jumlah=$value['jumlah_stok'];
    $Kadaluarsa=$value['kadaluarsa'];
    $IdSupplier=$value['id_supplier'];
    $Supplier=$value['nama_supplier'];

}
?>
   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <form method="POST" action="<?php echo base_url()."Gudang/Obat/Update/".$Kode_Obat?>">
      <h1>Edit Produk</h1>
      <hr>
      <div class="grid">
          <div class="row">
              <div class="span2">
                Nama Obat
              </div>
              <div class="input-control text size4">
                    <input type="text" name="nama" placeholder="Nama Obat" value="<?php echo $Nama ?>">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Dosis
              </div>
              <div class="input-control select size4">
                  <select name="dosis">
                      <option value="<?php echo $IdDosis ?>"><?php echo $Dosis ?></option>
                      <?php 
                      $DataDosis = $this->mymodel->tampil('tb_dosis');
                      foreach ($DataDosis as $att1) {
                      ?>
                        <option value="<?php echo $att1['id_dosis'] ?>"><?php echo $att1['dosis'] ?></option>
                      <?php
                      }
                       ?>
                  </select>
              </div>
          </div>
           <div class="row">
              <div class="span2">
                Kategori
              </div>
              <div class="input-control select size4">
                  <select name="kategori">
                      <option value="<?php echo $IdKategori ?>"><?php echo $Kategori ?></option>
                      <?php 
                      $DataKategori = $this->mymodel->tampil('tb_kategori_obat');
                      foreach ($DataKategori as $att2) {
                      ?>
                        <option value="<?php echo $att2['id_kategori'] ?>"><?php echo $att2['nama_kategori'] ?></option>
                      <?php
                      }
                       ?>
                  </select>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Satuan
              </div>
              <div class="input-control select size4">
                  <select name="satuan">
                      <option value="<?php echo $IdSatuan ?>"><?php echo $Satuan ?></option>
                      <?php 
                      $DataSatuan = $this->mymodel->tampil('tb_satuan_obat');
                      foreach ($DataSatuan as $att3) {
                      ?>
                        <option value="<?php echo $att3['id_satuan'] ?>"><?php echo $att3['nama_satuan'] ?></option>
                      <?php
                      }
                       ?>
                  </select>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Indikasi
              </div>
              <div class="input-control textarea size4">
                <textarea name="indikasi" placeholder="Contoh: Demam,Flu,Batuk" ><?php echo $Indikasi ?></textarea>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Jumlah Stok
              </div>
              <div class="input-control text size4">
                    <input type="text" name="jumlahstok" placeholder="Jumlah Stok Obat" value="<?php echo $Jumlah ?>">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Harga Produk
              </div>
              <div class="input-control text size4">
                    <input type="text" name="harga" placeholder="Harga Obat" value="<?php echo $Harga ?>">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Kadaluarsa
              </div>
              <div class="input-control text size4" data-role="datepicker" data-week-start="1">
                    <input type="text" name="kadaluarsa" placeholder="Tanggal Kadaluarsa" value="<?php echo $Kadaluarsa ?>">
                    <button class="btn-date"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Pemasok 
              </div>
              <div class="input-control select size4">
                  <select name="supplier">
                      <option value="<?php echo $IdSupplier ?>"><?php echo $Supplier ?></option>
                      <?php 
                      $DataSupply = $this->mymodel->tampil('tb_supplier');
                      foreach ($DataSupply as $att4) {
                      ?>
                        <option value="<?php echo $att4['id_supplier'] ?>"><?php echo $att4['nama_supplier'] ?></option>
                      <?php
                      }
                       ?>
                  </select>
              </div>
          </div>
          <div class="row">
              <input type="submit" name="Simpan" Value="Update" class="primary large"> 
          </div>
      </div>
    </form>
    </div>
</div>