   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <h1>Manajemen User</h1>
    <hr>
   <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
    <table width="100%" cellpadding="10px" class="table hovered" style="text-align:left;">
        <thead>
           <tr>
                <th> Username </th>
                <th> Nama Pegawai/Pengguna </th>
                <th> Akses </th>
                <th> Status </th>
                <th class="text-center"> Opsi </th>
            </tr>
        </thead>
        <tbody class="striped">
        <?php 
        foreach($data as $d){
        ?>
        <tr>
            <td> <?php echo $d['username'] ?></td>
            <td> <?php echo $d['nama'] ?> </td>
            <td> <?php echo $d['akses'] ?> </td>
            <td> <?php echo $d['status'] ?> </td>
            <td class="text-center"> 

<a href="<?php echo base_url()."Pemilik/User/Edit/".$d['id_user'] ?>"><i class="icon-pencil bg-green"  style="color: white;
padding: 5px;
border-radius: 50%" title="Edit User!"></i></a>

                <a href="<?php echo base_url()."Pemilik/User/Set_Remove/".$d['id_user'] ?>"><i class="icon-remove bg-orange"  style="color: white;
padding: 5px;
border-radius: 50%" title="Hapus User!"></i></a>
 </td>
        </tr>
        <?php
        }    
        ?>
        </tbody>
    </table>

    </div>
</div>
