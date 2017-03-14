<?php
require '../connect.php';
$con->query("DELETE FROM tb_nilai where id=$_POST[id]");
?>
<script>
    document.location = '../NilaiMahasiswa.php'
</script>