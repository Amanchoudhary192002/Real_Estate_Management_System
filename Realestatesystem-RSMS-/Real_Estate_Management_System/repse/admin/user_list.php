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
  <!-- <link rel="stylesheet" href="admin.css">-->
  <script src="js/click.js"></script>

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
          <a href="RealEstateList.php">
          <i class='bx bx-list-ul' ></i>
            <span class="links_name">Real Estate List</span>
          </a>
        </li>
        <li>
          <a href="user_list.php" class="active" >
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">User List </span>
          </a>
        </li>
        <li>
          <a href="image upload.php">
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
        <span class="dashboard">RealEstate Management System - User List</span>
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
    <p>  <h1> User List </h1>
    <form action="" method="#">
    <button  type="submit" class="btn btn-primary" >Add user </button>
       </form>
       
    </p>
      

      <table class="content-table">
  <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>user_type</th>
        <th>Pan Card no</th>
        <th>Gender</th>
        <th>Edit</th>
        <th>delete</th>
    </tr>
  </thead>
  <tbody>
        <?php
        $query = "SELECT * FROM user_form";
        $query_run = mysqli_query($conn,$query);
        if(mysqli_num_rows($query_run) >0)
        {
           foreach($query_run as  $row) {
               ?>
                <tr>
                   <td><?=$row['id']; ?></td>
                   <td><?=$row['name']; ?></td>
                   <td><?=$row['email']; ?></td>
                   <td><?=$row['moblieno']; ?></td>
                   <td><?=$row['addss']; ?></td>
                   <td><?=$row['user_type']; ?></td>
                   <td><?=$row['panid']; ?></td>
                   <td><?=$row['gender']; ?></td>
                   <td><a href="edit_user_list.php?id=<?=$row['id']; ?>" class="btn btn-success">Edit</td>

                   <td>
                     <form action="code.php" method="POST">
                      <button  type="submit" name="user_delete" value="<?=$row['id']; ?>" class="btn btn-danger">Delete</button>
                  </td>
                   </form>
                </tr>
               <?php
           }
        }
        else 
        {
            ?>
             <tr>
             <td colspan="9"> NO data Record Found  </td>
         </tr>
         <?php
        }
        ?>
      
      
    </tbody>
</table>
<style>
  

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #108c8a;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 8px 10px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #66b0ff;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #66b0ff;
}

</style>
          
       
    
       
</div>
      </div>
</section> 
   
           



      

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