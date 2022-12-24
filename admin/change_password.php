<?php
    include("connection.php");
    session_start();
    if(isset($_SESSION['admin'])){

        }
        else{

            header("location: index.php");
        }

  
$i=$_SESSION['admin'];
$conn = openCon();
$q=mysqli_query($conn,"select * from admin where aid=$i")or die ("QF1");
$data=mysqli_fetch_array($q);
$old_p=$data['password'];
if(isset($_REQUEST['Submit']))
{
            extract($_POST);
	if($old_p==$cu)
	{
		//update pwd
		$conn = openCon();
        $ne = $_POST['ne'];
mysqli_query($conn,"update admin set password='$ne' where aid=$i")or die ("QF");
		header("location:logout.php");
	}
	else
	{
		//msg
		header("location:change_password.php?msg=wrong");
	}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" type="image/ico" href="../img/icons.png">
    <title>Online Food Ordering System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="registeration/css/main.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <h2 style="color: white;">Online Food Ordering System</h2>
                </div>
            </div>
            <?php include("menu.php");?>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-conten">
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Change Password (ADMIN)</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <?php include("top.php");?>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="table-responsive table--no-card m-b-30" style="height: auto; width: 700px;" >
                                    <form id="form1" name="form1" method="post" action="" onSubmit="return f1();">
  <table width="50%" class="table table-borderless table-striped table-earning">
    
    <tr>
      <td>Login Id </td>
      <td>:</td>
      <td><input name="lo" type="text" id="lo" readonly="" value="<?php echo $data['loginid'];?>" border="1"  style="border-color:#999999; border-style:inset"/></td>
    </tr>
    <tr>
      <td>Current Password </td>
      <td>:</td>
      <td><input name="cu" type="password" id="cu" autofocus  border="1"  style="border-color:#999999; border-style:inset"/></td>
    </tr>
    <tr>
      <td>New Password </td>
      <td>:</td>
      <td><input name="ne" type="password" id="ne"  border="1"  style="border-color:#999999; border-style:inset"/></td>
    </tr>
    <tr>
      <td>Retype New Password </td>
      <td>:</td>
      <td><input name="re" type="password" id="re" onBlur="return f2();" style="border-color:#999999; border-style:inset"/></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Change" />
      </div></td>
      </tr>
  </table>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>&copy; Online Food Ordering System, 2021 - Design & Developed by : Krishna Patel, Mahek Mehta, Krisha Bhadiyadra</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!--<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>-->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
<script language="javascript">
function f1()
{
    if(form1.cu.value=="")
	{
	    alert("enter current password");
		form1.cu.focus();
		return false;
	}
	else if(form1.ne.value=="")
	{
	    alert("enter new password");
		form1.ne.focus();
		return false;
	}
	if(form1.re.value=="")
	{
	    alert("enter retype new password");
		form1.re.focus();
		return false;
	}
	
}
function f2()
{
	if(form1.ne.value!=form1.re.value)
	{
		alert("New Password and Retype New Password not Matched !!!");
		form1.ne.value='';
		form1.re.value='';
		form1.ne.focus();
		return false;
	}
}

</script>
<?php if(isset($_REQUEST['msg'])=="wrong") { ?>
<script language="javascript">
alert("You entered wrong current password");
</script>
<?php } ?>