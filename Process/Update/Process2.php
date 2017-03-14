<?php
include "../../connect.php";

$id 		= $_POST['id'];
$Tugas		= mysql_real_escape_string($_POST['Tugas']);
$Uts		= mysql_real_escape_string($_POST['Uts']);
$Uas		= mysql_real_escape_string($_POST['Uas']);
$NT			= ($Tugas+$Uts+$Uas);
$NR			= (30*$Tugas+30*$Uts+40*$Uas)/100;

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

$Update = "UPDATE tb_nilai SET Tugas='".$Tugas."', Uts='".$Uts."', Uas='".$Uas."', NA='".$NT."', NR='".$NR."', Grade='".$grade."', ket='".$ket."' WHERE id=".$id;

if (mysqli_query($con, $Update)) {
	session_start();
	$_SESSION['Pesan'] = 'Update Nilai Berhasil';
	echo "<script language='JavaScript'>
	document.location = '../../NilaiMahasiswa.php';
	</script>";
}else{
	echo "Error : ". $Update . "<br/>" . mysqli_error($con);
}