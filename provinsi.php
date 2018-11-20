<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<select>
	  <option value="volvo">Volvo</option>
	  <option value="saab">Saab</option>
	  <option value="mercedes">Mercedes</option>
	  <option value="audi">Audi</option>
	</select>
	<form action="simpan1.php" method="POST">
		<table>
		<tr>
			<td><label for="kodeprov">Kode Provinsi</label></td>
			<td><input type="text" name="kodeprov"><br></td>
		</tr>
		<tr>
			<td><label for="namaprov">Nama Provinsi</label></td>
			<td><input type="text" name="namaprov"></td><br>
		</tr>
		</table>
		<input type="submit" name="submit">
	</form>
</body>
</html>