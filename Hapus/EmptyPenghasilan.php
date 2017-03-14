<?php
require '../connect.php';
$con->query("TRUNCATE table tb_hasil");
?>
<script>
    document.location = '../Penghasilan.php'
</script>