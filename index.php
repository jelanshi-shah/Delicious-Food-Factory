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

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

<div class="content">
    <h1>WELCOME TO<span>FOOD
    </span> FACTORY!</h1>
     
    
</div>

<div class="shape"></div>
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span> Online Food Ordering System </span> </h1>

<div class="row">

    <div class="content">
  <br><br><p align="justify">In the current era of e-commerce, several online business models are mushrooming & leading to a new wave of start-ups. </p>
<p align="justify">In that particular aspect, online food ordering and the delivery business model has seen an immense interest from consumers, entrepreneurs as well as investors. </p>
<p align="justify">These online businesses act as a common platform between consumers and restaurants.</p><p align="justify"> However, in order to ensure that your online food ordering and delivering business is successful, you need to have specific features baked right into your website and apps, You need to take care of various technical and marketing aspects to make your site stand apart, and Ordering.</p>
<p align="justify">We also provice food delievery in various cities in gujarat like Bhavnagar, Rajkot, Surat etc...</p>
 
<p> <a href="about.php">Readmore</a></p>
 

 
        <!--<a href="#"><button class="btn">learn more</button></a>-->
    </div>

    

</div>
<div class="image" align="center">
        <img src="images/food.png" alt="" height="420" width="700"    > 
    </div>
</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="dish" id="dish">

<h1 class="heading"> <span> Menu</span> </h1><a name="menu"></a>
<section id="slider" >
    <input type="radio" name="slider" id="s1" checked>
    <input type="radio" name="slider" id="s2">
    <input type="radio" name="slider" id="s3">
    <input type="radio" name="slider" id="s4">
    <input type="radio" name="slider" id="s5">
    <input type="radio" name="slider" id="s6">
   <!-- <input type="radio" name="slider" id="s7">-->
    
    <label for="s1" id="slide1"><img src="images/punjabi.jpg"></label>
    
    <label for="s2" id="slide2"><img src="images/Thali.jpg"></label>
    
    <label for="s3" id="slide3"><img src="images/chinese.jpg"></label>

    <label for="s4" id="slide4"><img src="images/south.jpeg"></label>
    
    <label for="s5" id="slide5"><img src="images/italiyan.jpg"></label>

    <label for="s6" id="slide6"><img src="images/features.jpg"></label>

 <!--   <label for="s7" id="slide7"><img src="images/7.jpg"></label>-->
   
    
</section>


  

 

</section>
<br><br>
<br><br>
 

<?php include("footer.php");?>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>