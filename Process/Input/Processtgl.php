<?php
include "../../connect.php";

$date = mysql_real_escape_string($_POST['date']);
$time = mysql_real_escape_string($_POST['time']);
$datetime = $date . ' ' . $time;
$title = mysql_real_escape_string($_POST['title']);
$description = mysql_real_escape_string($_POST['description']);

$simpan = "INSERT INTO jadwalku (date, title, description) VALUES ('$datetime','$title','$description')";
if (mysqli_query($con, $simpan)) {
    echo '<script type="text/javascript">
    alert("Jadwal berhasil Disimpan");
</script>';
echo "<meta http-equiv='refresh' content='0; url=../../JadwalPertemuan.php'>";
}else{
    echo "error: " . $query . "<br/>" . mysqli_error($con);
}