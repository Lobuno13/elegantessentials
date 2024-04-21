<!DOCTYPE html>
<html lang="en">
    <head>
       <title>Elegant Essentials</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        
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
                  <li ><a class="none" href="register.php">Register</a></li>
                  <li><a class="none" href="login.php">LogIn</a></li>
                  </ul>
            </li> 
          </div>
        </div>
      
          <li><a href="basket.html"><i class="far fa-shopping-cart"></i></a></li>
       
    </ul>
</div>
</section>

<h2 class="title" >Registration Page</h2>
<h3 class="subtitle"><a href="home.html"> Home </a> > <span>Register</span></h3>


<div class="loading-animation">
  <div class="loading-dots" style="--delay: 0.2s"></div>
  <div class="loading-dots" style="--delay: 0.3s"></div>
  <div class="loading-dots" style="--delay: 0.4s"></div>
</div>

<section id="container" class="container" >
    <div  class="form-container sign-up ">
      <form action="#" method="post" autocomplete="off">
        <h1>Log In</h1>
        <div class="error-txt">Error</div>

        <input type="email" name="email" placeholder="Email">

        <div class="input-box4">
          <input type="password" name="password" placeholder="Password" id="password">
        <img id="eyeicon" src="img/eye-slash.svg">  
        <p id="wms1">Password is<span id="strength1"></span></p>
      </div>
      
        <a href="forgetpassword.html">Forget Your Password?</a>
        <button>Log In</button>
    </form>
    </div>
  <div   class="form-container log-in">
    <form action="#" method="post" autocomplete="off">
      <h1>Create Account</h1>
      <div class="error-txt"></div>
      <div class="name-details">
      <div class="field input">         
        <input type="text" name="fname" placeholder="First Name" required>
      </div>
      <div class="field input">
      <input type="text" name="lname" placeholder="Last Name" required>
    </div>
      </div>
      <div class="field input">
        <div class="input-box3">
      <input type="email" name="email" placeholder="Email" required>
        </div>
    </div>
        
      <div class="field input">
        <div class="input-box">
        <input type="password" name="password" placeholder=" New Password" id="password1" required>
      <img id="eyeicon1" src="img/eye-slash.svg"> 
      <p id="wms">Password is<span id="strength"></span></p> 
        </div>
      </div>
      <div class="field input">
      <div class="input-box1">
        <input type="password" name="cpassword" placeholder="Confirm password"  id="password2"  required>
      <img id="eyeicon2" src="img/eye-slash.svg"> 
      </div>
    </div>
    <div class="field button">
                    <input type="submit" name="submit" value="Register" required>
    </div>
     
  </form>
    </div>
  
     <div class="toggle-container">
     <div class="toggle">
         <div class="toggle-panel toggle-left">
       <h1>Hello Friend!</h1>
      <p>Register with your personal details to use al of site features</p>
      <button class="hidden" id="signin">Register</button>
        </div>
        <div class="toggle-panel toggle-right">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
        <button  class="hidden"  id="register" >Log In</button>
      </div>
   </div>
     </div>
</section>


<script>
const form = document.querySelector(".log-in form"),
button = form.querySelector(".button input"),
errorTxt = form.querySelector(".error-txt");
const loadinDot = document.querySelector(".loading-animation");

form.onsubmit = (e)=>{
e.preventDefault();
}

button.onclick = ()=>{
let xhr = new XMLHttpRequest();
xhr.open("POST", "php/signup.php", true);
xhr.onload = ()=>{
if(xhr.readyState === XMLHttpRequest.DONE){
    if(xhr.status === 200){
        let response = xhr.response;
        if(response === "successful"){
          
        loadinDot.style.display = "inline-flex";
        setInterval(()=>{
            window.location.href = "login.php";
            }, 3000)
        }else{
            errorTxt.style.display = "block";
            errorTxt.textContent = response;
        }
    }
}
}

let formData = new FormData(form);
xhr.send(formData);
}
</script>

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
   
<!--Js to see if password is weak or not for create account-->
<script>

  var pass = document.getElementById("password1");
  var msg = document.getElementById("wms");
  var str = document.getElementById("strength");
  
  pass.addEventListener('input', () => {
    if(pass.value.length > 0){
      msg.style.display = "block";
    }
    else{
      msg.style.display = "none";
    }
    if(pass.value.length < 4){
      str.innerHTML = " Weak";
      pass.style.borderColor = "#ff5925";
      msg.style.color = "#ff5925"
    }
    else if(pass.value.length >= 4 && pass.value.length < 8){
      str.innerHTML = " Medium";
      pass.style.borderColor = "#c2dc00";
      msg.style.color = "#c2dc00"
    }
    else if(pass.value.length >= 8){
      str.innerHTML = " Strong";
      pass.style.borderColor = "#26d730";
      msg.style.color = "#26d730"
    }
  })
  
</script>
  
  
  
  
  
      
      <!--Js for show/hide password to work for create account -->
  <script>
  let eyeicon1 = document.getElementById("eyeicon1");
  let password1 = document.getElementById("password1");
  
  let eyeicon2 = document.getElementById("eyeicon2");
  let password2 = document.getElementById("password2");
  
  eyeicon1.onclick = function(){
      if(password1.type === "password"){
          password1.type = "text";
          eyeicon1.src = "img/eye-open.jpg";
      } else {
          password1.type = "password";
          eyeicon1.src = "img/eye-slash.svg";
      }
  }
  
  eyeicon2.onclick = function(){
      if(password2.type === "password"){
          password2.type = "text";
          eyeicon2.src = "img/eye-open.jpg";
      } else {
          password2.type = "password";
          eyeicon2.src = "img/eye-slash.svg";
      }
  }
   
    </script>
  <!--Js for show/hide password-->
  <script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");
    
    
    eyeicon.onclick = function(){
        if(password.type === "password"){
            password.type = "text";
            eyeicon.src = "img/eye-open.jpg";
        } else {
            password.type = "password";
            eyeicon.src = "img/eye-slash.svg";
        }
    }
  </script>
    






   

</body> 
<script src="script.js"></script>

</html>