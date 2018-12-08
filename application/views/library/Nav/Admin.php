<nav class="sidebar light">
        <ul>
            <li class="title bg-cyan fg-white">
                Admin 
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-user fg-green"></i>Manajemen User</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Admin/User"?>">Kelola User</a></li>
                    <li><a href="<?php echo base_url()."Admin/User/Tambah"?>">Tambah User</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-clipboard-2 fg-green"></i>Manajemen Data Obat</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Admin/Obat"?>">Data Produk</a></li>
                    <li><a href="<?php echo base_url()."Admin/Kategori"?>">Kategori Obat</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-loop fg-green"></i>Transaksi</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Admin/TransaksiJual"?>">Penjualan Obat Apotek</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-pie fg-green"></i>Laporan</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Admin/Laporan/penjualanHariIni" ?>">Penjualan Apotik hari Ini</a></li>
                    <li><a href="<?php echo base_url()."Admin/Laporan/LaporanPenjualanApotik" ?>">Data Penjualan Apotik</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-broadcast fg-green"></i>Pemberitahuan</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Admin/Pesan" ?>">Pesan</a></li>
                    <li><a href="<?php echo base_url()."Admin/Notice" ?>">Stok Persediaan</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php 
        if($_SESSION['akses']=="Admin"){
    
        }else{
            $this->mymodel->switch_user($_SESSION['akses']);
        }
    ?>