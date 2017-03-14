<?php

$hostname	= "localhost";
$username	= "root";
$password	= "";
$database	= "asdosers";

$con = mysqli_connect($hostname, $username, $password, $database);
if ($con->connect_error) {
	echo "Gagal terkoneksi ke database : (" . $con->connect_error . ")";
}


?>