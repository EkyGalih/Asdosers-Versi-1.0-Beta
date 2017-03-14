<?php
include "../../connect.php";

$makul		= mysql_real_escape_string($_POST['makul']);
$kelas		= mysql_real_escape_string($_POST['kelas']);
$sks		= mysql_real_escape_string($_POST['JmlSks']);

$query = "INSERT INTO tb_kelas (NamaMakul, kelas, BobotSks) VALUES ('$makul','$kelas','$sks')";

if (mysqli_query($con, $query)) {
session_start();
	$_SESSION['Pesan'] = 'Tambah Kelas Berhasil';
	echo "<script language='JavaScript'>
	window.location = '../../Kelas.php';
	</script>";
}else{
	echo "error: " . $query . "<br/>" . mysqli_error($con);
}