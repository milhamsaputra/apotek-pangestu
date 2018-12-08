<?php  foreach ($data as $value) {     
$Kode_Obat=$value['kode_obat'];
$Nama=$value['nama_produk'];     
$Dosis=$value['dosis'];
$Kategori=$value['nama_kategori'];     
$Satuan=$value['nama_satuan'];
$Indikasi=$value['indikasi'];     
$Harga=$value['harga'];
$Jumlah=$value['jumlah_stok'];     
$Kadaluarsa=$value['kadaluarsa'];
$Supplier=$value['nama_supplier'];
$photo=$value['photo_url'];

}
?>
   <div id="admin-kotak-utama">
    <div id="admin-konten">
      <h1>Detail Produk</h1>
      <hr>
      
      <div class="grid">
         <h2><?php echo $Nama ?></h2><br>
          <div class="row">
              <div class="span6">

      <div class="grid">
          <div class="row">
              <div class="span2">
                Nama Obat
              </div>
              <div class="span4">
                    : <?php echo $Nama ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Dosis
              </div>
              <div class="span4">
                    : <?php echo $Dosis ?>
              </div>
          </div>
           <div class="row">
              <div class="span2">
                Kategori
              </div>
              <div class="span4">
                    : <?php echo $Kategori ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Satuan
              </div>
              <div class="span4">
                    : <?php echo $Satuan ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Indikasi
              </div>
              <div class="span4">
                    : <?php echo $Indikasi ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Jumlah Stok
              </div>
              <div class="span4">
                   : <?php echo $Jumlah ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Harga Produk
              </div>
              <div class="span4">
                   : Rp. <?php echo number_format($Harga, "0", ",", ".") ?> / <?php echo $Satuan ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Kadaluarsa
              </div>
              <div class="span4">
                   : <?php echo $Kadaluarsa ?>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Pemasok 
              </div>
              <div class="span4">
                   : <?php echo $Supplier ?>
              </div>
          </div>
        </div>
              </div>
              <div class="span5">
                <div>
                     <img class="polaroid" src="<?php echo base_url()."img/photo/".$photo ?>" ?>
              </div><br>
            <center>
            <a href="<?php echo base_url()."Gudang/Obat/Edit/".$Kode_Obat ?>"><button name="kembali" class="large success"><i class="icon-pencil on-left"></i>Edit</button></a> 
            <a href="<?php echo base_url()."Gudang/Obat/delete/".$Kode_Obat ?>"><button name="kembali" class="large danger"><i class="icon-cancel-2 on-left"></i>Hapus</button></a> 
            <a href="<?php echo base_url()."Gudang/Obat" ?>"><button name="kembali" class="large warning"><i class="icon-exit on-left"></i>Kembali</button></a>
            </center>
          </div>
      </div>

    </div>
</div>