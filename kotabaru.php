<?php
include 'koneksi.php';
$query="SELECT * FROM provinsi";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="simpan2.php" method="POST">
		<table>
			<tr>
				<td>
					<label for="namaprov">Nama Provinsi</label>
				</td>
				<td>
					<select name="namaprov">
						<?php while ( $data = mysqli_fetch_assoc($result)) {?>
							<option value="<?php echo $data['nama_provinsi'];?>"><?php echo $data['nama_provinsi'];?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="kodekota">Kode Kota</label></td>
				<td><input type="text" name="kodekota"></td>
			</tr>
			<tr>
				<td><label for="namakota">Nama Kota</label></td>
				<td><input type="text" name="namakota"></td>
			</tr>
		</table>
		<input type="submit" name="submit">
	</form>
</body>
</html>