<?php
include "../../connect.php";

$nim		= mysql_real_escape_string($_POST['NimMahasiswa']);
$nama		= mysql_real_escape_string($_POST['NamaMahasiswa']);
$makul		= mysql_real_escape_string($_POST['NamaMakul']);
$kelas		= mysql_real_escape_string($_POST['kelas']);
$tugas		= mysql_real_escape_string($_POST['Tugas']);
$uts		= mysql_real_escape_string($_POST['Uts']);
$uas		= mysql_real_escape_string($_POST['Uas']);
$NT			= ($tugas+$uts+$uas);
$NR			= (30*$tugas+30*$uts+40*$uas)/100;

if ($NR <= 100 && $NR >=81) {
	$grade = "A";
	$ket = "Gilla broo!!";
}elseif ($NR <= 80 && $NR >= 71) {
	$grade = "B+";
	$ket = "Mantap broo!!";
}elseif ($NR <= 70 && $NR >= 61) {
	$grade = "B";
	$ket = "Mayanlah Broo!!";
}elseif ($NR <= 60 && $NR >= 51) {
	$grade = "C+";
	$ket = "cukup lah!!";
}elseif ($NR <= 50 && $NR >= 41) {
	$grade = "C";
	$ket = "Waduhh broo!!";
}elseif ($NR <= 40 && $NR >= 31) {
	$grade = "D";
	$ket = "nggak bagus bro";
}elseif ($NR <= 30 && $NR >=0) {
	$grade = "E";
	$ket = "gak tau mau ngomong apa";
}

$query = "INSERT INTO tb_nilai (NimMahasiswa, NamaMahasiswa, Makul, Kelas, Tugas, Uts, Uas, NA, NR, Grade, ket) VALUES ('$nim','$nama','$makul','$kelas','$tugas','$uts','$uas','$NT','$NR','$grade','$ket')";

if (mysqli_query($con, $query)) {
	session_start();
	$_SESSION['Pesan'] = 'Input Nilai Mahasiswa Berhasil';
	echo "<script language='JavaScript'>
	document.location = '../../NilaiMahasiswa.php';
	</script>";
}else{
	echo "error: " . $query . "<br/>" . mysqli_error($con);
}