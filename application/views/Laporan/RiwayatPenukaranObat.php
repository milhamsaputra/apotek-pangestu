   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <h1>Riwayat Penukaran Stok Obat</h1>
    <hr>
    <table class="table bordered">
        <tr>
            <td>No</td>
            <td>Nama Produk</td>
            <td>Stok Awal</td>
            <td>Kadaluarsa Awal</td>
            <td>Stok Baru</td>
            <td>Kadaluarsa Baru</td>
            <td>Nama Supplier</td>
            <td>Print</td>
        </tr>
        <?php
            $no=1;
            foreach ($data1 as $value) {
            ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $value['nama_produk'] ?></td>
            <td><?php echo $value['stok_awal'] ?></td>
            <td><?php echo $value['kadaluarsa_awal'] ?></td>
            <td><?php echo $value['stok_baru'] ?></td>
            <td><?php echo $value['kadaluarsa_baru'] ?></td>
            <td><?php echo $value['nama_supplier'] ?></td>
            <td><?php echo $value['tanggal'] ?></td>
        </tr>
            <?php
            $no++;
            }
        ?>
    </table>
    <!--<font class="subheader"> Total Pendapatan Hari Ini : <?php echo number_format($total_pendapatan, "0", ",",".") ?></font>-->
    </div>
</div>
