<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="Serial_NO copy.css">
   </head>
   <header>
      <?php include 'C:\xampp\htdocs\repse\nav_footer\user_header.php';?>
    </header>
<body>

            <?php
                 require 'C:\xampp\htdocs\repse\admin\config.php'; 
                  if(isset($_GET['id']))
                  {
                    $user_id = $_GET['id'];
                    $Serial_NO = "SELECT * FROM user_data WHERE id='$user_id'" ;
                    $users_run = mysqli_query($conn,$Serial_NO);
                    if(mysqli_num_rows($users_run)>0)
                    {
                        foreach($users_run as $Serial_NO){

                       
                        ?>

<div class="container">
    
    <div class="col-lg-10 border  main-section bg-white">
    <a href="display_image.php"  class="btn"> Back</a>
        <div class="row hedding m-0 pl- pt-0 pb-">
           <B> RealEstate ID : <?php  echo $Serial_NO['realesateid'] ?></B>
            </div>
        <div class="row m-4">
            <div class="col-lg-4 left-side-product-box pb-2">
            <img src=admin/<?php echo $Serial_NO['Profile']; ?> style="width:1200px;height:600px;" class="border p-3">
                <span class="sub-img"></span>
            </div>
             <b style="font-size:22px">  Details</b><br>
            <div class="col-lg-12">
                <div class="right-side-pro-detail border p-5 m-0">
                    <div class="row">
                    
                        <div class="col-lg-12">
                            
                            <h3 style="font-size:35px"><?php  echo $Serial_NO['tittle'] ?></h3>
                            <h2 class="m-0 p-0" style="font-size:22px"><b> Area: </b><?php  echo $Serial_NO['area'] ?></h2>
                            <h2 class="m-0 p-0" style="font-size:22px"><b> Type: </b><?php  echo $Serial_NO['purpose'] ?></h2>
                            <h2 class="m-0 p-0" style="font-size:22px"><b> Address: </b><?php  echo $Serial_NO['Address'] ?></h2>
                        </div>
                        <div class="col-lg-12">
                            
                            <h2 class="m-0 p-0" style="font-size:22px"><b> Status : </b><?php  echo $Serial_NO['status'] ?></h2>
                            <p class="m-0 p-0 price-pro">Price: <?php  echo $Serial_NO['sale_price'] ?></p>
                            <hr class="p-0 m-0">
                        </div>
                        <div class="col-lg-12 pt-2">
                            <h5 style="font-size:22px">Desprication Detail</h5>
                            <span><?php  echo $Serial_NO['descr'] ?></span>
                            <hr class="m-0 pt-2 mt-2">
                        </div><br>
                        <div><br>
                        <h5  style="font-size:22px">Location GPRS </h5></div>
                        <hr class="p-0 m-0">
                        <iframe src="<?php echo $Serial_NO['location']; ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div>
                        <hr class="m-0 pt-2 mt-2">
                        <br>
                        <h5 style="font-size:33px"><center><b>Inquiry Form</b> </center></h5>
                        <B style="font-size:22px"> RealEstate ID : <?php  echo $Serial_NO['realesateid'] ?></B>

                        <div class="row">
    
                           <?php  include'C:\xampp\htdocs\repse\admin\inquiry.php';?>


                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </div>
</div>
                        




                        <?php
                        }
                     }
                     else{
                        ?>
                        <h4>No record found</h4>
                        <?php
                      }

                    }
                     ?>

</body>
</html>                     