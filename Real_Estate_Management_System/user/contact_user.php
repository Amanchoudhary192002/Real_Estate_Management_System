<?php
@include 'config.php';

session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
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
    <link rel="stylesheet" href="style.css"> <!--stylelogin.ccs-->


</head>

<header>

<a href="http://localhost/repse/display_image.php" class="logo"><span>real</span>Estate <span>Management</span> System</a>

<nav class="navbar" >
    <a href="http://localhost/repse/display_image.php">Property</a>
  <!---  <a href="#">agents</a>-->
    <a href="contact_user.php">contact</a>
    <a href="services_user.php">services</a>
    <a href="about_user.php">About</a>
    <span class="logo2" style="font-size:18px"><b><?php echo $_SESSION['user_name'] ?></b></span>
            <a href="http://localhost/repse/logout.php" class="btn">logout</a>
</nav>
</header> <br><br><br><br><br>
<body>

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> us </h1>

<div class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <h3>phone number</h3>
        <p>+91-00000000000</p>
        
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <h3>email address</h3>
        <p>admin@gmail.com</p>
        <p></p>
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







 <footer>
   <section class="footer">

    <div class="footer-container">

    <div class="box-container">

        <div class="box">
            <h3>branch location</h3>
            <a href="#">Daman</a>
            <a href="#">Mumbai</a>
            <a href="#">Slivasse</a>
            <a href="#">Diu</a>
            <a href="#">Suart</a>
        </div> 
        
        <div class="box">
            <h3>quick links</h3>
            <a href="http://localhost/repse/display_image.php">home</a>
            <a href="services_user.php">services</a>
            <a href="about_user.php">about</a>
            <a href="contact_user.php">contact</a>
            <a href="http://localhost/repse/admin.php">Admin</a>
        </div> 

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my favorite</a>
            <a href="#">my list</a>
        </div> 

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div> 

    </div>
   
    <div class="credit">created by <a href="https://g.dev/amanchoudhary"><span>Aman Choudhary</a>  </span>  | all rights reserved! </div>

</div>

  </section>

 </footer>


</body>
</html>