<?php
require '../connect.php';
$con->query("TRUNCATE table tb_nilai");
?>
<script>
    document.location = '../NilaiMahasiswa.php'
</script>