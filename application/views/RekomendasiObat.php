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
             <span class="heading bg-cyan fg-white" href="#">Daftar Indikasi Obat</span>
          </div>
    </div>
    <br>
    <p style="line-height:+2;">
      <?php
      foreach ($data as $d) {
        echo "<a href=".base_url()."Produk/Details/".$d['kode_obat'].">".$d['nama_produk']."</a> : ";
        echo $d['indikasi']."<br>";
      }
      ?>
    </p>    
    </div>

          <div id="konten3">
          
          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Rekomendasi Obat</span>
          </div>
          </div>
          <br>
          <fieldset>
            <label>Masukan Keluhan Anda</label><br>
            <div class="input-control textarea" data-role="input-control">
                <Textarea placeholder="Keluhan Anda, contoh : Penurun Demam" name="keluhan" id="txtcari"></textarea>
            </div>
            <br><br>
    <button class="bg-hover-orange success padding10" style="width:40%;" name="btncari" id="btncari">Cari</button>
        </fieldset>
        <hr>
    </div>
</form>