<?php
    include("connection.php");
    session_start();
	if(isset($_SESSION['admin'])){
    
    }
	else
	{
	header("location: index.php");
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
    <!--  -->
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
                            <h4 class="page-title pull-left">Food Data</h4>
                            
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
                                <div class="table-responsive table--no-card m-b-30" style="height: auto; width: 1000px;" >
                                    
  <table width="100%" class="table table-borderless">
    
    <thead>
      <tr><th class="badge-dark">No</th>
      <th class="badge-dark">Food Category Name</th>
      <th class="badge-dark">Dish Type </th>
      <th class="badge-dark">Price </th>
      <th class="badge-dark">Description</th>
	  <th class="badge-dark">Food Image</th>
	   <th class="badge-dark">Delete</th>	
	</thead>
      </tr>
<?php

$no=1;
$conn = OpenCon();
$q=mysqli_query($conn,"select * from   food order by F_ID desc")or die ("Query Fail");
while($data=mysqli_fetch_array($q))
{ 
?>
    <tr>
      <td><?php echo $no;?></td>
      <td><?php echo $data['f_c_name']; ?></td>
      <td><?php echo $data['type'];?></td>
      <td><?php echo $data['price'];?></td>
 <td><?php echo $data['description'];?></td>
 <td><img src="../food_imgs/<?php echo $data['images_path'];?>" width="150" height="150"></td>
      <td><a href="del_food_data.php?did=<?php echo $data['F_ID'];?>" class="style1"onClick="return f1();"><img src="images/del1.png"></a> </td>
      </tr>
<?php
$no++;
}
?>
  </table>
 
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
                <p>&copy; Online Food Ordering System, 2022 - Design & Developed by : Jelanshi Shah, Krishna Patel, Priyanshi Pandya</p>
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
	var c=confirm("Are u sure to delete?");
	if(c==false)
		return false;
}
</script>
<?php if(isset($_REQUEST['fcmsd'])=="1") { ?>
<script language="javascript">
alert("Food Data Deleted !!! ");
</script>
<?php } ?>