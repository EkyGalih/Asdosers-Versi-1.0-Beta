<?php
include "../../connect.php";
$Pertemuan	= mysql_real_escape_string($_POST['JmlPertemuan']);
$sks		= mysql_real_escape_string($_POST['JmlSks']);
$Tanggal	= mysql_real_escape_string($_POST['Tanggal']);
$penghasilan= 12500;
$hasil = $sks*$penghasilan;

$query = "INSERT INTO tb_hasil (JmlPertemuan, JmlSks, Tanggal, Penghasilan) VALUES ('$Pertemuan','$sks','$Tanggal','$hasil')";

if (mysqli_query($con, $query)) {
	session_start();
	$_SESSION['Pesan'] = 'Kalkulasi Penghasilan Berhasil';
	echo "<script language='JavaScript'>
	document.location = '../../Penghasilan.php';
	</script>";
}else{
	echo "error: " . $query . "<br/>" . mysqli_error($con);
}