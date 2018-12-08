    <form method="POST" action="<?php echo base_url()."Pesan/kirim_pesan" ?>">
     <div id="boxkonten">
       <br>
        <font class="judul2">Kritik dan Saran</font><hr>
      <br>
   <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
          <div id="konten4">
    
    <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Kontak</span>
          </div>
    </div>
    <br>
    <div id="maps-here" style="width:340px;height:200px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.443424474645!2d106.81028001412365!3d-6.618608195213823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5e4e972f30f%3A0xe3fa476a11b5d6a0!2sApotik+Pangestu!5e1!3m2!1sid!2sid!4v1543765161569" width="340" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
  <br>

    <p style="line-height:+2;">
    Alamat : Jl. Siliwangi No.118 Bogor <br>
    Telp/Fax : (0251) 378 808 <br>    
    Facebook : Facebook.com
    </p>    
    </div>

          <div id="konten3">
          
          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Pesan</span>
          </div>
          </div>

          <fieldset>
          <div id="konten4">
                                        <label>Nama depan*</label>
                                        <div class="input-control text" data-role="input-control">
                                            <input type="text" placeholder="Nama depan" name="depan">
                                            <button class="btn-clear"></button>
                                        </div>
                                        <label>Nama belakang</label>
                                        <div class="input-control text" data-role="input-control" >
                                            <input type="text" placeholder="Nama belakang" name="belakang">
                                            <button class="btn-clear"></button>
                                        </div>
                                        <label>E-mail*</label>
                                        <div class="input-control text" data-role="input-control">
                                            <input type="text" placeholder="E-mail" name="email">
                                            <button class="btn-clear"></button>
                                        </div>    
        </div>
          <div id="konten3">
          <label>Pesan*</label>
    <div class="input-control textarea">
        <textarea rows="6" name="pesan"></textarea>
    </div>

    <button class="bg-hover-orange success padding10" style="width:100%;">Kirim Pesan</button>
        </div>
        </div>
        </fieldset>
  
    </div>
    </form>
 