   <div id="admin-kotak-utama">
    <div id="admin-konten">
<form method="POST" action="<?php echo base_url()."Pemilik/User/Set_Add"?>">
    <h1>Tambah User</h1>
    <hr>
      <div class="ribbed-green fg-white <?php echo $this->session->flashdata('Pad') ?> alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
    <div class="grid">
      <div class='row'>
        <div class="span2">
            Username
        </div>
        <div class="input-control text size4">
                    <input type="text" name="User"  placeholder="Username">       
                    <button class="btn-clear"></button>
        </div>
      </div>

      <div class='row'>
        <div class="span2">
            Password
        </div>
        <div class="input-control text size4">
                    <input type="text" name="Pass"  placeholder="Password">       
                    <button class="btn-clear"></button>
        </div>
      </div>


      <div class='row'>
        <div class="span2">
            Hak Akses
        </div>
        <div class="input-control select size4">
                   <select name="Akses">
                       <option>-Tugas Bagian-</option>
                       <option>Admin</option>
                       <option>Kasir</option>
                       <option>Gudang</option>
                       <option>Pemilik</option>
                   </select>
        </div>
      </div>


      <div class='row'>
        <div class="span2">
            Nama 
        </div>
        <div class="input-control text size4">
                    <input type="text" name="Nama" placeholder="Nama Pegawai">       
                    <button class="btn-clear"></button>
        </div>
      </div>

    </div>     
             <Button name="tambah" class="Info large place-left"><i class="icon-checkmark on-left"></i>Tambah</button>
    </form>
               <a href="index"><Button name="batal" class="warning large"><i class="icon-cancel on-left"></i>Kembali</button></a>
    </div>
</div>
