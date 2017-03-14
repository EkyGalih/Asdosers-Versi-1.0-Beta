<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Event Calender</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <?php include "css.php"; ?>
</head>
<body>
    <div id="wrapper">    
        <?php include "nav.php"; ?>
        <?php include "navbar.php"; ?>
        <div id="page-wrapper">
            <div class="row">
                <h1 class="page-header">Kalkulasi Pendapatan</h1>
            </div>
            <!-- Welcome -->
            <div class="col-lg-12">
                <div class="alert alert-info">
                    <i class="fa fa-folder-open"></i>&nbsp;olla ! Anda bisa mngkalkulasi jumlah penghasilan yang anda dapatkan <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><i class="fa fa-money fa-fw"></i> Kalkulasi Penghasilan</h4>
                        </div>
                        <div class="panel-body">
                         <form method="POST" action="Process/Input/Process3.php" onsubmit="return validateForm()">
                             <?php
                             if ($_SESSION['Pesan'] ) {
                                ?>
                                <div class="alert alert-success" id="Pesan">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <?php echo $_SESSION['Pesan'] ?>
                                </div>
                                <?php
                            }
                            $_SESSION['Pesan'] = "";
                            ?>
                            <div class="col-sm-3">
                                <label>Jumlah Pertemuan /Hari </label>
                                <input type="number" name="JmlPertemuan" class="form-control" style="width: 120px;" placeholder="/Hari" required>
                            </div>
                            <div class="col-sm-2">
                                <label>Total Sks (/Hari)</label>
                                <input type="number" name="JmlSks" class="form-control" style="width: 80px;" placeholder="sks" required>
                            </div>
                            <div class="col-sm-3">
                                <label>Tanggal Pertemuan</label>
                                <input type="date" name="Tanggal" class="form-control" style="width: 180px;" required><br/>
                            </div>
                            <div class="col-sm-4">
                                <br/>
                                <button data-toggle="tooltip" data-placement="top" title="Hitung" type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus fa-fw"></i> Hitung
                                </button>
                            </div>
                            <div class="col-sm-7">
                                <?php
                                include "connect.php";
                                $money = "SELECT SUM(penghasilan) AS hasil FROM tb_hasil";
                                $sks = "SELECT SUM(JmlSks) AS sks FROM tb_hasil";
                                $rows = $con->query($money);
                                $rows2 = $con->query($sks);
                                $r = $rows->fetch_array();
                                $r2 = $rows2->fetch_array();
                                ?>
                                <p>Jumlah Keuangan Anda = <input type="text" name="hasil" value="RP. <?php echo $r['hasil'] ?>,-" style="width: 95px; border-radius: 4px;" readonly><font size="1px" color="red"><i>* Belum dikurangi pajak penghasilan</i></font></p>
                                    <p>Total Sks Anda adalah = <input type="text" name="sks" value=" <?php echo $r2['sks'] ?> SKS" style="width: 60px; border-radius: 4px;" readonly></p>
                                </div>
                                <div class="col-sm-4">
                                    <br/><br/>
                                    <a data-toggle="tooltip" data-placement="top" title="Clear (Berbahaya)" href="Hapus/EmptyPenghasilan.php" onclick="return confirm('Tindakan ini menyebabkan semua data pada tabel akan terhapus!\n\Anda Yakin?');" class="btn btn-danger btn-sm">
                                        <i class="fa fa-times fa-fw"></i> Bersihkan Data
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "CP.php"; ?>
        </div> 
    </div>
</div>
<?php include "js.php"; ?>
<script>
    $(document).ready(function(){
        setTimeout(function(){
            $("#Pesan").fadeIn('slow');
        }, 500);
    });
    setTimeout(function(){
        $("#Pesan").fadeOut('slow');
    }, 2500);
</script>
</body>    
<script src="assets/calendar/js/jquery.eventCalendar.js" type="text/javascript"></script>
</html>