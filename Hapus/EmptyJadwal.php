<?php
require '../connect.php';
$con->query("TRUNCATE table jadwalku");
?>
<script>
    document.location = '../JadwalPertemuan.php'
</script>