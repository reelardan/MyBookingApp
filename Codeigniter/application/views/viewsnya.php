<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="http://localhost/MyBookingApp/Codeigniter/index.php/User/add">Tambah</a>
	<table border="1">
		<tr><!--td ke ssamping tr kebawah-->
			<td>id</td>
			<td>username</td>
			<td>password</td>
			<td>fullname</td>
			<td>levels</td>
			<td>Masukkan Id yg Akan Dihapus<form action="http://localhost/MyBookingApp/Codeigniter/index.php/User/delete2" method="post">
						<input type="text" name="id">
						<input type="submit" name="submit" value="kirim">
					</form></td>
			<td>Masukkan Id yg Akan Diupdate<form action="http://localhost/MyBookingApp/Codeigniter/index.php/User/update2" method="post">
						<input type="text" name="id">
						<input type="submit" name="submit" value="kirim">
					</form></td>
		</tr>

		<?php foreach ($isi->result() as $key ): ?>

				<tr>

					<td><?php echo $key->user_id ?></td>
					<td><?php echo $key->username ?></td>
					<td><?php echo $key->password ?></td>
					<td><?php echo $key->fullname ?></td>
					<td><?php echo $key->level ?></td>
					<td><a href="http://localhost/MyBookingApp/Codeigniter/index.php/User/delete/<?php echo $key->user_id ?>">Delete</td>
					<td><a href="http://localhost/MyBookingApp/Codeigniter/index.php/User/update/<?php echo $key->user_id ?>">Update</td>
				</tr>
		<?php endforeach ?>

	</table>
</body>
</html>