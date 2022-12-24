<?php
session_start();
if(isset($_REQUEST['btn'])=="Send")
{
	include("connect.php");
    extract($_POST);
    $nm = $_POST["nm"];
    $em = $_POST["em"];
    $mob = $_POST["mob"];
    $msg = $_POST["msg"];
    $m1=nl2br($_REQUEST['m1']);
    $conn = OpenCon();
    mysqli_query($conn,"insert into inquiry(i_name,mobile,email,message) values ('$nm','$mob','$em','$msg')")or die ("data fail");
    header("location:inquiry.php?m1=1");
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

<h1 class="heading"> <span> Inquiry </span> </h1>
<h1><font  color="#FFFFFF" size="+1">Send us an inquiry if you have any questions...</font></h1>
<form action="" method="post" name="form1" id="form1">


    <div class="inputBox">
        <input type="text" placeholder="full name" required id="nm" name="nm">
       <!-- <input type="text" placeholder="food name">-->
    </div>
    <div class="inputBox">
        <input type="text" placeholder="Contact number" required id="mob" name="mob">
        
    </div>
  <div class="inputBox">
        <input type="email" placeholder="Email Address" required id="em" name="em">
        
    </div>
    <div class="inputBox">
        <textarea cols="30" rows="10" placeholder="Comments / Questions" required id="msg" name="msg"></textarea>
        
    </div>
<input type="submit" value="Send" name="btn" class="btn">
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
<?php if(isset($_REQUEST['m1'])=="1") { ?>
<script language="javascript">
alert("Thanks for your inquiry we will answer you soon !");
</script>
<?php } ?>