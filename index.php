<?php
	include 'koneksi.php';
	$query="SELECT * FROM provinsi";
	$query1="SELECT * FROM kota";
	$result=mysqli_query($conn,$query);
	$result1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="provinsi.php">tambah provinsi</a><br>
	<a href="kotabaru.php">tambah kota</a>
	<table border="1" cellspacing="0">
		<tr>
			<td>Kode Provinsi</td>
			<td>Nama Provinsi</td>
		</tr>
		<?php while($data=mysqli_fetch_assoc($result)){?>
		<tr>
			<td><?php echo $data['kode_prov']?></td>
			<td><?php echo $data['nama_provinsi']?></td>
		</tr>
		<?php } ?>
	</table>
	<br><br>
	<table border="1" cellspacing="0">
		<tr>
			<td>Nama Provinsi</td>
			<td>Kode Kota</td>
			<td>Nama Kota</td>
		</tr>
		<?php while($data1=mysqli_fetch_assoc($result1)) { ?>
		<tr>
			<td><?php echo $data1['nama_provinsi']; ?></td>
			<td><?php echo $data1['kode_kota']; ?></td>
			<td><?php echo $data1['nama_kota']; ?></td>
		</tr>
		<?php }; ?>
	</table>
</body>
</html>