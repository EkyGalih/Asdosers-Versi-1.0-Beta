<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Detail</title>
    <!-- Core CSS - Include with every page -->
    <?php include "css.php"; ?>
</head>
<body>
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
                    <h1 class="page-header" align="left">User Detail</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info" align="left">
                        <i class="fa fa-folder-open"></i>&nbsp;olla ! Halaman untuk kelola biodata anda <b><a href="UserProfile.php"><?php echo $r['NamaUser'] ?></a></b>
                    </div>
                </div>
                <!--end  Welcome -->
                <div class="row">
                   <?php
                   include "connect.php";
                   $query = "SELECT * FROM users WHERE Nim='$_SESSION[user_login]'";
                   $rows = $con->query($query);
                   $r = $rows->fetch_array();
                   ?>
                   <div class="col-sm-4 pull-left"></div>
                   <div class="col-sm-4 pull-left">
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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>User <?php echo $r['NamaUser'] ?></h4>
                        </div>
                        <div class="panel-body">
                            <center>
                                <img width="60px" height="80" src="<?php echo $r['Images'] ?>" alt="<?php echo $r['images'] ?>" class="img-circle">
                                <h4><strong><?php echo $r['NamaUser'] ?></strong> (<i><?php echo $r['Nim'] ?></i>)</h4> 
                                <button data-toggle="modal" title="Update Profile" data-target="#Profile" class="btn btn-sm btn-info">
                                    <i class="fa fa-wrench fa-fw"></i>
                                </button> | <button data-toggle="modal" title="Upload Photos" data-target="#Photo" class="btn btn-sm btn-info">
                                <i class="fa fa-camera-retro fa-fw"></i>
                            </button> | <button data-toggle="modal" title="Update Password" data-target="#Password" class="btn btn-sm btn-info">
                            <i class="fa fa-lock fa-fw"></i>
                        </button>
                        <div id="Photo" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Upload Photos</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="ProsesPhoto.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $r['idUser'] ?>">
                                            <label>Foto</label>
                                            <input type="file" name="Images" class="form-control" autofocus><br/>
                                            <button type="submit" class="btn btn-info btn-sm btn-block">
                                                <i class="fa fa-upload fa-fw"></i> Upload
                                            </button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="close" data-dismiss="modal">X</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Profile" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Update Profile</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="Process/Update/ProsesProfile.php" method="POST">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="id" value="<?php echo $r['idUser'] ?>">
                                                <label>Nama</label>
                                                <input type="text" maxlength="5" value="<?php echo $r['NamaUser'] ?>" name="nama" class="form-control" autofocus><br/>
                                            </div>
                                                    <!-- <div class="col-sm-4">
                                                    <label>Nim</label>
                                                    <input type="text" maxlength="10" value="<?php echo $r['Nim'] ?>" name="nim" class="form-control" autofocus><br/>
                                                </div> -->
                                                <button type="submit" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-refresh fa-fw"></i> Update
                                                </button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="close" data-dismiss="modal">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Password" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4>Update Password</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="Process/Update/ProsessPassword.php" method="POST">
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-4">
                                                    <input type="hidden" name="id" value="<?php echo $r['idUser'] ?>">
                                                    <label>New Password</label>
                                                    <input type="password" maxlength="6" name="password" class="form-control" autofocus><br/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label>Re-New Password</label>
                                                    <input type="password" maxlength="6" name="re-password" class="form-control" autofocus><br/>
                                                    <p><font color="red">* max length 6 caracter</font></p>
                                                </div>
                                                <button type="submit" class="btn btn-info btn-sm btn-block">
                                                    <i class="fa fa-refresh fa-fw"></i> Update Password
                                                </button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="close" data-dismiss="modal">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "CP.php"; ?>
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
</html>
