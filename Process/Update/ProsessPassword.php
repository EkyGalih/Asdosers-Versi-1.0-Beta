<?php
include "../../connect.php";

$id 		= mysql_real_escape_string($_POST['id']);
$password	= mysql_real_escape_string($_POST['password']);
$hash		= md5($password);

$query = "UPDATE users SET Password='".$hash."'";

if(mysqli_query($con, $query)) {
	session_start();
	$_SESSION['Pesan'] = 'Update Password Success';
	?>
	<script>
		document.location = "../../UserProfile.php"
	</script>
	<?php
}else{
	echo "Error: " . $query . "<br/>" . mysqli_error($con);
}