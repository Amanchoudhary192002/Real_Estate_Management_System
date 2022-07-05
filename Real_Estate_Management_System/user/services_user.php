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

<a href="#" class="logo"><span>real</span>Estate <span>Management</span> System</a>

<nav class="navbar" >
    <a href="http://localhost/repse/display_image.php">Property</a>
  <!---  <a href="#">agents</a>-->
    <a href="contact_user.php">contact</a>
    <a href="services_user.php">services</a>
    <a href="about_user.php">About</a>
    <span class="logo2" style="font-size:18px"><b><?php echo $_SESSION['user_name'] ?></b></span>
            <a href="http://localhost/repse/logout.php" class="btn">logout</a>
</nav>
</header> <br><br><br><br>
<body>


<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">
    
        <div class="box">
            <img src="s-1.png" alt="">
            <h3>buying home</h3>
            <p>Buying a home involves finding the property, securing financing, making an offer, getting a home inspection, and closing on the purchase.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="s-2.png" alt="">
            <h3>Asset</h3>
            <p>An asset is a resource with economic value that an individual, corporation, or country owns or controls with the expectation that it will provide a future benefit.</p>
            <a href="#" class="btn">learn more</a>
        </div>

        <div class="box">
            <img src="s-3.png" alt="">
            <h3>selling home</h3>
            <p>Short selling involves borrowing a security and selling it on the open market. You then purchase it later at a lower price, pocketing the difference after repaying the initial loan.</p>
            <a href="#" class="btn">learn more</a>
        </div>

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