<?php
session_start();
if(isset($_SESSION['user'])=="") 
{
	header("location:login.php?msg=stop");
  include("connect.php");
  $u=$_SESSION['user'];
  exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Online Food Ordering System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>

    <style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
    </style>
</head>
<body>
    
<!-- header section starts  -->

<header>

<?php include("top.php");?>

<?php include("menu.php");?>

</header>

<section class="order" id="order" >

<h1 class="heading"> <span> User Profile </span> </h1>
 
<form action="" method="post" name="form1" id="form1" onSubmit="return f1();">
<font size="+1">
<div class="inputBox"> 
<table width="100%"  style="border-style:groove">
  <tr>
    <td width="5%" bgcolor="#000000"><span class="style2">No</span></td>
    <td width="16%" bgcolor="#000000"><span class="style2">Food Category </span></td>
    <td width="8%" bgcolor="#000000"><span class="style2">Type</span></td>
    <td width="7%" bgcolor="#000000"><span class="style2">Price</span></td>
    <td width="28%" bgcolor="#000000"><span class="style2">Description</span></td>
    <td width="14%" bgcolor="#000000"><span class="style2">Image</span></td>
    <td width="22%" bgcolor="#000000"><span class="style2">Action</span></td>
  </tr>
<?php
include("./connect.php");
$conn = OpenCon();
$no=1;
$u=$_SESSION['user'][0];
// print_r($_SESSION['user'][0]);
$q=mysqli_query($conn,"select * from food_orders where rid='$u'")or die ("QF");
while($data=mysqli_fetch_array($q))
{ 
	$f=$data['fid'];
	$q1=mysqli_query($conn,"select * from food where F_ID=$f")or die ("QF1");
	$data1=mysqli_fetch_array($q1);
?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $data1['f_c_name'];?></td>
    <td><?php echo $data1['type'];?></td>
    <td><?php echo $data1['price'];?></td>
    <td align="left"><?php echo $data1['description'];?></td>
    <td><img src="food_imgs/<?php echo $data1['images_path'];?>" height="150" width="150"></td>
    <td><a href="cancel_order.php?did=<?php echo $data['frid'];?>" onClick="return f1();">Cancel Order </a></td>
  </tr>
<?php
$no++;
}
?>
</table>
      
</div>
</font> 
  
    

</form>
</section>

 
<?php include("footer.php");?>

<!-- footer section ends -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>
<script language="javascript">
function f1()
{
	var c=confirm("Are you sure to cancel this order?");
	if(c==false)
	return false;
}
</script>