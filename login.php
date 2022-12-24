<?php
session_start();

if(isset($_REQUEST['btn'])=="Send")
{
	include("connect.php");
	$mob = $_POST['mob'];
	$conn = OpenCon();
	$pwd = $_POST['pwd'];
	$em = $_POST['em'];

	extract($_POST);


 	$l=mysqli_query($conn,"select * from registration_table where 
	(email='$em' and password='$pwd') or (contact_number='$mob' and password='$pwd')")
	
	or die ("QF");
		if(mysqli_num_rows($l))
		{
			$data=mysqli_fetch_array($l);
			// print_r($data);
		$_SESSION['user'] = $data;
			// $data['rid'];
			// print_r($_SESSION);
			header("location: profile.php");
		
		}else
		{
			$_SESSION['incorrect']="Login details are in correct !!!";
		}
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

 

<section class="order" id="order">

<h1 class="heading"> <span> Login Form for Existing Users </span> </h1>
 
<form action="" method="post" name="form1" id="form1" onSubmit="return f2();">
<font size="+1"><div style="color: red;"><?php if(isset($_SESSION['incorrect'])){ echo "<br>&nbsp;&nbsp;".$_SESSION['incorrect']; session_destroy();}  ?></div></font>

    <div class="inputBox">
        <input type="email" placeholder="Email ID"  id="em" name="em">
       <!-- <input type="text" placeholder="food name"> -->
    </div>
	<div class="inputBox">
        <font size="+1" color="#FF0000"><b>OR</b></font>
        
    </div>
    <div class="inputBox">
        <input type="text" placeholder="Contact number"  id="mob" name="mob">
        
    </div>
   <div class="inputBox">
        <input type="password" placeholder="Password"  id="pwd" name="pwd">
    	<!-- <input type="text" placeholder="food name"> -->
    </div>
<input type="submit" value="Login" name="btn" class="btn">
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
</script>

<?php if(isset($_REQUEST['m1'])=="1") { ?>
<script language="javascript">
alert("Registration Done.. Login Now !!!");
</script>
<?php } ?>

<?php if(isset($_REQUEST['msg'])=="stop") { ?>
<script language="javascript">
alert("Please Login Now to Access !!!");
</script>
<?php } ?>

<?php if(isset($_REQUEST['m2'])=="2") { ?>
<script language="javascript">
alert("Logout Successfully !!!");
</script>
<?php } ?>

<script language="javascript">
function f2()
{
	if(form1.mob.value=="" && form1.em.value=="")
	{
		alert("Enter Contact Number or Email ID");
		form1.em.focus();
		return false;
	} 
	
	else if(form1.pwd.value=="")
	{
		alert("Enter Password");
		form1.pwd.focus();
		return false;
	}
}
</script>