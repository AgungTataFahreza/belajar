<?php
include 'koneksi.php';
$namaprov=$_POST['namaprov'];
$kodekota=$_POST['kodekota'];
$namakota=$_POST['namakota'];;
$query="INSERT INTO kota VALUES('$kodekota','$namaprov','$namakota')";
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