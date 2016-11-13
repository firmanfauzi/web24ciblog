<!DOCTYPE html>
<html>
<head>
	<title>USER TAMBAH</title>
</head>
<body>

<h3 align="center">Tambah Data Baru</h3>

<form action="<?php echo base_url().'user/tambah_aksi';?>" method="post">
	<table style="margin:20px auto;" border="1">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Tambah"></td>
		</tr>
	</table>
</form>

</body>
</html>