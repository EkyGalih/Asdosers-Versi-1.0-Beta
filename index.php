<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asdosers Beta</title>
    <!-- Core CSS - Include with every page -->
    <?php include "css.php"; ?>
    <style type="text/css">
        .hide-text {
          height: 0;
          overflow: hidden;
          position: absolute;
      }
  </style>
</head>
<body>
    <!--  wrapper -->
    <br/><br/><br/>
    <div id="wrapper">
        <div class="col-sm-4 pull-left"></div>
        <div class="col-lg-4">
            <h2 align="center"><font color="#10506F">ASDOSERS <font size="1px">V 1.0 Beta</font></font></h2>
            <p class="hide-text">
                <?php
                if (!$_SESSION['user_login']) {
                    ?>
                <?php
                if ($_SESSION['Pesan'] ) {
                    ?>
                    <div class="alert alert-danger" id="Pesan">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $_SESSION['Pesan'] ?>
                    </div>
                    <?php
                }
                $_SESSION['Pesan'] = "";
                ?>
                </p>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Login</h4>
                    </div>
                    <div class="panel-body">
                        <form action="Process/ProcessLogin.php" method="POST" onsubmit="return validateForm()">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="fa fa-user fa-fw"></label>
                                </span>
                                <input type="text" name="nim" maxlength="10" class="form-control" placeholder="Nim Anda" required autofocus>
                            </div><br/>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="fa fa-lock fa-fw"></label>
                                </span>
                                <input type="password" name="password" maxlength="6" class="form-control" placeholder="Password" required>
                            </div><br/>
                            <button type="submit" class="btn btn-primary btn-sm btn-block" data-toggle="tooltip" data-placement="top" title="Login">
                                <i class="fa fa-sign-in fa-fw"></i> Sign in
                            </button>
                        </form><br/>
                        <button title="Daftar" type="button" class="btn btn-success btn-sm btn-block" data-toggle="modal" data-target="#Daftar"><i class="fa fa-check-circle fa-fw"></i> Daftar</button>
                        <div id="Daftar" class="modal fade" role="doalog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4>Daftar</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="Process/ProcessDaftar.php" method="POST" onsubmit="return validateForm()">
                                            <table border="0">
                                                <tr>
                                                    <td>
                                                        <label>Nama Lengkap : </label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="Nama" maxlength="5" style="width: 250px; height: 25px; border-radius: 6px;" placeholder="Nama Anda" required><br/>
                                                    </td>
                                                    <td>
                                                        <p align="right"><font color="red">* max password 5 caracter</font></p>
                                                    </td>
                                                </tr><br/>
                                                <tr>
                                                    <td>
                                                        <label>Nim</label>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="nim" maxlength="10" style="width: 250px; height: 25px; border-radius: 6px;" placeholder="Nim Anda" required>
                                                    </td>
                                                    <td>
                                                        <p align="right"><font color="red">* max 10 caracter</font></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label>Password</label>
                                                    </td>
                                                    <td>
                                                        <input type="password" name="password" maxlength="6" style="width: 250px; height: 25px; border-radius: 6px;" placeholder="Password" required>
                                                    </td>
                                                    <td>
                                                        <p align="right"><font color="red">* max 6 caracter</font></p>
                                                    </td>
                                                </tr>
                                                <input type="hidden" name="images" value="assets/img/user.jpg">
                                            </table><br/>
                                            <button type="submit" class="btn btn-success btn-sm btn-block" data-toggle="tooltip" data-placement="top" title="Daftar">
                                                <i class="fa fa-check-circle fa-fw"></i> Daftar
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm btn-block" data-dismiss="modal" data-toggle="tooltip" data-placement="top" title="Cancel">
                                                <i class="fa fa-times fa-fw"></i> Cancel
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }else{ ?>
                <script>
                    alert("Anda sudah login <?php echo $_SESSION['user_login'] ?>!!")
                    document.location = "home.php"
                </script>
                <?php } ?>
            </div>
        </div>
        <?php include "CP.php"; ?>
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
