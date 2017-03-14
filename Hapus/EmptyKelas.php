<?php
require '../connect.php';
$con->query("TRUNCATE table tb_kelas");
?>
<script>
    document.location = '../Kelas.php'
</script>