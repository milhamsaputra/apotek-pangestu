
   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <h1>Ubah Username</h1>
    <hr>
   <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
      
     <div class="grid">
      <form method="POST" action="<?php echo base_url().$_SESSION['akses']."/Username/Set_Update" ?>">
        
        <div class="row">
          <div class="span2">
           Username Anda saat ini
          </div>
          <div class="span4">
           <h4><?php echo $_SESSION['username'] ?></h4>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="span2">
           Username Baru
          </div>
          <div class="input-control text size4">
            <input type="text" name="user" placeholder="Username yang ingin digunakan" value="<?php echo $this->session->flashdata('User') ?>">
            <button class="btn-clear"></button>
          </div>
        </div>
        <br>
        <h5 class="fg-green">Verifikasi</h5><hr>
         Untuk keamanan masukan password anda.
        <div class="row">
          <div class="span2">
           Password
          </div>
          <div class="input-control password size4 <?php echo $this->session->flashdata('error') ?>">
            <input type="password" name="pass1" placeholder="Password Anda">
            <button class="btn-reveal"></button>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="span2">
           
          </div>
          <button class="info large" name="submit"><i class="icon-loop on-left"></i>Simpan</button>
        </div>
      </form>
     </div>

    </div>
</div>