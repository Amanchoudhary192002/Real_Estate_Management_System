<?php

@include 'C:\xampp\htdocs\repse\admin\config.php';

if(isset($_POST['submit'])){


   
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['pho_no']);
   $subject	 = mysqli_real_escape_string($conn, $_POST['subject']);
   


   $select = " SELECT * FROM contact WHERE name = '$name' && email = '$email' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

   }else{
         $insert = "INSERT INTO contact(name,email,pho_no,subject) VALUES('$name','$email','$number','$subject')";
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
   <title>Forgot Password form</title>
  
   <!-- custom css file link  -->
   <link rel="stylesheet" href="loginstyle.css">

</head>
<body> 

<div class="form-container">

   <form action="" method="post">
      <h3>Forgot Password Form</h3>
      
       <select name="subject" id="">
          <option  name="subject">Forgot Password</option>
      </select>
      <input type="text" name="name" required placeholder="Enter your Name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="text" pattern="[789][0-9]{9}" name="pho_no" maxlength="10" required placeholder="Enter your Phone No">
      <input type="submit" onclick="login()" name="submit" value="Submit" class="form-btn">
      
      
     
      <p> <a href="index.php">Go to website </a></p>
   </form>  
</div>
<script>
 function login() {
    alert("Your Forgot Password Will be receive 48 hours your Email ID ");
    };
  
    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
      deleteLinks[i].addEventListener('click', function(event) {
          event.preventDefault();
    
          var choice = confirm(this.getAttribute('data-confirm'));
    
          if (choice) {
            window.location.href = this.getAttribute('href');
          }
      });
    }
    
    
</script>

</body>
</html>