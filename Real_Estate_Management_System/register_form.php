<?php

@include 'admin/config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $panid = mysqli_real_escape_string($conn, $_POST['panid']);
   $addss = mysqli_real_escape_string($conn, $_POST['addss']);
   $moblieno = mysqli_real_escape_string($conn, $_POST['moblieno']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, gender, panid , addss , moblieno , user_type) VALUES('$name','$email','$pass','$gender','$panid','$addss','$moblieno','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="loginstyle.css">
<!--   <link rel="stylesheet" href="style.css">-->

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p class="date"><b>Full name</b></p>
      <input type="text" name="name" required placeholder="Enter Full name">

      <p class="date"><b>Email</b></p>
      <input type="email" name="email" required placeholder="Enter email @xyz.com">

      <p class="date"><b>Select Gender</b></p>
        <select name="gender">
        <option value="#" disabled >NULL</option>
         <option name="gender" value="male">Male</option>
         <option name="gender" value="female">female</option>
         </select>
         


         <p class="date"><b>Address</b></p>
         <!--<input type="textarea" name="addss" required placeholder="Enter address"> -->      
            <textarea name="addss" rows = "5" cols = "40" maxlength = "83">  </textarea>   
            
            

            

         <p class="date"><b>Pan Card No </b></p>
         <input type="text" name="panid" maxlength="10" required placeholder="Enter your Pan card No ABCTY1234D">


         <p class="date"><b>Moblie No without (+91)</b></p>
         <input type="text" pattern="[789][0-9]{9}" name="moblieno" maxlength="10" required placeholder="Enter Moblie no">
         <p class="date"><b>Password</b></p>
      <input type="password" name="password" required placeholder="Enter password">
      <p class="date"><b>Confirm Password </b></p>
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <p class="date"><b>Choice User</b></p>
      <select name="user_type">
         <option value="user">user</option>
        <!--  <option value="agent">agent</option>
         <option value="admin">admin</option>-->
      </select>

    

      

      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">login now</a></p>
      <p> <a href="index.php">Go to website </a></p>


   </form>

</div>

</form>
<!-- this css add borader name like full name -->
      <style>
          p.date {
          text-align: left;
         }
          textarea {
         width: 461px;
         height: 116px;
         border:.1rem solid rgba(0,0,0,.1);
         padding: 10px 15px;
         font-size: 17px;
         margin: 8px 0;
         background: #eee;
         border-radius: 5px;
         }
       </style> 

        

</body>
</html>