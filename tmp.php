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
    <h1>WELCOM TO<span>FOOD
    </span> FACTORY!</h1>
    <p>
        Dear guest, you are welcomed to dine with us at good food restaurant. We will serve you with the mouth watering dishes. Have a pleasant dining experience.
    </p>
    <a href="#dish"><button class="btn">Order Now</button></a>
</div>

<div class="shape"></div>
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span> Online Food Ordering System </span> </h1>

<div class="row">

    <div class="content">
        <h3>lets satisfy your hunger with our tasty dishes</h3>
        <p> welcome to simple bites, a family-oriented community that believes in the importance of bringing the whole family together around the table on a daily basis.</p>
        <p> the Online Food Ordering System has grown home project we take so many opinions of user to implement this website as this all kind food provide by us we guaranteed the quality of food and the best food services as per users requirement.</p>
        <p> our desire is to enable you to prepare unprocessed, nourishing food and foster a desire to eat seasonally and locally. to help with that, we offer a wealth of comprehensive recipes, simple preserving tutorials, and honest tips for cooking with kids.</p>
        
        <!--<a href="#"><button class="btn">learn more</button></a>-->
    </div>

    <div class="image">
        <img src="images/girl-chef.png" alt="">
    </div>

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


<!--<ul class="controls">
    <li class="buttons button-active" data-filter="all">all</li>
    <li class="buttons" data-filter="sandwich">sandwich</li>
    <li class="buttons" data-filter="cake">cake</li>
    <li class="buttons" data-filter="juice">juice</li>
    <li class="buttons" data-filter="chocolate">chocolate</li>
    <li class="buttons" data-filter="South Indian">South Indian</li>
</ul> 

<div class="image-container">

    <div class="image sandwich">
        <img src="images/sandwich1.jpg" alt="">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="images/sandwich2.jpg" alt="">
        <a href="#">sandwich</a>
    </div>
    <div class="image sandwich">
        <img src="images/sandwich3.jpg" alt="">
        <a href="#">sandwich</a>
    </div>

    <div class="image cake">
        <img src="images/cake1.jpg" alt="">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="images/cake2.jpg" alt="">
        <a href="#">cake</a>
    </div>
    <div class="image cake">
        <img src="images/cake3.jpg" alt="">
        <a href="#">cake</a>
    </div>

    <div class="image juice">
        <img src="images/juice1.jpg" alt="">
        <a href="#">juice</a>
    </div>
    <div class="image juice">
        <img src="images/juice2.jpg" alt="">
        <a href="#">juice</a>
    </div>

    <div class="image chocolate">
        <img src="images/chocolate.jpg" alt="">
        <a href="#">chocolate</a>
    </div>

    <div class="image south">
        <img src="images/south.jpeg" alt="">
        <a href="#">south</a>
    </div>

</div>
-->
</section>
<br><br>
<br><br>
<!-- dish section ends -->

<!-- chef section starts  -->

<section class="chef" id="chef">

<h1 class="heading"> <span> expert chefs </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/chef1.jpg" alt="">
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="https://m.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://in.pinterest.com/" class="fab fa-pinterest"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://mobile.twitter.com/" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/chef2.jpg" alt="">
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="https://m.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://in.pinterest.com/" class="fab fa-pinterest"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://mobile.twitter.com/" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/chef3.jpg" alt="">
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="https://m.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://in.pinterest.com/" class="fab fa-pinterest"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://mobile.twitter.com/" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

    <div class="box">
        <img src="images/chef4.jpg" alt="">
        <div class="info">
            <h3>john deo</h3>
            <span>head chef</span>
            <div class="share">
                <a href="https://m.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://in.pinterest.com/" class="fab fa-pinterest"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://mobile.twitter.com/" class="fab fa-twitter"></a>
            </div>
        </div>
    </div>

</div>

</section>

<!-- chef section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

<h1 class="heading"> <span> our speciality </span> </h1>

