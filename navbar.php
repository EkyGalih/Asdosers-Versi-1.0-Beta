<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
    <!-- navbar-header -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">
            <h2><font color="white">ASDOSERS <font size="1px">V 1.0 Beta</font></font></h2>
        </a>
    </div>
    <!-- end navbar-header -->
    <!-- navbar-top-links -->
    <?php
    include "connect.php";
    $query = "SELECT * FROM users";
    $rows = $con->query($query);
    $r = $rows->fetch_array();
    ?>
    <ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <img class="img-circle" width="35px" height="35px" alt="<?php echo $r['Images'] ?>" src="<?php echo $r['Images'] ?>">
         </a>
         <!-- dropdown user-->
         <ul class="dropdown-menu dropdown-user">
            <li><a href="UserProfile.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
            </li>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                    </li> -->
                    <li class="divider"></li>
                    <li><a href="Process/LogOut.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
                <!-- end dropdown-user -->
            </li>
            <!-- end main dropdown -->
        </ul>
        <!-- end navbar-top-links -->

    </nav>