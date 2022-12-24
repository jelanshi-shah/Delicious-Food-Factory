<?php
session_start();
if(isset($_SESSION['user'])=="") 
{
	header("location:login.php?msg=stop");
	exit();
}


$u=$_SESSION['user'][0];
include("connect.php");
$conn = openCon();
$qu=mysqli_query($conn,"select * from  registration_table where rid=$u")or die ("QF1");
$datau=mysqli_fetch_array($qu);

$i=$_REQUEST['i'];
$qi=mysqli_query($conn,"select * from food where F_ID=$i")or die ("QF2");
$datai=mysqli_fetch_array($qi);




if(isset($_REQUEST['btn'])=="Send")
{
	extract($_POST);
	$pr = $_POST["pr"];
	$qty = $_POST["qty"];
	$tot = $_POST["tot"];
	mysqli_query($conn,"insert into food_orders (fid,rid,price,qty,total) values ('$i','$u','$pr','$qty','$tot')")or die ("QF");
	header("location:order_history.php?m1=1");
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

</head>
<body>
    
<!-- header section starts  -->

<header>

<?php include("top.php");?>

<?php include("menu.php");?>

</header>

 

<section class="order" id="order" >

<h1 class="heading"> <span> Order Your Food </span> </h1>
 
<form action="" method="post" name="form1" id="form1" onSubmit="return f1();">

    <div class="inputBox">
        <input type="text"  value="<?php echo $datau['first_name']."  ".$datau['last_name'];?>"  id="nm" name="nm">
       <!-- <input type="text" placeholder="food name">-->
    </div>
 
    <div class="inputBox">
        <input type="text"  value="<?php echo $datau['contact_number'];?>"  id="mob" name="mob" >
        
    </div>
    <div class="inputBox">
        <textarea name="address" name="ad" id="ad"></textarea>
        
    </div>
    <div class="inputBox">
        <font size="+1">Food Name: <?php echo $datai['f_c_name'];?>  <br><br>
        
    </div>
<div class="inputBox">
        <font size="+1">Food Price: <?php echo $datai['price'];?>  
         <br><br>
    </div>
	<div class="inputBox">
        Price :  <input type="text" value="<?php echo $datai['price'];?>" readonly=""    id="pr" name="pr">
        
    </div>
<div class="inputBox">
        Qty :  <input type="text"  placeholder="Enter Qty"   id="qty" name="qty" onBlur="return calc();">
        
    </div>
<div class="inputBox">
        Total :  <input type="text"   readonly=""    id="tot" name="tot">
        
    </div>
<input type="submit" value="Order Food" name="btn" class="btn">
<br> 
  
    

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
	if(form1.nm.value=="")
	{
		alert("Enter Name");
		form1.nm.focus();
		return false;
	}
	
	else if(form1.mob.value=="")
	{
		alert("Enter Contact Number");
		form1.mob.focus();
		return false;
	} 
	else if(form1.mob.value.length!=10)
	{
		alert("Contact Number require in 10 Digits");
		form1.mob.focus();
		return false;
	}
	else if(isNaN(form1.mob.value))
	{
		alert("Characters or Symbols not allowed in Contact Number");
		form1.mob.focus();
		return false;
	} 
	else if(form1.ad.value=="")
	{
		alert("Enter Address");
		form1.ad.focus();
		return false;
	} 
	else if(form1.qty.value=="")
	{
		alert("Enter Qty");
		form1.qty.focus();
		return false;
	}
	 
}

function calc()
{
	var p=Number(form1.pr.value);
	var q=Number(form1.qty.value);
	var t=(p*q);
	form1.tot.value=t;

}
</script>

