<?php
if(isset($_POST['btncari'])){
  $this->session->set_flashdata('keyword',$_POST['keluhan']);
  echo "<script>document.location.href='".base_url()."RekObat/Result/".$_POST['keluhan']."'</script>";
}
?>
<form method="POST">
     <div id="boxkonten">
       <br>
        <font class="judul2">Rekomendasi Obat</font><hr>
      <br>
          <div id="konten4">
        
          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Rekomendasi Obat</span>
          </div>
          </div>
          <br>
          <fieldset>
            <label>Masukan Keluhan Anda</label><br>
            <div class="input-control textarea" data-role="input-control">
                <Textarea placeholder="Keluhan Anda, contoh : Sakit Tenggorokan" name="keluhan" id="txtcari" ><?php echo $this->session->flashdata('text'); ?></textarea>
            </div>
            <br><br>
    <button class="bg-hover-orange success padding10" style="width:40%;" name="btncari" id="btncari">Cari</button>
        </fieldset>

    </div>

          <div id="konten3">

            <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Daftar Stok Obat Tersedia</span>
          </div>
          </div>

          <table width="90%" class="table">

          <?php 
          if(is_array($data1)){
            foreach($data1 as $d){
          ?>
          <tr><td width="20%">
            <img src="<?php echo base_url()."img/photo/thumbs/".$d['photo_url'] ?>" class="span2" >
          </td>
          <td>
          <h4 class="fg-green"><?php echo $d['nama_produk'] ?></h4>
          Indikasi : <?php echo $d['indikasi'] ?><br><br>
          <a href="<?php echo base_url()."Produk/Details/".$d['kode_obat'] ?>">Baca Lebih Lanjut</a>
          </tr>
          </td>
          <?php
              }
          }else{
            echo "<tr><td class=\"text-center fg-orange\">STOK OBAT KOSONG.</td></tr>";
          }
          ?>

          </table>

           </div> 
</form>