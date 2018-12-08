<!Doctype HTML>
<html>
<head>
<title>Login User</title>
</head>
<link rel="stylesheet" href="<?php echo base_url()."css/main.css"?>">
<link rel="icon" href="<?php echo base_url()."../img/logo1.png" ?>">

<style type="text/css">
a{

}
</style>
<body class="metro" bgcolor="#555">
    <div id="boxlogin">
   
    <div id="boxlogin2-border">
        <div id="boxlogin2">
        <form method="post" action="<?php echo base_url()."login/set_login"?>">
            <br>
            <font style="font-size:300%;padding:5%;">LOGIN</font>
            <br>
            <br>
            <div class="<?php echo $this->session->flashdata('Color')." ".$this->session->flashdata('Pad') ?> fg-white alert-flashdata text-center"><?php echo $this->session->flashdata('Pesan') ?></div>
            <br>
            <table width="100%" cellpadding="8%">
            	<tr>
            		<td width="80px">Username</td>
            		<td><input type="text" name="user" placeholder="Username" value="<?php echo $this->session->flashdata('usern') ?>" class="txtlogin"></td>
            	</tr>
            	<tr>
            		<td width="80px">Password</td>
            		<td ><input type="password" name="pass" placeholder="Password" autofocus class="txtlogin"></td>
            	</tr>
            </table>	
            <br><br>
            <input type="submit" class="primary btnlogin" name="login" value="Log In">
            <br>
            <br>
            <hr style="color:#FFF;">
            2018 &copy; Copyright <a href="<?php echo base_url(); ?>">170102007</a>
        </form>
        </div>
    </div>

    </div>
</body>
</html>