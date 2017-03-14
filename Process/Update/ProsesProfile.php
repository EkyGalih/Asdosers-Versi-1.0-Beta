<?php
include "../../connect.php";

$id 		= mysql_real_escape_string($_POST['id']);
$nama		= mysql_real_escape_string($_POST['nama']);
// $nim		= mysql_real_escape_string($_POST['nim']);

$Update = "UPDATE users SET NamaUser='".$nama."' WHERE idUser='".$id."'";

if(mysqli_query($con, $Update)) {
	session_start();
	$_SESSION['Pesan'] = 'Update Profile Success';
	?>
	<script language="JavaScript">
		document.location = '../../UserProfile.php'
	</script>
	<?php
}else{
	echo "Error: " . $Update . "<br/>" . mysqli_error($con);
}