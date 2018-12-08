
   <div id="admin-kotak-utama">
    <div id="admin-konten">
      <?php 
        $akses = $_SESSION['akses'];
      ?>
    <h1>Pemberitahuaan Stok Persediaan</h1>
    <hr>

      <div class="accordion">
        <div class="accordion-frame">
           <span class="heading ribbed-red fg-white" href="#"><i class="icon-calendar"></i>Stok Kadaluarsa</span>
        </div>
      </div>
      <br>
      <table class="table stripped text-left hovered">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Obat</th>
          <th>Dosis</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Kadaluarsa</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no2=1;
        foreach($data as $stok2){
          if($stok2['sisa_kadaluarsa']<=0){
        ?>
        <tr>
          <td><?php echo $no2; ?></td>
          <td><?php echo $stok2['nama_produk']; ?></td>
          <td><?php echo $stok2['dosis']; ?></td>
          <td><?php echo $stok2['nama_kategori']; ?></td>
          <td><?php echo $stok2['jumlah_stok']; ?></td>
          <td><?php echo $stok2['kadaluarsa']; ?></td>
        </tr>
        <?php
        $no2++;
        }
        }
        ?>
      </tbody>
      </table>
      <br>
      <br>
      <div class="accordion">
        <div class="accordion-frame">
           <span class="heading ribbed-orange fg-white" href="#"><i class="icon-calendar"></i>Stok Habis</span>
        </div>
      </div>
      <br>
      <table class="table stripped text-left hovered">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Obat</th>
          <th>Dosis</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Kadaluarsa</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no2=1;
        foreach($data as $stok2){
          if($stok2['jumlah_stok']<=0){
          if($stok2['sisa_kadaluarsa']<=0){
            $skd="Kadaluarsa";
          }else{
            $skd=$stok2['sisa_kadaluarsa']." hari";
          }
        ?>
        <tr>
          <td><?php echo $no2; ?></td>
          <td><?php echo $stok2['nama_produk']; ?></td>
          <td><?php echo $stok2['dosis']; ?></td>
          <td><?php echo $stok2['nama_kategori']; ?></td>
          <td><?php echo $stok2['jumlah_stok']; ?></td>
          <td><?php echo $stok2['kadaluarsa']; ?> (<font class="fg-red"> <?php echo $skd; ?> </font>)</td>
        </tr>
        <?php
        $no2++;
        }
        }
        ?>
      </tbody>
      </table>

      <br>
      <br>
      <div class="accordion">
        <div class="accordion-frame">
           <span class="heading ribbed-cyan fg-white" href="#"><i class="icon-calendar"></i>Stok Berjumlah Sedikit</span>
        </div>
      </div>
      <br>
      <table class="table stripped text-left hovered">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Obat</th>
          <th>Dosis</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Kadaluarsa</th>
        </tr>
      </thead>
      <tbody>
         <?php 
         $no3=1;
        foreach($data as $stok2){
          if(($stok2['jumlah_stok']<=10)&&($stok2['jumlah_stok']>=1)){
          if($stok2['sisa_kadaluarsa']<=0){
            $skd="Kadaluarsa";
          }else{
            $skd=$stok2['sisa_kadaluarsa']." hari";
          }
        ?>
        <tr>
          <td><?php echo $no3; ?></td>
          <td><?php echo $stok2['nama_produk']; ?></td>
          <td><?php echo $stok2['dosis']; ?></td>
          <td><?php echo $stok2['nama_kategori']; ?></td>
          <td><?php echo $stok2['jumlah_stok']; ?></td>
          <td><?php echo $stok2['kadaluarsa']; ?> (<font class="fg-red"> <?php echo $skd; ?> </font>)</td>
        </tr>
        <?php
        $no3++;
        }
        }
        ?>
      </tbody>
      </table>

      </div>    
    </div>