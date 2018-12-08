   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <h1>Data Penjualan Apotik</h1>
    <hr>
    <table class="table bordered">
        <tr>
            <td>No</td>
            <td>Id Transaksi</td>
            <td>Nama Pembeli</td>
            <td>Kontak</td>
            <td>Total Harga</td>
            <td>Tanggal</td>
            <td>Print</td>
        </tr>
        <?php
            $no=1;
            foreach ($data1 as $value) {
            ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $value['id_transaksi'] ?></td>
            <td><?php echo $value['nama_pembeli'] ?></td>
            <td><?php echo $value['kontak'] ?></td>
            <td>Rp. <?php echo number_format($value['total_harga'],"0", ",", ".") ?></td>
            <td><?php echo $value['tanggal'] ?></td>
            <td><a href="<?php echo base_url()."Admin/Laporan/PrintFakturTransaksi/".$value['id_transaksi'] ?>?ref=2"><button class="info bg-hover-white fg-hover-blue bd-blue">Cetak Faktur</button></a></td>
        </tr>
            <?php
            $no++;
            }
        ?>
    </table>
    <!--<font class="subheader"> Total Pendapatan Hari Ini : <?php echo number_format($total_pendapatan, "0", ",",".") ?></font>-->
    </div>
</div>
