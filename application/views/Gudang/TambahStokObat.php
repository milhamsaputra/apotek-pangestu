   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <form method="POST" action="<?php echo base_url()."Gudang/Obat/set_add"?>" enctype="multipart/form-data">
      <h1>Tambah Produk Baru</h1>
      <hr>
   <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
      <div class="grid">
          <div class="row">
              <div class="span2">
                Nama Obat
              </div>
              <div class="input-control text size4">
                    <input type="text" name="nama" required placeholder="Nama Obat" >
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Dosis
              </div>
              <div class="input-control select size4">
                  <select name="dosis">
                      <option value="0">-- pilih dosis obat --</option>
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
                      <option value="0">-- pilih kategori --</option>
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
                      <option value="0">-- pilih satuan --</option>
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
              <div class="input-control textarea size4" required>
                <textarea name="indikasi" placeholder="Contoh: Demam,Flu,Batuk"></textarea>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Kadaluarsa
              </div>
              <div class="input-control text size4" data-role="datepicker" data-week-start="1" data-date="<?php echo date('Y-m-d') ?>" data-format="yyyy-mm-dd">
                    <input type="text" name="kadaluarsa" required placeholder="Tanggal Kadaluarsa">
                    <button class="btn-date"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Jumlah Stok
              </div>
              <div class="input-control text size4">
                    <input type="text" name="jumlahstok" required placeholder="Jumlah Stok Obat">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Harga Produk
              </div>
              <div class="input-control text size4">
                    <input type="text" name="harga" required placeholder="Harga Obat">
                    <button class="btn-clear"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Photo
              </div>
              <div class="input-control file size4">   
                  <input type="file" name="userfile"/>
                  <?php /* echo set_value('userfile'); */ ?>
                 <button class="btn-file"></button>
              </div><br>
    <p class="fg-red">*ukuran data maksimal 1024 kb (1 mb) dan resolusi gambar maksimal 1600x1200</p>
          <div class="input-control checkbox">
                  <label>
                      <input type="checkbox" name="defaultFoto" value="1"/>
                      <span class="check"></span>
                      <small>Gunakan Foto Default.</small>
                  </label>
          </div>
              <div class="span2">
                
              </div>
              
              </div>

            

          <div class="row">
              <div class="span2">
                Pemasok 
              </div>
              <div class="input-control select size4">
                  <select name="supplier">
                      <option value="0">-- pilih Supplier --</option>
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
              <input type="submit" name="Simpan" Value="Tambahkan" class="primary large"> 
          </div>
      </div>
    </form>
    </div>
</div>
