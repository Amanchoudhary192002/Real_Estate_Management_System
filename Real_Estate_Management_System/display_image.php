
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>
   <header>
      <?php include 'C:\xampp\htdocs\repse\nav_footer\user_header.php';?>
    </header>
<body><br><br><br><br><br>
<form action="">
   <div class="container py-4">
   <div class="row mt-4">
     <?php
  require 'C:\xampp\htdocs\repse\admin\config.php'; 
  $query  = "SELECT * FROM user_data ";
  $query_run =mysqli_query($conn,$query);

  $check_user_data =mysqli_num_rows($query_run)>0;
  
  if($check_user_data){

    while($row =mysqli_fetch_array($query_run)){
      
      ?>
      <div class="col-md-4">
    <div class="card" sstyle="width: 300px;">
    <img src=admin/<?php echo $row['Profile']; ?> width="200px" height="200px" class="card-img-top" alt="...">
    <div class="card-body ">
        <h5 class="card-title " style="font-size:25px"><?php echo $row['tittle']; ?></h5>
        <b class="card-title text-center" style="font-size:22px">Price: <?php echo $row['sale_price']; ?></b><br>
        <b class="card-title text-center" style="font-size:22px">Type: <?php echo $row['purpose']; ?></b>
        <p class="card-text" style="font-size:16px"><b>description: </b><?php echo $row['shot_descr']; ?></p>
        <center>   <a href="Serial_NO.php?id=<?=$row['id']; ?>"  class="btn">View Details</a></center>
    </div>
</div>
      </div>
      </form>
<?php

     

    }
  }
  else{
    echo "NO Recoder Found";
  }

?>
   
   


</body>
</html>
<!--  shor_descr maxlength="252" -->
