<?php
include "../connect.php";

$nama		= mysql_real_escape_string($_POST['Nama']);
$nim		= mysql_real_escape_string($_POST['nim']);
$password	= mysql_real_escape_string($_POST['password']);
$hash		= md5($password);
$images		= mysql_real_escape_string($_POST['images']);

$query = "INSERT INTO users (NamaUser, Nim, Password, Images) VALUES ('$nama','$nim','$hash','$images')";

if(mysqli_query($con, $query)) {
	?>
	<script>
	alert("Pendaftaran berhasil!!")
		document.location = "../index.php"
	</script>
	<?php
}else{
	echo "Error: " . $query . "<br/>" . mysqli_error($con);
}
?>