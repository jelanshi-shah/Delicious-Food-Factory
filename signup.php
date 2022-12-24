<?php


if(isset($_REQUEST['btn'])=="Send")
{
	$fnm = $_POST['fnm'];
	$lnm = $_POST['lnm'];
	$mob = $_POST['mob'];
	$em = $_POST['em'];
	$pwd = $_POST['pwd'];

	include("connect.php");
	extract($_POST);
	$conn = openCon();
mysqli_query($conn,"insert into registration_table (first_name,last_name,contact_number,email,password) values ('$fnm','$lnm','$mob','$em','$pwd')")or die ("QF");
header("location:login.php?m1=1");
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
<style>
	input {
		text-transform: lowercase;
	}
</style>

</header>

 

<section class="order" id="order" >

<h1 class="heading"> <span> Sign-Up form for new user </span> </h1>
 
<form action="" method="post" name="form1" id="form1" onSubmit="return f1();">

    <div class="inputBox">
        <input type="text" placeholder="First name"  id="fnm" name="fnm">
       <!-- <input type="text" placeholder="food name">-->
    </div>
<div class="inputBox">
        <input type="text" placeholder="Last name"  id="lnm" name="lnm">
       <!-- <input type="text" placeholder="food name">-->
    </div>
    <div class="inputBox">
        <input type="text" placeholder="Contact number"  id="mob" name="mob">
        
    </div>
  <div class="inputBox">
        <input type="email" placeholder="Email Address"  id="em" name="em">
        
    </div>
    <div class="inputBox">
        <input type="password" placeholder="Password"  id="pwd" name="pwd">
       <!-- <input type="text" placeholder="food name">-->
    </div>
<input type="submit" value="Sign-Up" name="btn" class="btn">
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
	if(form1.fnm.value=="")
	{
		alert("Enter First Name");
		form1.fnm.focus();
		return false;
	}
	else if(form1.lnm.value=="")
	{
		alert("Enter Last Name");
		form1.lnm.focus();
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
	else if(form1.em.value=="")
	{
		alert("Enter Email ID");
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