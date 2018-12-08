<div id="admin-container-header1">
   <div id="admin-Header1">
    <a href="<?php echo base_url()."login/set_logout" ?>" style="float:right"><button class="warning bg-hover-darkOrange" style="height:100%;"><i class="icon-exit on-left"></i>Log Out</button></a>
    <div style="padding:1%;padding-left:2%;">
      <font class="fg-white" style="">
       <b> Selamat Datang Kembali , <?php echo $_SESSION['username'] ?></b><br>
        <small>
<?php
    $tanggal= mktime(date("m"),date("d"),date("Y"));
    echo "Hari Ini : ".date("D , d-M-Y", $tanggal)." ";
    $jam=date("H:i:s");
    //echo "| Pukul : <b>". $jam." "."</b>";
    $a = date ("H");
      if (($a>=5) && ($a<=10)){
        echo ", Selamat Pagi !!";
      }else if(($a>10) && ($a<=15)){
        echo ", Selamat Siang !!";
      }else if (($a>15) && ($a<=18)){
        echo ", Selamat Sore !!";
      }else{ 
        echo ",  Selamat Malam ";}
?>
  </small>
       </font>
    </div>
   </div>
   <div class="admin-header2">
 								<nav class="horizontal-menu compact">
                                    <ul>
                                        <li><a href="<?php echo base_url()."Home" ?>"><i class="icon-home fg-hover-blue"></i></a></li>
                                        <li><a href="<?php echo base_url().$_SESSION['akses'] ?>" class="fg-hover-blue">Dashboard</a></li>
                                        <li><a href="<?php echo base_url().$_SESSION['akses']."/Username" ?>" class="fg-hover-blue">Ubah Username</a></li>
                                        <li><a href="<?php echo base_url().$_SESSION['akses']."/Password" ?>" class="fg-hover-blue">Ubah Password</a></li>
                                    </ul>
                                </nav>
   </div>
</div>