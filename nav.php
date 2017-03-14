 <?php
 session_start();
 require "connect.php";
 if (!$_SESSION['user_login']){
   ?>
   <script>
   alert("silahkan login terlebih dahulu")
    document.location = "index.php"
</script>
<?php }else{ ?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                    <?php
                    include "connect.php";
                    $query = "SELECT * FROM users";
                    $rows = $con->query($query);
                    $r = $rows->fetch_array();
                    ?>
                <div class="user-section">
                    <div class="user-section-inner">
                        <img align="center" class="img-responsive img-rounded" width="60px" height="80px" src="<?php echo $r['Images'] ?>" alt="<?php echo $r['Images'] ?>">
                    </div>
                    <div class="user-info">
                        <div><strong><?php echo $r['NamaUser'] ?></strong></div>
                        <div class="user-text-online">
                           (<u><?php echo $_SESSION['user_login'] ?></u>)
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
               <!--  <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div> -->
                <!--end search section-->
            </li>
            <li class="selected">
                <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>Beranda</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-list-alt fa-fw"></i> Menu<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a data-toggle="tooltip" data-placement="right" title="Data Kelas" href="Kelas.php"><i class="fa fa-group fa-fw"></i> Data Kelas</a>
                    </li>
                    <li>
                        <a data-toggle="tooltip" data-placement="right" title="Jadwal & Penghasilan" href="#"><i class="fa fa-list-alt fa-fw"></i> Jadwal &amp; Pertemuan <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="Jadwal.php"><i class="fa fa-calendar fa-fw"></i> Jadwal Ngasdos</a>
                            </li>
                            <li>
                               <a href="Penghasilan.php"><i class="fa fa-money fa-fw"></i> Penghasilan</a> 
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-toggle="tooltip" data-placement="right" title="Data Nilai Mahasiswa" href="NilaiMahasiswa.php"><i class="fa fa-pencil fa-fw"></i>Nilai Mahasiswa</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a data-toggle="tooltip" data-placement="right" title="Bantuan" href="Help.php"><i class="fa fa-question-circle fa-fw"></i>Bantuan</a>
            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>
<?php } ?>