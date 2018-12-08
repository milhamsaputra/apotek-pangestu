<nav class="sidebar light">
        <ul>
            <li class="title bg-cyan fg-white">
                Pemilik
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-user fg-green"></i>Manajemen User</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Pemilik/User"?>">Kelola User</a></li>
                    <li><a href="<?php echo base_url()."Pemilik/User/Tambah"?>">Tambah User</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-pie fg-green"></i> Laporan</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Pemilik/Laporan/penjualanHariIni" ?>">Penjualan hari ini</a></li>
                    <li><a href="<?php echo base_url()."Pemilik/Laporan/PrintPersediaanObat" ?>">Persediaan obat</a></li>     
                    <li><a href="<?php echo base_url()."Pemilik/Laporan/PrintDataSupplier" ?>">Data Supplier</a></li>     
                    <li><a href="<?php echo base_url()."Pemilik/Laporan/LaporanTukarObat" ?>">Riwayat Penukaran Stok Obat</a></li>     
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-broadcast fg-green"></i>Pemberitahuan</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Pemilik/Pesan" ?>">Pesan</a></li>
                    <li><a href="<?php echo base_url()."Pemilik/Notice" ?>">Stok Persediaan</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php 
        if($_SESSION['akses']=="Pemilik"){
    
        }else{
            $this->mymodel->switch_user($_SESSION['akses']);
        }
    ?>