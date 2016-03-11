<?php
include "konek.php";
$nis = $_GET['nis'];

$a = mysql_query("DELETE FROM putra WHERE nis = '$nis' ");
if($a == true){
	echo"<script>alert('hapus berhasil');</script>";
}else{
	echo"<script>alert('hapus berhasil');</script>";
}
?>
<meta http-equiv="refresh" content="1;url=lihats.php"/>