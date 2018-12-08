<?php 
foreach ($data as $value) {
    $Kode_Obat=$value['kode_obat'];
    $Nama=$value['nama_produk'];
    $photo=$value['photo_url'];
}
?>
   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <form method="POST" action="<?php echo base_url()."Gudang/Obat/set_gantiGambar/".$Kode_Obat?>" enctype="multipart/form-data">
      <h1>Edit Produk</h1>
      <hr>
      <div class="grid">
         <h2><?php echo $Nama ?></h2><br>
          <div class="row">
              <div class="span4">
               <img class="polaroid" src="<?php echo base_url()."img/photo/".$photo ?>" ?>
              </div>
              <div class="span4">
                <div class="margin20">
                      <legend>Masukan Gambar Baru</legend>
                    <div class="input-control file size4">
                        <input type="file" required name="userfile" >
                        <button class="btn-file"></button>
                    </div>
                      <br><br>
                    <input type="submit" name="Simpan" Value="Simpan Gambar" class="Info large"> 

              </div>
          </div>
      </div>
    </form><br>
    <p class="fg-red">*ukuran data maksimal 1024 kb (1 mb) dan resolusi gambar maksimal 1600x1200</p>
    </div>
</div>