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
    <tbody>
        <tr>
            <td>nama
            <td><input type="text" name="nama" maxlength="50" required="required" ></td>
        </tr>
		<tr>
            <td>nis
            <td><input type="text" name="nis" maxlength="4" required="required" ></td>
        </tr>
		<tr>
            <td>agama
            <td><input type="text" name="agama" maxlength="10" required="required" ></td>
        </tr>
        <tr>
            <td>alamat
            <td><input type="text" name="alamat" maxlength="20" required="required" ></td>
        </tr>
        <tr>
            <td>hobi
            <td><input type="text" name="hobi" maxlength="100" required="required" ></td>
        </tr>
		<center>Teks di tengah</center>
		<ol>
<li> Basket </li>
<li> Sepak Bola </li>
<li> Bulu Tangkis </li>
<li> Volly </li>
</ol>
<p>Menu Hari ini</p>
<ul>
<li> Nasi Putih </li>
<li> Tahu </li>
<li> Tempe </li>
<li> Ayam Bakar </li>
</ul>
<h2><p>Create, read, update and delete
From Wikipedia, the free encyclopedia
"CRUD" redirects here. For other uses, see Crud.<br></h2>

<p>In computer programming, create, read, update and delete[1] (as an acronym CRUD or possibly a backronym) (Sometimes called SCRUD with an "S" for Search) are the four basic functions of persistent storage.[2] Sometimes CRUD is expanded with the words retrieve instead of read, modify instead of update, or destroy instead of delete. It is also sometimes used to describe user interface conventions that facilitate viewing, searching, and changing information; often using computer-based forms and reports. The term was likely first popularized by James Martin in his 1983 book Managing the Data-base Environment.[1][3] The acronym may be extended to CRUDL to cover listing of large data sets which bring additional complexity such as pagination when the data sets are too large to hold easily in memory.

<p>Another variation of CRUD is BREAD, an acronym for "Browse, Read, Edit, Add, Delete".[citation needed] This extension is mostly used in context with data protection concepts, when it is legally not allowed to delete data directly. Locking the data prevents the access for users without destroying still needed data. Yet another variation, used before CRUD became more common, is MADS, an acronym for "Modify, All, Delete, Show."[citation needed]

<p>Contents
<ol>
    <li> Database applications
	<li> User interface
	<li> See also
	<li> References
	</li>
</ol>
<h5>Database applications</h5>

<p>The acronym CRUD refers to all of the major functions that are implemented in relational database applications. Each letter in the acronym can map to a standard SQL statement, HTTP method (this is typically used to build RESTful APIs[4]) or DDS operation:
Operation 	SQL 	HTTP 	DDS
Create 	INSERT 	PUT / POST 	write
Read (Retrieve) 	SELECT 	GET 	read / take
Update (Modify) 	UPDATE 	POST / PUT / PATCH 	write
Delete (Destroy) 	DELETE 	DELETE 	dispose

<p>The comparison of the database oriented CRUD operations to HTTP methods has some flaws. Strictly speaking, both PUT and POST can create resources; the key difference is that POST leaves it for the server to decide at what URI to make the new resource available, whilst PUT dictates what URI to use; URIs are of course a concept that doesn't really line up with CRUD. The significant point about PUT is that it will replace whatever resource the URI was previously referring to with a brand new version, hence the PUT method being listed for Update as well. PUT is a 'replace' operation, which one could argue is not 'update'.

<p>		Although a relational database provides a common persistence layer in software applications, numerous other persistence layers exist. CRUD functionality can be implemented with an object database, an XML database, flat text files, custom file formats, tape, or card, for example.

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