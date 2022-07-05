<?php

@include 'config.php';

if(isset($_POST['update_user_image']))

{
  $user_id =$_POST['id'];
  $realid =$_POST['realesateid'];
  $tittle = $_POST['tittle'];
  $area =$_POST['area'];
  $loca =$_POST['location'];
  $addr =$_POST['Address'];
  $purpos =$_POST['purpose'];
  $price =$_POST['sale_price'];
  $status =$_POST['status'];
  $shot_des =$_POST['shot_descr'];
  $des =$_POST['descr'];

 


  $query ="UPDATE user_data SET realesateid='$realid',tittle='$tittle',area='$area',location='$loca',Address='$addr',purpose='$purpos',sale_price='$price',status='$status',shot_descr='$shot_des',descr='$des'
  WHERE id='$user_id' ";

  $query_run =mysqli_query($conn,$query);
  if($query_run)
  {
    header('location:RealEstateList.php');
    exit(0);
  }



}
if(isset($_POST['upload_delete']))
  {
    $user_id =$_POST['upload_delete'];

    $query = "DELETE FROM user_data WHERE id='$user_id' ";
    $query_run  = mysqli_query($conn,$query);
    if($query_run)
  {
     echo"Data is deleted";
    header('location:RealEstateList.php');
    exit(0);
  }


  }

  if(isset($_POST['cancel_update']))
{
  $user_id =$_POST['cancel_update'];

  $query = "DELETE FROM user_form WHERE id='$user_id' ";
  $query_run  = mysqli_query($conn,$query);
  if($query_run)
{
   echo"cancel updating ";
  header('location:RealEstateList.php');
  exit(0);
}



}

?>
