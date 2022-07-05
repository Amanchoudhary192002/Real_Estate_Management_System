<?php
@include 'config.php';

session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="realestate.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

<body>
<div class="sidebar">
    <div class="logo-details">
     <!-- <i class='bx bxl-c-plus-plus'></i>-->
      <span class="logo_name">Admin Pannel </span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="admin_page.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="RealEstateList.php" >
          <i class='bx bx-list-ul' ></i>
            <span class="links_name">Real Estate List</span>
          </a>
        </li>
        <li>
          <a href="user_list.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">User List </span>
          </a>
        </li>
        <li>
          <a href="#"class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Add Real Estate </span>
          </a>
        </li><hr> 
        <center> <b style="color: white;"  >Maintence</b></center>
       
        <li>
          <a href="inqui.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">Inquire</span>
          </a>
        </li>
        <li>
          <a href="contactform.php">
            <i class='bx bx-message' ></i>
            <span class="links_name">contact Form</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">RealEstate Management System - Add Real Estate </span>
      </div>
      
      <div class="profile-details">
        <img src="1.png" alt="">
        <span class="admin_name"><span><?php echo $_SESSION['admin_name'] ?></span></span>
      <!--  <option value="">My Account </option>
        <i class='bx bx-chevron-down'></i>-->
      </div>
    </nav>
<div>
<section>
         <div class="sales-boxes">
        <div class="recent-sales box">           
    <p>  <h1>Add Real Estate List </h1>
    
       <!--<form action="#" method="#">
    <button  type="submit" class="btn btn-primary" >Add Real Estate List </button>
       </form>-->
    </p>

    <div class="myform">
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <label>Unqui ID</label>
                <input type="text" required maxlength="4" class="form-control" name="realesateid">
            </div>
            <div class="form-group">
                <label>Tittle</label>
                <input type="text" required class="form-control" name="tittle">
            </div>
            <div class="form-group">
                <label>Area Sq.ft</label>
                <input type="text" required class="form-control" name="area">
            </div>
            <div class="form-group">
                <label> Location GPRS Embed a map link</label>
                <input type="text" required class="form-control" name="location">
            </div>
            <div class="form-group">
                <label> Address</label>
                <input type="text" required class="form-control" name="Address">
            </div>  
            <div class="form-group col-md-4">
               <label for="inputState">Purpose</label>
                 <select id="inputState" required name="purpose" class="form-control">
                    <option selected>Choose...</option>
                      <option>Commercial</option>
                      <option>Residential</option>
                      <option>Land</option>
                     </select>
              </div>
            <div class="form-group">
                <label>Sale Price </label>
                <input type="text" required class="form-control" name="sale_price">
            </div>
        <!--    <div class="form-group">
                <label>Status </label>
                <input type="text" class="form-control" name="status">
            </div>-->
            <div class="form-group col-md-4">
               <label for="inputState">Status</label>
                 <select id="inputState" required name="status" class="form-control">
                    <option selected>Choose...</option>
                      <option>Available</option>
                      <option>Unavailable</option>
                     </select>
              </div>
            <div class="form-group">
                <label>Short Desprition </label>
                <input type="text" required class="form-control" maxlength="200" name="shot_descr">
            </div>
            <div class="form-group">
                <label>Desprition </label>
                <input type="text" required class="form-control" name="descr">
            </div>
            
            <div class="form-group">
                <label> Upload image</label>
                <input type="file" required class="form-control-file" name="profile">
            </div>

            <div class="submit-btn">
                <button type="submit" class="btn btn-primary" name="upload">Upload</button>

            </div>
        </form>
    </div>
    <?php

      if(isset($_POST['upload']))
      {
         $image_loc=$_FILES['profile']['tmp_name'];
         $img_name=$_FILES['profile']['name'];
         $unname=$_POST['realesateid'];
         $tittle =$_POST['tittle'];
         $area =$_POST['area'];
         $location =$_POST['location'];
         $purpose =$_POST['purpose'];
         $sale_price =$_POST['sale_price'];
         $status =$_POST['status'];
         $descr =$_POST['descr'];
         $shot_descr =$_POST['shot_descr'];
         $Address =$_POST['Address'];
         $imag_ext=pathinfo($img_name,PATHINFO_EXTENSION);


         $img_size=$_FILES['profile']['size']/(1024*1024);

          $img_des="Uploaded/".$unname.".".$imag_ext;

          if(($imag_ext!='jpg') && ($imag_ext!='png') && ($imag_ext!='jpeg') && ($imag_ext!='webp'))
          {
            echo"<script>alert('Invalid Image Extensio');</script>";
            exit();
          }

          if($img_size>3)
          {
            echo "<script>alert('image upload less than 3MB');</script>"; 
            exit();
          }
 

         $query="INSERT INTO `user_data`( `realesateid`, `Profile`, `tittle`, `area`, `location`, `purpose`, `sale_price`, `status`, `descr`, `shot_descr`, `Address`) VALUES ('$unname','$img_des','$tittle','$area','$location','$purpose','$sale_price','$status','$descr','$shot_descr','$Address')";
         if(mysqli_query($conn,$query))
         {
            move_uploaded_file($image_loc,$img_des);
            echo"<script>alert('successful');</script>";

         }
         else{
             echo"<script> alert('unsuccessful');</script>";

         }

   }
?>
<script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

<footer>
<div class="bg-light py-4">
      <div class="container text-center">
      <center> 
      <div class="credit">created by <span> Aman choudhary </span> | all rights reserved! </div>
      </center> 
      </div>
    </div>
</footer>

</body>

</html>