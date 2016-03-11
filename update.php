<?php
include "konek.php";
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$nisx = $_POST['nisx'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$hobi = $_POST['hobi'];
$a = mysql_query("update putra SET nama = '$nama', nis = '$nis', agama = '$agama', alamat = '$alamat', hobi = '$hobi' WHERE nis = '$nisx'  ");
if($a==true){ 
	echo"<script>alert('edit berhasil');</script>";
}else{
	echo"<script>alert('edit gagal');</script>";
}
?>
<meta http-equiv="refresh" content="URL:1;lihats.php">