<?php
error_reporting(E_ALL & ~E_NOTICE);
    include("connection.php");
    session_start();
	if(isset($_SESSION['admin'])){}
	else
	{
	header("location: index.php");
	}

if(isset($_REQUEST['Submit']))
{
	extract($_POST);
    $fn = $_POST["fileToUpload"];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        echo $target_file;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }


	// $path="../food_imgs/";
	// $npath=$path.$fn;
    print_r($target_file);
    // print_r($path);
    // print_r($npath);
    
	// move_uploaded_file($_FILES['img']['tmp_name'],$npath);
	$conn = openCon();
    $c = $_POST["c"];
    $t = $_POST["t"];
    $p = $_POST["p"];
    $d = $_POST["d"];
    mysqli_query($conn,"insert into food(f_c_name,type,price,description,images_path) values ('$c','$t','$p','$d','$target_file')")or die ("QFF");
	header("location:view_food_details.php?a=1"); 
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
                            <h4 class="page-title pull-left">Add Food Data</h4>
                            
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
                                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"  >
  <table width="50%" class="table table-borderless table-striped table-earning">
    <tr>
      <td>Select Food Category </td>
      <td>:</td>
      <td><select name="c" id="c" style="background-color:#E9E9E9; border-style:groove"  >
        <option value="Select Food Category " selected>Select Food Category </option>
<?php 

$conn = openCon();
$qf=mysqli_query($conn,"select * from foodcategory_management order by f_c_name")or die ("QF");
while($data=mysqli_fetch_array($qf)) { ?>        
<option value="<?php echo $data['f_c_name'];?>"><?php echo $data['f_c_name'];?></option>
<?php  } ?>
      </select>      </td>
    </tr>
    
    <tr>
      <td>Select Food Dish Type </td>
      <td>:</td>
      <td><select name="t" id="t" style="background-color:#E9E9E9; border-style:groove" >
        <option value="Select" selected>Select</option>
        <option value="Half">Half</option>
        <option value="Full">Full</option>
      </select>      </td>
    </tr>
    <tr>
      <td>Enter Food Price </td>
      <td>:</td>
      <td><input name="p" type="text" id="p" size="15" style="background-color:#E9E9E9; border-style:groove" ></td>
    </tr>
    <tr>
      <td>Type Description about food </td>
      <td>:</td>
      <td><textarea name="d" id="d" style="background-color:#E9E9E9; border-style:groove" ></textarea></td>
    </tr>
    <tr>
      <td>Upload Food Image </td>
      <td>:</td>
      <td><label>
        <input name="img" type="file" id="fileToUpload" name="fileToUpload" accept="image/*" style="background-color:#E9E9E9; border-style:groove" >
      </label></td>
    </tr>
     
     
     
     
    <tr>
      <td colspan="3"><div align="center">
        <input type="submit" name="Submit" value="Add Food Data" class="mybtn" />
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
 