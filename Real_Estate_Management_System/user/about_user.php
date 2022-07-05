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
</header> 
<body>

<section class="home" id="home">

<form action="">
    

    <div class="slideshow-container">
 <div class="slideshow-container">

<div class="mySlides fade">

<img src="about-img.jpg" width="950" height="500" alt=""><br><br>
<h2>Real estate is real property that consists of land and improvements, which include buildings, fixtures, roads, structures, and utility systems. Property rights give a title of ownership to the land, improvements, and natural resources such as minerals, plants, animals, water, etc.</h2>
<br><h1>Types of Real Estate</h1>
<p style="font-size:15px"><br>
There are several types of real estate, each with a unique purpose and utility. The main categories are:
</p><br>
<p>
    <h1>1.   Land</h1>
    <h1>2.   Commercial</h1>
    <h1>3.   Residential</h1>
</p>
<p style="font-size:15px">
<b><br>
For anyone looking to understand how the industry works and what each of the major categories represents, the explanations below will be a helpful guide.
</b>
</p><br>
<p style="font-size:15px" ><b > #1 Land</b></p><p style="font-size:15px">
Land is the baseline for all types of real property. Land typically refers to undeveloped property and vacant land. Developers acquire land and combine it with other properties (called assembly) and rezone it so they can increase the density and increase the value of the property.
</p>
<br>
<p style="font-size:15px" ><b >#2 Residential</b></p><p style="font-size:15px">
Residential real estate consists of housing for individuals, families, or groups of people. This is the most common type of estate and is the asset class that most people are familiar with. Within residential, there are single-family homes, apartments, condominiums, townhouses, and other types of living arrangements.</p>
<br>
<p style="font-size:15px" ><b >#3 Commercial</b></p><p style="font-size:15px">
Commercial property refers to land and buildings that are used by businesses to carry out their operations. Examples include shopping malls, individual stores, office buildings, parking lots, medical centers, and hotels.</p>
<br>
<center>
<h1 style="font-size:20px">Advantages of Realestate services</h1></center>
<p style="font-size:18px"><b>1. Registry process within (4 week)</b></p>
<p style="font-size:18px"><b>2. Within 48 hours Contact Back</b></p>
<p style="font-size:18px"><b>3. No Manual Work</b></p>
<p style="font-size:18px"><b>4. Brokerage</b></p>
<p style="font-size:18px"><b>5. Property management</b></p>
<p style="font-size:18px"><b>6. Lending</b></p>
<p style="font-size:18px"><b>7. Professional services (law, accounting, etc.)</b></p>




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