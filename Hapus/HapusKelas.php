<?php
require '../connect.php';
$con->query("DELETE FROM tb_kelas where id_kelas=$_POST[id_kelas]");
?>
<script>
    document.location = '../Kelas.php'
</script>