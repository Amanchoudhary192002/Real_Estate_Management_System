<?php

@include 'config.php';


// this path is cancel  from database
if(isset($_POST['cancel_update']))
{
  $user_id =$_POST['cancel_update'];

  $query = "DELETE FROM user_form WHERE id='$user_id' ";
  $query_run  = mysqli_query($conn,$query);
  if($query_run)
{
   echo"cancel updating ";
  header('location:user_list.php');
  exit(0);
}



}
// this if path delete userlist .php
if(isset($_POST['user_delete']))
  {
    $user_id =$_POST['user_delete'];

    $query = "DELETE FROM user_form WHERE id='$user_id' ";
    $query_run  = mysqli_query($conn,$query);
    if($query_run)
  {
     echo"Data is deleted";
    header('location:user_list.php');
    exit(0);
  }



  }
// this if path delete contactform.php 
  if(isset($_POST['conatct_delete']))
  {
    $user_id =$_POST['conatct_delete'];

    $query = "DELETE FROM contact WHERE id='$user_id' ";
    $query_run  = mysqli_query($conn,$query);
    if($query_run)
  {
     echo"Data is deleted";
    header('location:contactform.php');
    exit(0);
  }



  }

  // this if path delete contactform.php 
  if(isset($_POST['inqui_delete']))
  {
    $user_id =$_POST['inqui_delete'];

    $query = "DELETE FROM inquire WHERE id='$user_id' ";
    $query_run  = mysqli_query($conn,$query);
    if($query_run)
  {
     echo"Data is deleted";
    header('location:inqui.php');
    exit(0);
  }



  }  

//edit user data from database 

if(isset($_POST['update_user_forom']))

{
  $user_id =$_POST['id'];
  $name =$_POST['name'];
  $email =$_POST['email'];
  $gender =$_POST['gender'];
  $panid =$_POST['panid'];
  $moblieno =$_POST['moblieno'];
  $addss =$_POST['addss'];
 // $password =$_POST['password'];


  $query ="UPDATE user_form SET name='$name',email='$email',gender='$gender',panid='$panid',moblieno='$moblieno',addss='$addss' 
  WHERE id='$user_id' ";

  $query_run =mysqli_query($conn,$query);
  if($query_run)
  {
    header('location:user_list.php');
    exit(0);
  }



}

if(isset($_POST['inqui_update']))

{
  $user_id =$_POST['id'];
  $status =$_POST['status'];
  
 


  $query ="UPDATE inquire SET status='$status' 
  WHERE id='$user_id' ";

  $query_run =mysqli_query($conn,$query);
  if($query_run)
  {
    header('location:inqui.php');
    exit(0);
  }



}

?>
