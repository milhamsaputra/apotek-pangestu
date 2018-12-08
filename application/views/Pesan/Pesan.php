
   <div id="admin-kotak-utama">
    <div id="admin-konten">
      <?php 
        $akses = $_SESSION['akses'];
      ?>
    <h1>Pesan</h1>
    <hr>  
    <div id="konten5" style="border-right:2px solid #DDD;">
          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Kotak Kritik dan Saran Pengunjung</span>
          </div>
          </div>
          <br>
        <div>
      <div style="padding:5%;background:#CCC;">
      <?php
      $n=1;
      foreach ($data1 as $att) {
    	if($n%2==0){
      ?>
			<div class="balloon left">
        <div class="padding20">
          <?php echo $att['nama']."<br>".$att['pesan']."<br><font class=\"fg-lightBlue\" style=\"font-size:70%;\">".$att['tanggal']." ".$att['waktu']."</font>"; ?>
        </div>
      </div>
      <?php
  		}else{
 	  ?>
			<div class="balloon right">
        <div class="padding20">
          <?php echo $att['nama']."<br>".$att['pesan']."<br><font class=\"fg-lightBlue\" style=\"font-size:70%;\">".$att['tanggal']." ".$att['waktu']."</font>"; ?>
        </div>
      </div>   
  	   <?php
  		}
      $n++;
      }
      ?>
  		</div>
      </div>
  	</div>
  	<div id="konten5">
      <form method="POST" action="<?php echo base_url().$user."/Pesan/chat" ?>">
          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Kirim Pesan</span>
          </div>
          </div>
  	<br>
    	<div class="input-control textarea">
        	<textarea rows="3" name="pesan"></textarea>
    	</div>

				    <button class="bg-hover-orange success padding10" style="width:100%;">Kirim</button>
				    <br><br>

          <div class="accordion">
          <div class="accordion-frame">
             <span class="heading bg-cyan fg-white" href="#">Kotak Pesan User</span>
          </div>
          </div>
        </form>
		<div style="padding:5%;background:#CCC;">
		<?php
      $n=1;
      foreach ($data2 as $att) {
    	if($n%2==1){
      ?>
			<div class="balloon left">
        <div class="padding20">
        <?php echo $att['nama']."<br>".$att['pesan']."<br><font class=\"fg-lightBlue\" style=\"font-size:70%;\">".$att['tanggal']." ".$att['waktu']."</font>"; ?>
        </div>
      </div>
      <?php
  		}else{
 	  ?>
			<div class="balloon right">
        <div class="padding20">
        <?php echo $att['nama']."<br>".$att['pesan']."<br><font class=\"fg-lightBlue\" style=\"font-size:70%;\">".$att['tanggal']." ".$att['waktu']."</font>"; ?>
        </div>
      </div>   
  	   <?php
  		}
      $n++;
      }
      ?>
      </div>
    </div>
    </div>
</div>