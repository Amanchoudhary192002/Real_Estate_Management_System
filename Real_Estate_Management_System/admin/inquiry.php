<?php

@include 'config.php';

if(isset($_POST['submit'])){


   $realesateid = mysqli_real_escape_string($conn, $_POST['realesateid']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $subject	 = mysqli_real_escape_string($conn, $_POST['subject']);
   $subject1	 = mysqli_real_escape_string($conn, $_POST['message']);
   $City	 = mysqli_real_escape_string($conn, $_POST['City']);
   $State	 = mysqli_real_escape_string($conn, $_POST['State']);
   $Pincode	 = mysqli_real_escape_string($conn, $_POST['Pincode']);
  // $message = mysqli_real_escape_string($conn, $_POST['message']);


   $select = " SELECT * FROM inquire WHERE realesateid = '$realesateid' && name = '$name' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

   }else{
         $insert = "INSERT INTO inquire(realesateid, name,email,number,subject,message,City,Pincode,State) VALUES('$realesateid','$name','$email','$number','$subject','$subject1','$City','$Pincode','$State')";
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
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
<!--   <link rel="stylesheet" href="style.css">-->

</head>
<body>
 <section class="contact" id="contact">
    
    
    <div class="row">
    
        <form action="" method="post">
            <div class="inputBox">
                 
                <input type="text" name="name" placeholder="Please Enter Name <?php echo $_SESSION['user_name'] ?>">
                <input type="text" pattern="[789][0-9]{9}" name="number" maxlength="10" required placeholder="Enter Moblie no">
            </div>
            <div class="inputBox">
            <input type="email" name="email" required placeholder="Enter email @xyz.com">
                <input type="text" name="subject"required maxlength="200"  placeholder="subject">
                <input type="text" name="realesateid" required maxlength="4" placeholder="Please Enter only Number same as RealEstate ID <?php  echo $Serial_NO['realesateid'] ?>">
                <input type="text" name="City" required placeholder="City">
                <input type="text" name="State" required  placeholder="State">
                <input type="text" name="Pincode" required maxlength="6" placeholder="Pincode">
            </div>
         <textarea name="message" rows = "5" cols = "40" >  </textarea> 
            <input type="submit" name="submit" value="send message" class="btn">
            
        </form>
    
       </div>
    
    </section>

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