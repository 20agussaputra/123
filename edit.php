<?php include "konek.php"; ?>
<html>
	<head>
		<title>Belajar PHP</title>
	</head>
<body>
	<?php
		$nis =$_GET['nis'];
		$a = mysql_query("select * from putra WHERE nis = '$nis'");
		$b = mysql_fetch_array($a);
	?>
<div id="header">
	<h1>Form Input Data</h1>
</div>
	<link rel="stylesheet"  href="css.css"></link>
	<form action="update.php" method="post">
<div id="body">
	<input type="hidden" name="nisx" value="<?php echo $b['nis']; ?>"/>
<table border="10" cellpadding="15" cellspacing="0">
    <tbody>
        <tr>
            <td>nama
            <td><input type="text" name="nama" maxlength="50" required value="<?php echo $b['nama'];?>" /></td>
        </tr>
		<tr>
            <td>nis
            <td><input type="text" name="nis" maxlength="4" required value="<?php echo $b['nis'];?>" /></td>
        </tr>
		<tr>
            <td>agama
            <td><input type="text" name="agama" maxlength="10" required="required" value="<?php echo $b['agama'];?>"/></td>
        </tr>
        <tr>
            <td>alamat
            <td><input type="text" name="alamat" maxlength="20" required="required" value="<?php echo $b['alamat'];?>"/></td>
        </tr>
        <tr>
            <td>hobi
            <td><input type="text" name="hobi" maxlength="100" required="required" value="<?php echo $b['hobi'];?>"/></td>
        </tr>
        <tr>
            <td align="right" colspan="3">
			<input type="submit" value="Simpan" />
			<input type="reset"  value="Hapus" />
			</td>
        </tr>
    </tbody>
</table>
</form>
</div>
	<div id="sidebar">
		<a href="lihats.php">Lihat Data</a>
	</div>
	<div id="footer">
		<p> SMK Negeri 2</p>
	</div>
</body>
</html>