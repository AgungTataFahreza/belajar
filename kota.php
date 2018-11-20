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
	<!-- <select>
	  <option value="volvo">Volvo</option>
	  <option value="saab">Saab</option>
	  <option value="mercedes">Mercedes</option>
	  <option value="audi">Audi</option>
	</select> -->
	<form action="simpan2.php" method="POST">
		<table>
		<tr>
			<td><label for="kodeprov">Kode Provinsi</label></td>
			<td>
				<select name="kodeprov">
					<?php while($data=mysqli_fetch_assoc($result)){?>
						<option value="<?php echo $data['kode_prov']?>"><?php echo $data['kode_prov']?></option>
					<?php}?>
				</select>
			</td>
		</tr>
		<tr>
			<td><label for="kodekota">Kode Kota</label></td>
			<td><input type="text" name="kodekota"></td>			
		</tr>
		<tr>
			<td><label for="namakota">Nama Kota</label></td>
			<td><input type="text" name="namakota"></td><br>
		</tr>
		</table>
		<input type="submit" name="submit">
	</form>
</body>
</html>