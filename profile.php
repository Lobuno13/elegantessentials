<?php
    session_start();
    if(!isset($_SESSION['fname'])  && !isset($_SESSION['lname'])){
        header("location: login.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Elegant Essentials</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <title><?php echo $_SESSION['fname'] ." ". $_SESSION['lname'] ?></title>
</head>
    
<body>


  <section id="header">
<a href="home.html"> <img src="img/Elegant Essentials.png" class=logo alt=""></a>       <!--logo image--> 
<div>
    <ul id="navbar">                                                                                                  <!--section of logo and list-->
        <li><a  href="home.html">Home</a></li>
        <li><a  href="shop.html">Shop</a></li>
       
     <div class="header-top">
      <div class="right">
        <li class="left">About Us<span class="icon-small" ><i class="fas fa-chevron-down"></i></span>
              <ul >
              <li ><a class="none" href="contact.html">Contact</a></li>
              <li><a class="none" href="stories.html">Achievements/Stories</a></li>
              <li ><a class="none" href="help.html" >FAQ's / Help</a></li>
              </ul>
        </li> 
      </div>
    </div>

        <li><a href="donations.html">Donations</a></li>       <!--submenu-->
        
        <div class="header-top1">
          <div class="right1">
            <li  class="glow"  class="left1" >Account<span class="icon-small1" ><i class="far fa-plus"></i></span>
                  <ul>
                  <li ><a class="none" href="register.html">Register</a></li>
                  <li><a class="none" href="login.html">LogIn</a></li>
                  </ul>
            </li> 
          </div>
        </div>
      
          <li><a href="basket.html"><i class="far fa-shopping-cart"></i></a></li>
       
    </ul>
</div>
</section>

<h2 class="title" >Profile Page</h2>
<h3 class="subtitle"><a href="home.html"> Home </a> > <span>Profile</span></h3>


<div class="co home">
    <h1>Welcome <span><title><?php echo $_SESSION['fname'] ." ". $_SESSION['lname'] ?></title></span></h1>
    <form action="#">
        <a href="logout.php">Logout</a>
    </form>
</div>



<footer class="section-p2">
    <div class="col">
    <img class="logo" src="img/Elegant Essentials.png" alt="">
    <h4>Contact</h4>
    <p><strong>Address: </strong> 178 Norwood Road, Tulse Hill, SE27 9AX, England, United Kingdom</p>
    <p><strong>Phone: </strong>+44 7465 674536</p>
    <p><strong>Hours: </strong>10:00 ~ 18:00 ; Mon ~ Sat</p>
    <div class="follow">
      <h4>Follow us</h4>
      <div class="icon">
       <a  href="https://www.facebook.com/oxfamGB" ><i class="fab fa-facebook-f"></i></a>
        <a  href="https://twitter.com/oxfamgb/"><i class="fab fa-twitter"></i></a>
        <a  href="https://www.instagram.com/oxfamgb/"><i class="fab fa-instagram"></i></a>
        <a   href="https://m.youtube.com/@OxfamGB/featured"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    </div>
    
    <div class="col">
      <h4>About</h4>
    <a href="about.html">About us</a>
    <a href="about.html">Delivery Information</a>
    <a href="about.html">Privacy Policy</a>
    <a href="about.html">Terms & Conditions</a>
    <a href="contact.html">Contact Us</a>
    </div>
    
    </div>
    
    <div class="col">
      <h4>My Account</h4>
    <a href="signin.html">Sign In</a>
    <a href="login.html">Log In</a>
    <a href="basket.html">View Cart</a>
    <a href="track.html">Track My Order</a>
    </div>
    
    
    <div class="coldownload">
      <h4>Secured Payment Gateways</h4>
      <img src="img/w1.png" alt="">
    </div>
    
    <div class="copyright">
      <p>© 2024 Elegant Essentials</p>
    </div>
    
    </footer>
    



    



</body> 


<script src="script.js"></script>
     
</html>