
   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <h1>Ubah Password</h1>
    <hr>
   <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
      
     <div class="grid">
      <form method="POST" action="<?php echo base_url().$_SESSION['akses']."/Password/Set_Update" ?>">
        <div class="row">
          <div class="span2">
            Password
          </div>
          <div class="input-control password size4 <?php echo $this->session->flashdata('error') ?>">
            <input type="password" name="pass1" placeholder="Password lama" value="<?php echo $this->session->flashdata('Ori') ?>">
            <button class="btn-reveal"></button>
          </div>
        </div>
        <div class="row">
          <div class="span2">
           Password Baru
          </div>
          <div class="input-control password size4">
            <input type="password" name="pass2" placeholder="Password yang ingin digunakan">
            <button class="btn-reveal"></button>
          </div>
        </div>
        <div class="row">
          <div class="span2">
           
          </div>
          <button class="info" name="submit"><i class="icon-loop on-left"></i>Simpan Password</button>
        </div>
      </form>
     </div>

    </div>
</div>