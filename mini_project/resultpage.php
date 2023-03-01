<?php

@include 'config3.php';

if(isset($_POST['donate'])){

  $ngoloc = mysqli_real_escape_string($conn,$_POST['ngolocation']);
  $ngoname = mysqli_real_escape_string($conn,$_POST['ngoname']);
  $fname = mysqli_real_escape_string($conn,$_POST['foodname']);
  $qty = mysqli_real_escape_string($conn,$_POST['quantity']);
  $add = mysqli_real_escape_string($conn,$_POST['address']);
  $cno = mysqli_real_escape_string($conn,$_POST['contactnum']);
  $insert = "INSERT INTO donate_form(ngolocation,ngoname,foodname,quantity,address,contactnum) VALUES('$ngoloc','$ngoname','$fname','$qty','$add','$cno')";
  $res=mysqli_query($conn,$insert);

  header('location:foodlist.php');

};

?>

