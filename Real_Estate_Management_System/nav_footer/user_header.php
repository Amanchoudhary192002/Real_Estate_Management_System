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
   <link rel="stylesheet" href="user_style1_copy.css">
   </head>
     
   
<body>

<a href="#" class="logo1" style="text-decoration :none" ><span>real</span>Estate <span>Management</span> System</a>
        <nav class="navbar1">
          <a  href="display_image.php" style="text-decoration :none">Property</a>        
          <a href="user\contact_user.php" style="text-decoration :none" >contact</a>
          <a href="user\services_user.php" style="text-decoration :none">services</a>
          <a href="user\about_user.php" style="text-decoration :none">About</a>
           <span class="logo2" ><?php echo $_SESSION['user_name'] ?></span>
            <a href="logout.php" class="btn">logout</a>
          <!-- <a href="logout.php" class="logo"><span>User</span> Logout</span></a>-->
           <!--     href="display.css"> <div class="container">-->
</nav>
</body>
</html>