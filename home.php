<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asdosers V.1.0 Beta</title>
    <!-- Core CSS - Include with every page -->
    <?php include "css.php"; ?>
</head>
<body onload="myFunction()" style="margin: 0;">
    <p>Loading..</p>
    <div id="loader"></div>
    <div style="display: none;" id="myDiv" class="animate-bottom">
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            <?php include "navbar.php"; ?>
            <!-- end navbar top -->

            <!-- navbar side -->
            <?php include "nav.php"; ?>
            <!-- end navbar side -->

            <!--  page-wrapper -->
            <div id="page-wrapper">

                <div class="row">
                    <!-- Page Header -->
                    <div class="col-lg-12">
                        <h1 class="page-header" align="left">Beranda</h1>
                    </div>
                    <!--End Page Header -->
                </div>

                <div class="row">
                    <!-- Welcome -->
                    <div class="col-lg-12">
                        <div class="alert alert-info" align="left">
                        <i class="fa fa-folder-open"></i>&nbsp;olla ! Selamat datang <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b>
                        </div>
                    </div>
                    <!--end  Welcome -->
                </div>

                <?php 
            // <!-- Hitung Jumlah kelas -->
                include "connect.php";
                $kelas = "SELECT kelas from tb_kelas";
                $recordset = mysqli_query($con, $kelas);
                $nrec = mysqli_num_rows($recordset);
            // HITUNG JUMLAH PENGHASILAN
                $money = "SELECT SUM(penghasilan) AS hasil FROM tb_hasil";
                $rows = $con->query($money);
                $r = $rows->fetch_array();
            // HITUNG JUMLAH SKS
                $sks = "SELECT SUM(BobotSks) AS sks FROM tb_kelas";
                $rows2 = $con->query($sks);
                $r2 = $rows2->fetch_array();
                ?>
                <div class="row">
                    <!--quick info section -->
                    <div class="col-lg-3">
                        <div class="alert alert-danger text-center">
                            <i class="fa fa-calendar fa-3x"></i>&nbsp; <a href="Jadwal.php"> Jadwal Ngasods</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="alert alert-success text-center">
                            <i class="fa  fa-group fa-3x"></i>&nbsp;<a href="Kelas.php"> <u><b><?php echo $r2['sks'] ?></b></u> Sks &amp; <u><b><?php echo $nrec ?></b></u> kelas</a> 
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="alert alert-info text-center">

                            <i class="fa fa-money fa-3x"></i>&nbsp;<a href="Penghasilan.php"> <u><b>RP. <?php echo $r['hasil'] ?></b></u>,- /Semester</a>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="alert alert-warning text-center">
                            <i class="fa  fa-pencil fa-3x"></i><a href="NilaiMahasiswa.php"> Daftar Mahasiswa &amp; Nilai</a>
                        </div>
                    </div>
                    <!--end quick info section -->
                </div>
                <?php include "CP.php"; ?>
            </div>
        </div>
        <?php include "js.php"; ?>
    </body>
    </html>
