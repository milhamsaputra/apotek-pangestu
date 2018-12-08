<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!DOCTYPE HTML>
<html>
<title>
    Laporan Persediaan Obat Apotik
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
              if($_SESSION['akses']=="Pemilik"){
                $tujuan=$_SESSION['akses'].".html";
              }else{
                 $tujuan=$_SESSION['akses']."/Supplier.html";
              }
            ?>
                 <a href="<?php echo base_url().$tujuan ?>"><button class="btn" id="kembali">Kembali</button></a>
            
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
                    <strong>&nbsp;&nbsp;&nbsp;Laporan Data Supplier</strong>
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
        <br>
        <table cellspacing="1" align="center" border="1" width="93%" style="border-collapse:collapse;" cellpadding="10px">
           <tr align="center">
            <td> No </td>
            <td> Nama Supplier </td>
            <td> Alamat </td>
            <td> Telepon </td>
          </tr>
        <?php
          $no=1;
          foreach ($data1 as $value) {
                    ?>
                    <tr align="center">
                        <td><?php echo $no ?></td>
                        <td><?php echo $value['nama_supplier'] ?></td>
                        <td><?php echo $value['alamat'] ?></td>
                        <td><?php echo $value['telepon'] ?></td>
                    </tr>
            <?php
                    $no++;
            }
        ?>
        
        </table><br>
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