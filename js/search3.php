<?php
$koneksi =  mysqli_connect("localhost","root","","db_pangestu");
 
 $judul=$_POST["judul"]; 
 $sqy3=$_POST["sqy3"]; 
  
 $result=mysqli_query($koneksi,"SELECT * FROM tb_obat where nama_produk like '%$judul%' and kode_obat not in (".$sqy3.")");
 $found=mysqli_num_rows($result);
 
 if($found>0){
       echo "found";
 }else{
       echo "notfound";
 }
?>