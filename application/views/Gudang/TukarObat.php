<div id="admin-kotak-utama">
    <div id="admin-konten">

    <h1>Penukaran Obat</h1>
    <hr>
    <br>
   <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div><br>
    <h2>Pilih stok yang akan ditukar</h2>
    	<table width="100%" cellpadding="10px" style="text-align:left;" class="table hovered">
    		<thead >
    			<th>No</th>
                <th>Foto</th>                
    			<th>Nama Produk</th>
    			<th>Supplier</th>
    			<th>Jumlah Stok</th>
                <th>Kadaluarsa</th>
    			<th>Pilih</th>
    		</thead>
    		<tbody>
    			<?php
    				$no=1;
    				foreach ($data as $d) {
    				?>
    				<tr>
    					<td><?php echo $no; ?></td>
                        <td>
                        	<img src="<?php echo base_url()."/img/photo/".$d['photo_url'] ?>" class="polaroid span1">   
                        </td>
    					<td><?php echo $d['nama_produk'] ?></td>
    					<td><?php echo $d['nama_supplier'] ?></td>
    					<td><?php echo $d['jumlah_stok'] ?></td>
                        <td><h5><?php echo $d['kadaluarsa'] ?></h5></td>
    					<td>
                            <a href="<?php echo base_url()."Gudang/Obat/TukarObat/".$d['kode_obat'] ?>" title="Tukar Obat Ini">
                            	<button class="success large">Tukar Obat</button>
                            </a> 
                        </td>
    				</tr>
    				<?php
    				$no++;
    				}
    			?>
    		</tbody>	
    	</table>
    </div>
</div>