<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
 	</div>
 	<br/>
 	<a href="index.php">Lihat Semua Data</a>
 	<br/>
	<h3>Input data baru</h3>
	<form action="Input-Aksi.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password"></td>
			</tr>
      		<tr>
				<td>level</td>
				<td><input type="text" name="Level"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>