   <div id="admin-kotak-utama">
    <div id="admin-konten">
    <h1>Data Penjualan Apotik</h1>
    <hr>
    <br>
    <form method="POST" action="<?php echo base_url()."Admin/Laporan/LaporanPenjualanApotik2" ?>">
    <div class="grid">
        <div class="row">
              <div class="span2">
                Dari Tanggal
              </div>
              <div class="input-control text size4" data-role="datepicker" data-week-start="1" data-date="<?php echo date('Y-m-d') ?>" data-format="yyyy-mm-dd">
                    <input type="text" name="tanggal1" required>
                    <button class="btn-date"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
                Hingga Tanggal
              </div>
              <div class="input-control text size4" data-role="datepicker" data-week-start="1" data-date="<?php echo date('Y-m-d') ?>" data-format="yyyy-mm-dd">
                    <input type="text" name="tanggal2" required>
                    <button class="btn-date"></button>
              </div>
          </div>
          <div class="row">
              <div class="span2">
              </div>
              <div class="span2">
                <button class="primary large"><i class="on-left icon-search"></i>Tampilkan</button>
              </div>
          </div>
    </div>
    </form>
    <!--<font class="subheader"> Total Pendapatan Hari Ini : <?php echo number_format($total_pendapatan, "0", ",",".") ?></font>-->
    </div>
</div>
