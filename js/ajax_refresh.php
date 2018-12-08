<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=db_pangestu', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM tb_obat WHERE nama_produk LIKE (:keyword) and jumlah_stok not in ('0') ORDER BY kode_obat ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nama_produk']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['nama_produk']).'\');$(\'#attjumlah_a\').val(\''.str_replace("'", "\'", $rs['jumlah_stok']).'\')">'.$country_name.'</li>';
}
?>