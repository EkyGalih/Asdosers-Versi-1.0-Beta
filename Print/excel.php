<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file hasil ekspor
header("Content-Disposition: attachment; filename=Tabel Nilai.xls");
 
// Tambahkan table
include 'export_nilai.php';
?>