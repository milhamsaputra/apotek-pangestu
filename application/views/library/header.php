<!DOCTYPE Html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apotik Pangestu Bogor</title>
</head>
<link rel="icon" href="<?php echo base_url()."img/logo.jpg" ?>">
<?php
include "requirements.php";
?>
<body class="metro">
          <div class="navigation-bar fixed-top white shadow" style="border-bottom:1px solid #09f;">
              <div id="kotakUtama" style="background:transparent;">
                <div class="navigation-bar-content">
                      <a href="<?php echo base_url()."Home" ?>" class="element">
                          <img src="<?php echo base_url()."img/logoApotik.png"?>" width="100px">
                        </a>
                    <span class="element-divider"></span>

                    <a class="pull-menu" href="#"></a>
                    <ul class="element-menu drop-up">
   <li><a href='<?php echo base_url()."Home" ?>'>Home</a></li>
   <li><a href='<?php echo base_url()."Produk" ?>'>Daftar Stok Obat</a></li>
   <li><a href='<?php echo base_url()."RekObat" ?>'>Rekomendasi Obat</a></li>
   <li><a href='<?php echo base_url()."Pesan" ?>'>Kotak Kritik & Saran</a></li>
                    </ul>

    <?php 
    if(!empty($_SESSION['nama_user'])){
    ?>
    <div class="element place-right">
    <a class="dropdown-toggle" href="#">
    <span class="icon-cog"></span>
    </a>
    <ul class="dropdown-menu place-right" data-role="dropdown">
    <li><a href="<?php echo base_url().$_SESSION['akses'] ?>">Dashboard</a></li>
    <li><a href="<?php echo base_url().$_SESSION['akses']."/Password" ?>">Ubah Password</a></li>
    <li><a href="<?php echo base_url()."login/set_logout" ?>">Log out</a></li>
    </ul>
    </div>
    <button class="element place-right">
    170102007
    <!--<img src="images/211858_100001930891748_287895609_q.jpg"/>-->
    </button>
    <?php }else{
    ?>
    <a href="#Login" id="createFlatWindow">
      <button class="element warning place-right">
      Login
      </button>
    </a>
    <?php } ?>
                </div>
            </div>
          </div>
    <div id="kotakheader">
                 <table cellpadding="5%" style="background:transparent;height:95%;margin-left:5%;padding-top:5%">
                       
                       <tr valign="bottom">
                           <td>

                              <h1 style="color:#fff;font-size:480%;" class="text-shadow">Pangestu Bogor </h1>
                              <h4 style="color:#fff;line-height:250%;" class="text-shadow ">&nbsp; Sistem Manajemen Informasi Apotek</h4>     

                           </td>
                       </tr>
                   </table>
</div>
<div id="kotakUtama">
<div class="grid">