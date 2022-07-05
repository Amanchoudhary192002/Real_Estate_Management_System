<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Management System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link --> 
    <link rel="stylesheet" href="style.css"> 
    

</head>
<body>
    
<!-- header section starts  index.html calling -->

<header> <?php include'nav_footer/header.php';?></header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">

    <form action="">
        <marquee style="font-size: 35px;" behavior="scroll" scrollamount="15"  direction="left">Welcome to  RealEstate Management System</marquee>

        <div class="slideshow-container">
     <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/img-1.jpg" width="950" height="500" alt="">
  <div class="text">inter desginer</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="baner2.jpg" width="950" height="500" alt="">
  <div class="text">  Land Selleing </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="baner3.png" width="950" height="500" alt="">
  <div class="text">home selling </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
       

    </form>

</section>

<!-- home section ends -->
<!-- start image silde -->
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/* card image style*/

</style>

<!-- start image silde -->

<!-- featured section starts  -->
  

<section class="featured" id="featured">

    <h1 class="heading"> <span>properties</span> </h1>
     
    <div class="box-container">
      <div class="box">
        <div class="image-container">
         <img src="images/img-1.jpg" alt="">
           <div class="info">
             <h3>3 days ago</h3>
             <h3>for rent</h3>
            </div>
         </div>
       <div class="content">
             <div class="price">
              <h3>$25,0000</h3>
            </div>
         <div class="location">
            <h3>Card title</h3>
            <p>Location Daman And Diu Pincode:- 396215 India</p>
          </div>
          <div class="details">
             <h3>Desc</h3>
           </div>
         <div class="buttons">
           <!-- <!-- <a href="" onclick="login()" class="btn">request info</a>-->-->
            <a href="login_form.php" onclick="login()"  class="btn">Login</a>
           </div>
      </div>
</div>


<div class="box">
        <div class="image-container">
         <img src="images/img-2.jpg" alt="">
           <div class="info">
             <h3>3 days ago</h3>
             <h3>for rent</h3>
            </div>
         </div>
       <div class="content">
             <div class="price">
              <h3>$25,0000</h3>
            </div>
         <div class="location">
            <h3>Card title</h3>
            <p>Daman And Diu Pincode:- 396215 India</p>
          </div>
          <div class="details">
             <h3>Desc</h3>
           </div>
         <div class="buttons">
            <!-- <a href="" onclick="login()" class="btn">request info</a>-->
            <a href="login_form.php" onclick="login()"  class="btn">Login</a>
           </div>
      </div>
</div>
<div class="box">
        <div class="image-container">
         <img src="images/img-3.jpg" alt="">
           <div class="info">
             <h3>3 days ago</h3>
             <h3>for rent</h3>
            </div>
         </div>
       <div class="content">
             <div class="price">
              <h3>$25,0000</h3>
            </div>
         <div class="location">
            <h3>Card title</h3>
            <p>Daman And Diu Pincode:- 396215 India</p>
          </div>
          <div class="details">
             <h3>Desc</h3>
           </div>
         <div class="buttons">
            <!-- <a href="" onclick="login()" class="btn">request info</a>-->
            <a href="login_form.php" onclick="login()"  class="btn">Login</a>
           </div>
      </div>
</div>
</div>

</div>



    
</section>

<!-- featured section ends -->




<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/s-1.png" alt="">
            <h3>buying home</h3>
            <p>If you are ready to buy a house you will need to consider various factors to determine if you can afford it—ranging from income to mortgage rates.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>Asset</h3>
            <p>If you are ready to buy a house you will need to consider various factors to determine if you can afford it—ranging from income to mortgage rates.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>selling home</h3>
            <p>If you are ready to buy a house you will need to consider various factors to determine if you can afford it—ranging from income to mortgage rates.</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- services section ends -->
<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>
    
    <div class="icons-container">
    
        <div class="icons">
            <img src="images/icon-1.png" alt="">
            <h3>phone number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>
    
        <div class="icons">
            <img src="images/icon-2.png" alt="">
            <h3>email address</h3>
            <p>decentaman09@gmail.com</p>
            <p>admin09@gmail.com</p>
        </div>
    
         <div class="icons">
            <img src="images/icon-3.png" alt="">
            <h3>office address</h3>
            <p>Daman and Diu pincode:- 396215 india</p>
        </div>
    
    </div>
    
    <div class="row">
    
        <form action="">
            <div class="inputBox">
            
                <input type="text" placeholder="name">
                <input type="number" placeholder="number">
            </div>
            <div class="inputBox">
                <input type="email" placeholder="email">
                <input type="text" placeholder="subject">
                <input type="text" placeholder="UQ#ID">
            </div>
            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send message" class="btn">
        </form>
    
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7479.130640562866!2d72.88722622411956!3d20.400804695367434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0d01890b94a19%3A0x1800fd1bbf2ca351!2sDabhel%2C%20Vapi%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1651414669045!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
       </div>
    
    </section>
    
    
    <!-- contact section ends -->
<!-- footer section starts  -->
<footer>
    <?php include'nav_footer/footer.php'; ?>
        </footer>
    

<!-- javascript part --> 
<script>

let menu = document.querySelector('#menu-bars');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>


</body>
</html>