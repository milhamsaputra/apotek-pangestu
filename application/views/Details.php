<?php
foreach ($data as $row) {
  $nama=$row['nama_produk'];
  $foto=$row['photo_url'];
  $kategori=$row['nama_kategori'];
  $dosis=$row['dosis'];
  $jumlah=$row['jumlah_stok'];
  if($jumlah<=0){
    $statusjumlah="<font class=\"fg-orange\">Tidak Tersedia</font>";
  }else{
    $statusjumlah="<font class=\"fg-green\">Tersedia</font>";
  }
  $indikasi=$row['indikasi'];
  $harga=$row['harga'];
  $satuan=$row['nama_satuan'];

}
?>
     <div id="boxkonten">
       <br>
        <font class="judul2">Details Produk</font><hr>
          <div id="konten3" style="padding-right:2%;">
      <div class="grid">
        <div class="row">
          <h2><?php echo $nama ?></h2><br> 
        </div> 
        <div class="row">
          <div class="span4">
            <img src="<?php echo base_url()."img/photo/".$foto ?>" class="polaroid" width="90%">
          </div>
          <div class="span5">
            <p style="line-height:+2;">
            Nama Produk : <?php echo $nama; ?><br>
            Kategori : <?php echo $kategori; ?><br>
            Dosis : <?php echo $dosis; ?><br>
            Jumlah Stok : <?php echo $statusjumlah ?><br>
            Indikasi : <?php echo $indikasi ?><br>
              <p class="fg-lime subheader-secondary text-right">Rp. <?php echo number_format($harga, 0, ",","."); ?> / <?php echo $satuan ?> </p>
          </p>   
          </div>
        </div>
      </div>

    </div>
    <div id="konten4" style="padding-right:0;">

        <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Daftar Produk Tersedia</span>
          </div>
        </div>
        <?php
        $data2 = $this->mymodel->tampil('tb_obat');?>
        <p>
          <table class="table">
        <?php
      foreach ($data2 as $d) {
        ?>
      <tr>
        <td class="bg-hover-lightGreen">      
         <a class="fg-hover-white" href="<?php echo base_url()."Produk/Details/".$d['kode_obat'] ?>">
          <?php
            echo "<font>".$d['nama_produk']."</font> : ";
            echo $d['indikasi']."<br>";
          ?>
        </a>
        </td>
      </tr>
      <?php
      }
      ?>
        </table>
      </p>
    </div>
