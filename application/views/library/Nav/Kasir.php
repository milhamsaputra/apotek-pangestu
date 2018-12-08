<nav class="sidebar light">
        <ul>
            <li class="title bg-cyan fg-white">
                Kasir 
            </li>
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-loop fg-green"></i>Transaksi</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Kasir/TransaksiJual"?>">Penjualan Obat Apotek</a></li>
                </ul>
            </li>
            <!--<li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-pie fg-green"></i>Laporan</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="">Stok</a></li>
                    <li><a href="">Supplier</a></li>
                </ul>
            </li>-->
            <li>
                <a href="#" class="dropdown-toggle bg-hover-lightgreen fg-hover-white"><i class="icon-broadcast fg-green"></i>Pemberitahuan</a>
                <ul class="dropdown-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url()."Kasir/Pesan" ?>">Pesan</a></li>
                    <li><a href="<?php echo base_url()."Kasir/Notice" ?>">Stok Persediaan</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php 
        if($_SESSION['akses']=="Kasir"){
    
        }else{
            $this->mymodel->switch_user($_SESSION['akses']);
        }
    ?>