<?php

@include 'C:\xampp\htdocs\repse\admin\config.php';

if(isset($_POST['submit'])){


   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['pho_no']);
   $subject	 = mysqli_real_escape_string($conn, $_POST['subject']);
   $subject1	 = mysqli_real_escape_string($conn, $_POST['message_1']);


   $select = " SELECT * FROM contact WHERE name = '$name' && email = '$email' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

   }else{
         $insert = "INSERT INTO contact(name,email,pho_no,subject,message_1) VALUES('$name','$email','$number','$subject','$subject1')";
         mysqli_query($conn, $insert);  
      }

    }
?>

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
    <script src="js/click.js"></script>

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
  <img src="images/baner2.jpg" width="950" height="500" alt="">
  <div class="text">  Land Selleing </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/baner3.png" width="950" height="500" alt="">
  <div class="text">home selling </div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


       

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
         <img src="images/1001.jpg" alt="">
           <div class="info">
             <h3>3 days ago</h3>
             
            </div>
         </div>
       <div class="content">
             <div class="price">
              <h3>Price: ₹ 78.8 Lac+ Govt Cha</h3>
            </div>
         <div class="location">
            <h3>Residential Apartment For Sale</h3>
            <p>Location Bhimrad, Surat, Gujarat</p>
          </div>
          <div class="details">
             <h3>Desc :- 3 Bedrooms , 3 Bathrooms, 1 Balcony With Store Room Located At Bardoli, Surat, Gujarat,</h3>
           </div>
         <div class="buttons">
           <!--  <a href="" onclick="login()" class="btn">request info</a>-->
            <a  onclick="login()"  class="btn">View Details</a>
           </div>
      </div>
</div>


<div class="box">
        <div class="image-container">
         <img src="images/1002.jpg" alt="">
           <div class="info">
             <h3>3 days ago</h3>
             
            </div>
         </div>
       <div class="content">
             <div class="price">
              <h3> ₹ 45 Lac @ 1,523 Per</h3>
            </div>
         <div class="location">
            <h3>Residential Land For Sale</h3>
            <p>location In A/20 Vrundavan Park, , Bardoli, , Surat, Gujarat</p>
          </div>
          <div class="details">
             <h3>Desc :-Residential Land That Will Help You To Live In Your Dream House Designed By You! Located </h3>
           </div>
         <div class="buttons">
            <!-- <a href="" onclick="login()" class="btn">request info</a>-->
            <a href="#" onclick="login()"  class="btn">View Details</a>
           </div>
      </div>
</div>
<div class="box">
        <div class="image-container">
         <img src="images/1005.jpeg" alt="">
           <div class="info">
             <h3>3 days ago</h3>
             
            </div>
         </div>
       <div class="content">
             <div class="price">
              <h3>₹ 12.0 Lac</h3>
            </div>
         <div class="location">
            <h3>Sport Complex Sale SSR College</h3>
            <p>SSR College Of Pharmacy,Silvassa, Dadra And Nagar Haveli And Daman And Diu</p>
          </div>
          <div class="details">
             <h3>Dec :-Our Asset Includes 10 Badminton Courts, 25 Meters Heated Swimming Pool, 4 Snooker Tables, 2 Table Tennis Tables etc </h3>
           </div>
         <div class="buttons">
            <!-- <a href="" onclick="login()" class="btn">request info</a>-->
            <a href="#" onclick="login()"  class="btn">View Details</a>
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
            <p>Buying a home involves finding the property, securing financing, making an offer, getting a home inspection, and closing on the purchase.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-2.png" alt="">
            <h3>Asset</h3>
            <p>An asset is a resource with economic value that an individual, corporation, or country owns or controls with the expectation that it will provide a future benefit.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="images/s-3.png" alt="">
            <h3>selling home</h3>
            <p>Short selling involves borrowing a security and selling it on the open market. You then purchase it later at a lower price, pocketing the difference after repaying the initial loan.</p>

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
        <p>+91-0000000000</p>
        
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <h3>email address</h3>
        <p>admin09@gmail.com</p>
        <p>admin123</p>
    </div>

     <div class="icons">
        <img src="images/icon-3.png" alt="">
        <h3>office address</h3>
        <p>India</p>
    </div>

</div>

<div class="row">

    <form action="" method="post">
        <div class="inputBox">
            <input type="text" name="name" placeholder="name">
            <input type="text" pattern="[789][0-9]{9}" name="pho_no" maxlength="10" required placeholder="Enter Moblie no">

        </div>
        <div class="inputBox">
        <input type="email" name="email" required placeholder="Enter email @xyz.com">
        <input type="text" name="subject" required maxlength="200"  placeholder="subject">
        </div>
        <textarea name="message_1"  placeholder="message" rows = "5" cols = "40">  </textarea> 
        <input type="submit" name="submit" value="send message" class="btn">
    </form>
    
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30711243.17762776!2d64.4398422293091!3d20.011408266548177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1657003262235!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
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