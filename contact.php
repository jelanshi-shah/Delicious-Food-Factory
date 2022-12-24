<?php session_start();?>
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

<h1 class="heading"> <span> Contact Details </span> </h1>
 
<form action="">

    <div class="inputBox">
       <font size="+2">Address Here : 403, Shalibhadra Appartment, Kalanala, Bhavnagar.</font>
       <!-- <input type="text" placeholder="food name">-->
    </div>
<br><br>
    <div class="inputBox">
       <font size="+2"> Contact Number : +91 8160568982, +91 6358015010, +91 8780682347</font>
        
    </div>
<br><br>
    <div class="inputBox">
       <font size="+2" style="text-transform:lowercase" > Email Addreess : 
     krishaamrutiya18@gmail.com,  jelanshishah9999@gmail.com, priyanshi7@gmail.com  </font>
    </div>
 <br> <br> 
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.32087490384!2d72.14080586425862!3d21.767838967513494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f50874b4c9591%3A0xa3fdd3addcec16fd!2sKalanala%2C%20Panwadi%2C%20Bhavnagar%2C%20Gujarat%20364002!5e0!3m2!1sen!2sin!4v1625071894157!5m2!1sen!2sin" width="900" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <br><br>
    

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