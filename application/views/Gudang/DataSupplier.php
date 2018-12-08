   <div id="admin-kotak-utama">
    <div id="admin-konten">
    	<h1>Data Supplier</h1>
    	<hr>
    	<table width="100%" cellpadding="10px" style="text-align:left;" class="table hovered striped">
    		<thead>
    			<th>No</th>
    			<th>Nama Supplier</th>
    			<th>Alamat</th>
    			<th>Nomor Telepon</th>
    			<th>Opsi</th>
    		</thead>
    		<tbody>
    			<?php
    				$no=1;
    				foreach ($data as $d) {
    				?>
    				<tr>
    					<td><?php echo $no; ?></td>
    					<td><?php echo $d['nama_supplier'] ?></td>
    					<td><?php echo $d['alamat'] ?></td>
    					<td><?php echo $d['telepon'] ?></td>
    					<td>
    						<a href="<?php echo base_url()."Gudang/Supplier/Edit/".$d['id_supplier'] ?>" title="Edit">
                                <i class="icon-Pencil bg-Blue bg-hover-darkBlue" style="color: white;padding: 7px;border-radius: 50%" ></i>
                            </a>
    						<a href="<?php echo base_url()."Gudang/Supplier/delete/".$d['id_supplier'] ?>" title="Hapus">
                                 <i class="icon-cancel-2 bg-red bg-hover-darkred" style="color: white;padding: 7px;border-radius: 50%"></i>
                            </a>
    						</td>
    				</tr>
    				<?php
    				$no++;
    				}
    			?>
    		</tbody>	
    	</table>	
        <a href="<?php echo base_url()."Admin/Laporan/PrintDataSupplier" ?>"><button class="large primary"><i class="icon-printer on-left"></i>Cetak Data Supplier</button></a>
    </div>
</div>
