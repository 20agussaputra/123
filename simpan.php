<?php
include "konek.php";
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$hobi = $_POST['hobi'];
$a = mysql_query("insert into putra values('$nama', '$nis', '$agama', '$alamat', '$hobi')");
if($a){
	echo"<script>alert('tambah berhasil');</script>";
}else{
	echo"<script>alert('tambah gagal');</script>";
}
?>
<meta http-equiv="refresh" content="URL:1;as.php">