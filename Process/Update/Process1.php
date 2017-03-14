<?php
include "../../connect.php";

$id 		= $_POST['id_kelas'];
$makul		= mysql_real_escape_string($_POST['makul']);
$kelas		= mysql_real_escape_string($_POST['kelas']);
$JmlSks		= mysql_real_escape_string($_POST['JmlSks']);

$Update = "UPDATE tb_kelas SET NamaMakul='".$makul."', Kelas='".$kelas."', BobotSks='".$JmlSks."' WHERE id_kelas=".$id;

if (mysqli_query($con, $Update)) {
	session_start();
	$_SESSION['Pesan'] = 'Ubah Kelas Berhasil';
	echo "<script language='JavaScript'>
	document.location = '../../Kelas.php';
	</script>";
}else{
	echo "Error : ". $Update . "<br/>" . mysqli_error($con);
}