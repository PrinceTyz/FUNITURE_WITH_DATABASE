<?php

@include 'config.php';

session_start();
session_regenerate_id(true);
if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="header">

   <div class="content">
      <h3>FUNITURE <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>Admin Dashboard</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="login_form.php" class="btn">logout</a>
   </div>
   

   <div class="container mt-5">
   <div class="row">
   <div class=col-lg-12>
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Order_Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Phone_No</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
    </tr>
  </thead>
  <tbody>
   <?php
  $query= "SELECT * FROM `order_manager`";
  $user_result=mysqli_query($conn,$query);
  while($user_fetch=mysqli_fetch_assoc($user_result))
  {
    echo"
    <tr>
    <td>$user_fetch[Order_id]</td>
    <td>$user_fetch[Full_Name]</td>
    <td>$user_fetch[Phone_No]</td>
    <td>$user_fetch[Address]</td>
    <td>$user_fetch[Pay_Mode]</td>
    <table class='table text-center table-dark'>
    <thead>
    <tr>
    <th scope='col'>Item_Name</th>
    <th scope='col'>Price</th>
    <th scope='col'>Quantity</th>
    </thead>
    <tbody>
     ";
     $order_query="SELECT * FROM 'user_orders' WHERE 'Order_Id'='$user_fetch[Order_id]'";
     $order_result=mysqli_query($conn,$order_query);
     while($order_result=mysqli_fetch_assoc($order_result))
     {
      echo"
      <tr>
      <td>$order_fetch[Item_name]</td>
      <td>$order_fetch[Price]</td>
      <td>$order_fetch[Quantity]</td>
      </tr>
      ";
     }
   echo"
   </tbody>
   </table>
   </td>
   </tr>
  ";}
   ?>

   </div>
</div>
   </div>
</body>
</html>