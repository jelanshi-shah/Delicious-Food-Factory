<?php
session_start();
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

<!--FOR ZOOM-->
<link rel="stylesheet" href="css_zoom/dg-picture-zoom.css" />
	<script type="text/javascript" src="js_zoom/external/mootools-1.2.4-core-yc.js"></script>
	<script type="text/javascript" src="js_zoom/external/mootools-more.js"></script>
	<script type="text/javascript" src="js_zoom/dg-picture-zoom.js"></script>
	<script type="text/javascript" src="js_zoom/dg-picture-zoom-autoload.js"></script>
	 
<!--ZOOM OVER-->
</head>


<body>
    
<!-- header section starts  -->

<header>

<?php include("top.php");?>

<?php include("menu.php");?>

</header>
  
  <!-- fOOD MEnu Section Starts Here -->
     <section class="speciality" id="speciality">

<h1 class="heading"> <span> <?php echo $_REQUEST['fn'];?></span> </h1>

<div class="box-container">
<?php
include("connect.php");
$conn = openCon();
$n=$_REQUEST['fn'];
$q=mysqli_query($conn,"select * from food where f_c_name='$n'")or die ("QF1");
while($data=mysqli_fetch_array($q))
{
?>

    <div class="box1" style="height:500">
        <img src="images/img2.jpg" alt="">
        <div class="info">
             
<h3><?php echo $data['f_c_name'];?></h3>
            <p>Dish Type : <?php echo $data['type'];?></p>
<p>Description : <?php echo $data['description'];?></p>
<p>Price : <?php echo $data['price'];?></p>
<p><img src="food_imgs/<?php echo $data['images_path'];?>?url=food_imgs/<?php echo $data['images_path'];?>" height="60" width="60" class="dg-picture-zoom"></p> 

            <a href="order_now.php?i=<?php echo $data['F_ID'];?>"><button class="btn"> Order Now </button></a>
        </div>
    </div>

 <?php
}
?>   

     

     

</div>

 

</section>
    <!-- fOOD Menu Section Ends Here -->
	 

<?php include("footer.php");?>

<!-- footer section ends -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>