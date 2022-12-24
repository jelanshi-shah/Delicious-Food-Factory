
<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
// include("../connect.php");
$a=$_SESSION['admin'];
$qa=mysqli_query($conn,"select * from admin where aid=$a")or die ("QF");
$dataad=mysqli_fetch_array($qa);
?>
<div class="col-sm-12 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php if(isset($_SESSION['admin'])){ echo $dataad['name']; } ?><i class="fa fa-angle-down"></i></h4>

                                                                                                                                                                                                

<div class="dropdown-menu">
<a class="dropdown-item" href="profile.php">Profile</a>
<a class="dropdown-item" href="change_password.php">Change Password</a><a class="dropdown-item" href="logout.php">Logout</a>
</div>
                        </div>
                    </div>