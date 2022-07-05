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
   <title>user page</title>
   <link rel="stylesheet" href="user_style1.css">

   <!-- custom css file link 
   <link rel="stylesheet" href="css/style.css"> -->
   <header>
      <a href="#" class="logo"><span>real</span>Estate <span>Management</span> System</a>
        <nav class="navbar">
          <a href="user_page.php">home</a>
          <a href="#Properties">Properties</a>
        
          <a href="#contact">contact</a>
          <a href="#services">services</a>
          <a href="#">About</a>
           <span class="logo1" ><?php echo $_SESSION['user_name'] ?></span>
            <a href="logout.php" class="btn">logout</a>
          <!-- <a href="logout.php" class="logo"><span>User</span> Logout</span></a>-->
           <!--   <div class="container">-->
        </nav>
    </header>
 </head>
<body>
   <br><br><br><br><br>
   <section class="featured" id="featured">
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
            <a href="" onclick="login()" class="btn">request info</a>
            <a href="login_form.php" onclick="login()"  class="btn">view details</a>
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
            <a href="" onclick="login()" class="btn">request info</a>
            <a href="login_form.php" onclick="login()"  class="btn">view details</a>
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
            <a href="" onclick="login()" class="btn">request info</a>
            <a href="login_form.php" onclick="login()"  class="btn">view details</a>
           </div>
      </div>
</div>

    </div>
  </div>
</section>
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
                <a href="#">home</a>
                <a href="#">services</a>
                <a href="#">featured</a>
                <a href="#">agents</a>
                <a href="#">contact</a>
                <a href="admin_page.php">Admin</a>
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

        <div class="credit">created by <span> Aman choudhary </span> | all rights reserved! </div>

    </div>
    <?php
      
  $query  = "SELECT * FROM user_data ";
  $query_run =mysqli_query($conn,$query);

  $check_user_data =mysqli_num_rows($query_run)>0;
  
  if($check_user_data){

    while($row =mysqli_fetch_array($query_run)){
     echo $row['realesateid'];

    }
  }
  else{
    echo "NO REcoder Found";
  }

?>

</section>

</body>
</html>