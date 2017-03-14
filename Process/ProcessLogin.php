<?php
require '../connect.php';
//require 'fungsi.php';
$nim = ($_POST['nim']);
$password = ($_POST['password']);
$ency = md5($password);
// var_dump($ency);

$cek_admin = $con->query("SELECT Nim FROM users WHERE Nim = '$nim' AND Password = '$ency'");

if (($cek_admin->num_rows == 1)) {
    session_start();
    $_SESSION['user_login'] = $nim;
    $_SESSION['PesanGagal'] = 'Login Berhasil';
    header("location:../home.php");
} else {
	session_start();
	$_SESSION['Pesan'] = 'Username atau Password Salah';
    ?>
    <script>
        document.location = "../"
    </script>
    <?php
}
?>