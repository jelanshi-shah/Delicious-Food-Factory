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

</head>
<body>
    
<!-- header section starts  -->

<header>

<?php include("top.php");?>

<?php include("menu.php");?>

</header>



<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<div class="box-container">
<?php
include("connect.php");
$conn = OpenCon();
// echo "Connected Successfully";

$f = mysqli_query($conn,"select f_c_name from foodcategory_management order by f_c_name")


// print_r($f); exit;

or die ("QF");
while($dataf=mysqli_fetch_array($f)) { 
?>

    <div class="box">
        <img src="images/img1.jpg" alt="">
        <div class="info">
            <h3><?php echo $dataf['f_c_name'];?></h3>
            <a href="food_data.php?fn=<?php echo $dataf['f_c_name'];?>"><button class="btn"> More Dishes </button></a>
        </div>
    </div>
<?php
}
?>
    
</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p align="justify">we'll try our best to provide the fast delivery to our customers. as you order the food it will be at place in minimum time.</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p align="justify">at some period of timing or in a special occassion we will provide you discount on the dishes. if we successed we'll try to provide different kind of attractive discount's to customers.</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p align="justify">if customer reject their food in any kind of situation so they can get back their money for sure. this is the special facility provide by us.</p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p align="justify">as we provide facility 24x7 you can give order at any time and get your food. the site will be open for 24x7.</p>
    </div>

</div>

</section>

 

<?php include("footer.php");?>

<!-- footer section ends -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>