   <div id="admin-kotak-utama">
    <div id="admin-konten">
       <?php
    foreach ($data as $row) {
        $id_user=$row['id_user'];
        $username=$row['username'];
        $akses=$row['akses'];
        $nama=$row['nama'];
    }
   ?>
<form method="POST" action="<?php echo base_url()."Admin/User/Set_Update/".$id_user?>">
    <h1>Edit User</h1>
    <hr>
    <div class="grid">
      <div class='row'>
        <div class="span2">
            Username
        </div>
        <div class="span4">
            <h4><?php echo $username ?></h4>
        </div>
      </div>

      <div class='row'>
        <div class="span2">
            Hak Akses
        </div>
        <div class="input-control select size4">
                   <select name="Akses">
                       <option value="<?php echo $akses ?>"><?php echo $akses ?></option>
                       <option>Admin</option>
                       <option>Kasir</option>
                       <option>Gudang</option>
                   </select>
        </div>
      </div>


      <div class='row'>
        <div class="span2">
            Nama 
        </div>
        <div class="input-control text size4">
                    <input type="text" value="<?php echo $nama ?>" name="Nama" placeholder="Nama Pegawai">       
                    <button class="btn-clear"></button>
        </div>
      </div>

    </div>

               <Button name="tambah" class="Success large place-left"><i class="icon-checkmark on-left"></i>Update</button>
    </form>
               <a href="<?php echo base_url()."Admin/User/index" ?>"><Button name="batal" class="warning large"><i class="icon-cancel on-left"></i>Kembali</button></a>
    </div>
</div>
