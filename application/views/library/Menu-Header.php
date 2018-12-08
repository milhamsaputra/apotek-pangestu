<!DOCTYPE HTML>
<html lang="en">
<head>
<title>SIM APOTIK | <?php echo $_SESSION['akses'];?></title>
<script src="<?php echo base_url() ?>js/metro-dropdown.js"></script>
<link rel="icon" href="<?php echo base_url()."img/logo1.png" ?>">
</head>
<body style="padding:0;margin:0;" class="metro">
	<div class="admin-kotak-menu fixed bg-lightgreen">
		<div class="padding10">
		<br>
		<br>
			<img src="<?php echo base_url()."img/logoApotik.png" ?>" style="width:40%;" class="padding5"><br>
		<font class="subheader-secondary fg-white">Pangestu Bogor</font><br>
		<font class="item-title fg-white text-right" style="line-height:2em;">Apotik</font>
		<br>
		</div>
    <?php
    $include = "Nav/".$user.".php";
    include $include;
    ?>
    </div>
<br>    