   <?php
    foreach ($data as $row) {
        $kode_obat=$row['kode_obat'];
        $sisastok=$row['jumlah_stok'];
        $kadaluarsa=$row['kadaluarsa'];
        $satuan=$row['nama_satuan'];
    }
   ?>
<div id="admin-kotak-utama">
    <div id="admin-konten">

    <h1>Penukaran Obat</h1>
    <hr>
    <br>
    <form method="POST" action="<?php echo base_url()."Gudang/Obat/set_penukaran/".$kode_obat ?>">
      <div class="grid">
                
                                <div class="accordion">
                                    <div class="accordion-frame">
                                        <span class="heading bg-cyan fg-white" href="#">STOK AWAL</span>
                                    </div>
                                </div>
          <div class="row">
              <table style="text-align:center;" width="100%">
                    <td>
                Sisa Stok Obat<br>
                <h2 class="fg-orange"><?php echo $sisastok; ?>&nbsp;<?php echo $satuan; ?></h2>
                    </td>
                    <td>
                Tanggal Kadaluarsa <br>
                <h2 class="fg-orange"><?php echo $kadaluarsa; ?></h2>
                    </td>   
                </tr>
              </table>  
              </div>
              <br>
          <div class="accordion">
                                    <div class="accordion-frame">
                                        <span class="heading bg-cyan fg-white" href="#">STOK BARU</span>
                                    </div>
                                </div>
          <div class="row">
              <div class="row">
              <div class="span2">
                Jumlah Stok
              </div>
              <div class="input-control text span4">
                    <input type="text" name="jumlahstok" placeholder="Jumlah Stok Obat">
                    <button class="btn-clear"></button>
              </div>
              <div class="span2">
                Kadaluarsa
              </div>
              <div class="input-control text span4" id="datepicker" data-role="datepicker" data-week-start="1" data-format="yyyy-mm-dd">
                    <input type="text" name="kadaluarsa" placeholder="Tanggal Kadaluarsa">
                    <button class="btn-date"></button>
              </div>
              <div>

<script type="text/javascript">

    $(document).ready(function () {
        $('#dtpStartsOn').on('date-selected', function (el, dateString, dateMoment) {
            alert('date-selected');
        });
    });

</script>
            </div>
          </div><br><br><br><br>
          <div class="row">
              <button name="simpan" class="success large"><i class="icon-checkmark on-left"></i>Simpan data</button>
              <a href="<?php echo base_url()."Gudang/Obat/PilihObat" ?>" class="button large warning"><i class="icon-exit on-left"></i>Batal</a> 
          </div>
      </div>
    </form>
    <br>  
    <br>  
    <br>  
    </div>
</div>
</div>
