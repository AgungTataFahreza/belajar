<?php
include 'koneksi.php';
$kodeprov=$_POST['kodeprov'];
$namaprov=$_POST['namaprov'];
$query="INSERT INTO provinsi VALUES('$kodeprov','$namaprov')";
$result=mysqli_query($conn,$query);
if (mysqli_affected_rows($conn)>0) 
{
	echo "
	<script>
	alert('Data Berhasil Ditambahkan');
	document.location.href='index.php';
	</script>
	";	
}
?>