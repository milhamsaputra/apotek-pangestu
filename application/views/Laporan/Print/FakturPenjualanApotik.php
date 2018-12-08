<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE HTML>
<html>
<title>
    Faktur Penjualan Apotik
</title>
<script src="<?php echo base_url()."js/jquery.min.js" ?>"></script>
<body>
    <style>
    .utama{
        margin:0 auto;
        border:thin solid #000;
        width:700px;
        padding:15px;
    }
    .print{
        margin:0 auto;
        width:700px;
        padding: 0;
    }
    a{
        text-decoration:none;
    }
    .btn{
      background: #09f;
      color: #FFF;
      padding: 1%;
      border: 1px solid blue;
      transition:all ease 0.1s;
    }
    .btn:hover{
      background: #FFF;
      color: blue;
      cursor: pointer;
    }
    </style>
    <?php
        /*if($_GET[menu]==laporan2){
            
        }else{
        */
        ?>
       <div class="print">
        <table width="100%">
        <tr>
          <td>
              <a href="#" onclick="document.getElementById('print').style.display='none';document.getElementById('kembali').style.display='none';window.print();document.getElementById('print').style.display='block';document.getElementById('kembali').style.display='block'"><img src="<?php echo base_url()."img/Print.png" ?>" id="print" width="25" height="25" border="0"></a>
          </td>
          <td style="text-align:right;">
            <?php 
            if(!empty($_GET['ref'])){
              if($_GET['ref']=='2'){
              ?>
                 <a href="<?php echo base_url().$_SESSION['akses']."/Laporan/penjualanHariIni" ?>"><button class="btn" id="kembali">Selesai , Kembali ke Laporan Penjualan</button></a>
            <?php
              }else{
            ?>
             <?php
              }
            }else{
              ?>
                 <a href="<?php echo base_url().$_SESSION['akses']."/TransaksiJual" ?>"><button class="btn" id="kembali">Selesai , Kembali ke Penjualan Apotik</button></a>
              <?php                       
            }
            ?>
            
          </td>
        </tr>
          </table>
          <br>
        </div> 
        <?php
        //}
        ?>
    
    <div class="utama">
        <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top:10px;font-size:12 0%;">
            <tr>
                <td width="7%" rowspan="3" align="center" valign="top">
                    <img src="<?php echo base_url()."img/logoApotik.png" ?>" width="170" height="45">
                </td>
                   <td width="93%" valign="top">
                    <strong>&nbsp;&nbsp;&nbsp;Faktur Pembelian Obat</strong>
                </td>
            </tr>
            <tr>
                <td valign="top">&nbsp;&nbsp;&nbsp;APOTIK PANGESTU</td>
            </tr>
            <tr>
                <td valign="top">&nbsp;&nbsp;&nbsp;Jl. Siliwangi No.118 Bogor, Telp/Fax (0251) 378 808</td>
            </tr>
        </table>
        <hr>
        <br>
        <br><br>

        <?php

function terbilang($i){
  $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  
  if ($i < 12) return " " . $huruf[$i];
  elseif ($i < 20) return terbilang($i - 10) . " belas";
  elseif ($i < 100) return terbilang($i / 10) . " puluh" . terbilang($i % 10);
  elseif ($i < 200) return " seratus" . terbilang($i - 100);
  elseif ($i < 1000) return terbilang($i / 100) . " ratus" . terbilang($i % 100);
  elseif ($i < 2000) return " seribu" . terbilang($i - 1000);
  elseif ($i < 1000000) return terbilang($i / 1000) . " ribu" . terbilang($i % 1000);
  elseif ($i < 1000000000) return terbilang($i / 1000000) . " juta" . terbilang($i % 1000000);    
}
        foreach ($data1 as $attribut1) {
          $id_transaksi = $attribut1['id_transaksi'];
          $nama_pembeli = $attribut1['nama_pembeli'];
          $kontak = $attribut1['kontak'];
          $total_harga = $attribut1['total_harga'];
          $tanggal_transaksi = $attribut1['tanggal'];
          $jam_transaksi = $attribut1['jam'];
        }
        ?>
        <table style="font-family:'arial';font-size:80%;" cellpadding="5px">
          <tr>
            <td>&nbsp;</td>
            <td>Id Transaksi : <?php echo $id_transaksi ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Tanggal : <?php echo $tanggal_transaksi ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Pukul : <?php echo $jam_transaksi ?></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Nama Pembeli : <?php echo $nama_pembeli ?> </td>
          </tr>
        </table>
        <br>
        <br>
        <table cellspacing="1" align="center" border="1" width="93%" style="border-collapse:collapse;" cellpadding="5px">
           <tr align="center">
            <td> No </td>
            <td width"100"> Nama Produk </td>
            <td width"100"> Harga Satuan</td>
            <td width"150"> Jumlah </td>
            <td width"50"> Sub Total </td>
          </tr>
        <?php
          $no=1;
          foreach ($data2 as $value) {
            $subtotal = $value['harga_produk']*$value['jumlah_produk'];
                    ?>
                    <tr align="center">
                        <td><?php echo $no ?></td>
                        <td><?php echo $value['nama_produk'] ?></td>
                        <td>Rp. <?php echo number_format($value['harga_produk'], 0, ",",".") ?></td>
                        <td><?php echo $value['jumlah_produk'] ?></td>
                        <td>Rp. <?php echo number_format($subtotal, 0, ",",".") ?></td>
                    </tr>
            <?php
                    $no++;
            }
        ?>
        <tr>
          <td colspan="4"> &nbsp;&nbsp;&nbsp;&nbsp;Total Pembayaran</td>
          <td style="text-align:center;">Rp. <?php echo number_format($total_harga, 0, ",","."); ?> </td>
        </tr>
        </table><br>
        <table>

        <tr>
          <td>
             &nbsp;&nbsp;&nbsp;&nbsp; Terbilang Total Harga Pembelian Obat : 
            <strong>
             <?php echo ucwords(terbilang($total_harga)) ?> Rupiah.
           </strong>
          </td>
          <td colspan="4" style="border-left:0px solid trasnparent;">
             <strong>  </strong>
          </td>
        </tr>
      </table>
<p>&nbsp;</p>
<table width="100%" border="0">
  <tr>
    <td width="56%">&nbsp;</td>
    <td width="44%">
     <center>Bogor , <?php echo date( 'd M Y') ?><br />    
   Ttd,<br />
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    (________________)</center>
    </td>
  </tr>
</table>
        <br>
    </div>
</body>
<center><p>&copy; <?php echo date('Y');?> Apotik Pangestu Bogor</p></center>
</html>