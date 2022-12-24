<br />
<div class="header-2" style="text-align:center">

    <div id="menu" class="fas fa-hamburger"></div>

    <nav class="navbar" >
        <ul>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li>
<li>&nbsp;&nbsp;</li><li>&nbsp;&nbsp;</li><li>&nbsp;&nbsp;</li><li>&nbsp;&nbsp;</li><li>&nbsp;&nbsp;</li><li>&nbsp;&nbsp;</li>

            <li><a href="index.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="food.php">Food</a></li>
            <li><a href="inquiry.php">Inquiry</a></li>
			
			<?php if(isset($_SESSION['user'])=="") { ?>
            <li><a href="login.php">Login</a></li>
			<li><a href="signup.php">Sign-Up</a></li>
			<?php } else { ?>
			<li><a href="order_history.php">Order History</a></li>
			<li><a href="profile.php">My Profile</a></li>
			<li><a href="logout.php">Logout</a></li>
			<?php } ?>
<li><a href="contact.php">Contact us</a></li>
        </ul>
    </nav>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
         
        <a href="#" class="fab fa-instagram"></a>
          
    </div>

</div>