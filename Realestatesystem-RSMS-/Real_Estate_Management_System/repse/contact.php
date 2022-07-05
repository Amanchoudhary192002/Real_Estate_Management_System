
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
    <link rel="stylesheet" href="style.css"> <!--stylelogin.ccs-->
    <script src="js/click.js"></script>

</head>
<body>
    
<!-- header section starts  -->

<header><?php include'nav_footer/header.php';?></header><br><br><br><br><br>


<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> us </h1>

<div class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <h3>phone number</h3>
        <p>+91-00000000000</p>
        <p></p>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <h3>email address</h3>
        <p></p>
        <p>admin09@gmail.com</p>
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













    <script>
    function login() {
    alert("Please Login");
    }
    </script>







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