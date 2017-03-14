<?php
include("../connect.php");
$Makul = $_POST['makul'];
$kelas = $_POST['kelas'];
$sql = "SELECT * FROM tb_nilai WHERE Makul='$Makul' AND Kelas='$kelas'";
$recordset = $con->query($sql);
if ($recordset == TRUE){
	echo '<h4>Mata Kuliah : <i>'.$Makul.'</i> <br/>Kelas/Kelompok : <i>'.$kelas.'</i></h4>';
	echo '<table border="1">';
	echo '<tr>';
	echo '<th>NO</th>';
	echo '<th>NIM Mahasiswa</th>';
	echo '<th>Nama Mahasiswa</th>';
	echo '<th>Tugas</th>';
	echo '<th>Uts</th>';
	echo '<th>Uas</th>';
	echo '<th>NT</th>';
	echo '<th>NR</th>';
	echo '<th>Grade</th>';
	echo '</tr>';
	$no=1;
	while ($row = mysqli_fetch_array($recordset)){
		echo '<tr>';
		echo '<td align=center>'.$no.'</td>';
		echo '<td align=left>'.$row['NimMahasiswa'].'</td>';
		echo '<td align=left>'.$row['NamaMahasiswa'].'</td>';
		echo '<td align=center>'.$row['Tugas'].'</td>';				
		echo '<td align=center>'.$row['Uts'].'</td>';				
		echo '<td align=center>'.$row['Uas'].'</td>';				
		echo '<td align=center>'.$row['NA'].'</td>';				
		echo '<td align=center>'.$row['NR'].'</td>';				
		echo '<td align=center>'.$row['Grade'].'</td>';				
		echo '</tr>';
		$no++;
	}
	echo '</table>';
}else{
	trigger_error("Syntax mysql salah: " . $sql . "Error: " . $con->error, E_USER_ERROR);
}
?>