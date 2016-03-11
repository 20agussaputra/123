<?php include "konek.php"; ?>
<html>
	<head>
		<title>Belajar PHP</title>
	</head>

<body>
	<div id="header">
		<h1>Form Input Data</h1>
	</div>
<link rel="stylesheet"  href="css.css"></link>
<form action="simpan.php" method="post">
	<div id="body">
<table border="10" cellpadding="15" cellspacing="0">
	<tr>
		<th>no.</th>
		<th>nama</th>
		<th>nis</th>
		<th>agama</th>
		<th>alamat</th>
		<th>hobi</th>
		<th colspan="2">aksi</th>
	</tr>
		<?php
		$a=mysql_query("select * from putra");
		$no=1;
		while($b=mysql_fetch_array ($a)){
			echo "<tr>";
			echo "<td>$no.</td>";
			echo "<td width ='50px' align='center'>$b[nama]</td>";
			echo "<td width ='50px' align='center'>$b[nis]</td>";
			echo "<td width ='50px' align='center'>$b[agama]</td>";
			echo "<td width ='50px' align='center'>$b[alamat]</td>";
			echo "<td width ='50px' align='center'>$b[hobi]</td>";
			echo "<td width ='50px' align='center'><a href='edit.php?nis=$b[nis]'>Edit</a></td>";
			echo "<td width ='50px' align='center'><a href='#' onclick=\"javascript:if(confirm('Apakah dihapus ta?')==true){window.location.href='hapus.php?nis=$b[nis]'; }\">Hapus</a></td>";
			echo "</tr>";
			$no++;
			}
		?>
    </tbody>
</table>
</form>
	</div>
	<div id="sidebar">
		<a href="as.php">masukkan data</a>
	</div>
	<div id="footer">
	<div id="h4">
		<h4><marquee>Selamat Datang</h4></marquee>
	</div>
</body>
</html>