<div class="box-container">

    <div class="box">
        <img src="images/img1.jpg" alt="">
        <div class="info">
            <h3>tasty hamburger</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img2.jpg" alt="">
        <div class="info">
            <h3>fresh bearkfast</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img3.jpg" alt="">
        <div class="info">
            <h3>veg sandwich</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

    <div class="box">
        <img src="images/img4.jpg" alt="">
        <div class="info">
            <h3>delicious pizza</h3>
            <p>upto 25% discount</p>
            <a href="#"><button class="btn"> check out </button></a>
        </div>
    </div>

</div>

<div class="icons-container">

    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <h3>fast delivery</h3>
        <p>we'll try our best to provide the fast delivery to our customers. as you order the food it will be at place in minimum time.</p>
    </div>

    <div class="icons">
        <i class="fas fa-tags"></i>
        <h3>heavy discounts</h3>
        <p>at some period of timing or in a special occassion we will provide you discount on the dishes. if we successed we'll try to provide different kind of attractive discount's to customers.</p>
    </div>

    <div class="icons">
        <i class="fas fa-hand-holding-usd"></i>
        <h3>money returns</h3>
        <p>if customer reject their food in any kind of situation so they can get back their money for sure. this is the special facility provide by us.</p>
    </div>

    <div class="icons">
        <i class="fas fa-headset"></i>
        <h3>24 x 7 support</h3>
        <p>as we provide facility 24x7 you can give order at any time and get your food. the site will be open for 24x7.</p>
    </div>

</div>

</section>

<!-- speciality section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h1 class="heading"> <span> Feedback </span> </h1>

<form action="">

    <div class="inputBox">
        <input type="text" placeholder="full name">
       <!-- <input type="text" placeholder="food name">-->
    </div>

    <div class="inputBox">
        <input type="number" placeholder="phone number">
       <!-- <select name="" id="">
            <option value="food type" disabled selected>food type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select>-->
    </div>

    <div class="inputBox">
        <textarea cols="30" rows="10" placeholder="Feedback"></textarea>
        <!--<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.3448351768534!2d72.8194324144256!3d19.136377055045728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7ddc82073d7%3A0x3aa5a7ce31b7b9dd!2sRestaurants!5e0!3m2!1sen!2sin!4v1612270030599!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>-->
    </div>

    <input type="submit" value="Send" class="btn">

</form>

</section>

<!-- order section ends -->

<!-- newsletter section starts  -->

<!--<section class="newsletter">

    <h1>newsletter</h1>
    <p>subscribe for latest updates</p>    
    <form action="">
        <input type="email" placeholder="enter your email">
        <input type="submit" value="subscribe">
    </form>

</section>-->

<!-- newsletter section ends -->

<!-- footer section starts  -->

<section class="footer">

    <img src="images/shape-top.png" alt="">

    <div class="box-container">

        <div class="box">
            <h3 class="heading"> <span>why choose us?</span> </h3>
            <p>
                in so many manners we provide some special and needy facility to our customers. customer will surety admire our services and get impressed by our hospitality. we also give proper respones of customer query and make changes.
            </p>
        </div>

        <div class="box">
            <h3 class="heading"> <span>locations</span> </h3>
            <a href="#">bhavnagar</a>
            <a href="#">Surat</a>
            <a href="#">Rajkot</a>
            <a href="#">Ahemdabad</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>quick links</span> </h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">dishes</a>
            <a href="#">chef</a>
            <a href="#">speciality</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3 class="heading"> <span>contact us</span> </h3>
            <p> <i class="fas fa-map-marker-alt"></i> bhavnagar, gujrat, india 364001 </p>
            <p> <i class="fas fa-envelope"></i> xyx@gmail.com </p>
            <p> <i class="fas fa-globe"></i> www.yourwebsite.com </p>
        </div>

    </div>

<h1 class="credit"> created by <span>Ms. Krishna patel</span> | <span>Ms. Mahek mehta</span> | <span>Ms. Krisha bhadiyadra</span>  </h1>

</section>

<!-- footer section ends -->



<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/main.js"></script>


</body>
</html>