<?php
session_start();
$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$fname=$_POST['un'];
$ph_no=$_POST['pno'];
$mail=$_POST['mid'];
$name=$_POST['uid'];
$pass=$_POST['pas'];
$passconf=$_POST['pas1'];
$loc=$_POST['loc'];
if($pass==$passconf)
{
  $s = "SELECT * FROM ngo_form WHERE location='$loc' ";
  $res=mysqli_query($conn,$s);
  if(mysqli_num_rows($res) == 0){
  $ins="insert into ngo_locations values ('$loc')";    
  mysqli_query($conn,$ins);
  }

  if($loc==0)
  {
    "<script> alert('ERR: NGO Location not selected ');
    location.href='Rsignup.html' </script>";
  }

  $select= "SELECT * FROM ngo_form WHERE ngoid='$name' ";

  $result=mysqli_query($conn,$select);

  if(mysqli_num_rows($result) > 0){
    echo "<script> alert('ERR: NGO Username already exits ');
    location.href='Rsignup.html' </script>";
  }
  else{

  $i="insert into ngo_form values ('$fname',$ph_no,'$mail','$name','$pass','$loc')";
  if(mysqli_query($conn,$i))
  {
  echo "$ph_no<script>alert('SUCCESSFULLY SIGNED UP.... LOG IN USING YOUR USERNAME AND PASSWORD TO CONTINUE');
  location.href='Rlogin.html'</script>";
  }
  else
  {
  echo "<script>alert('ERR : COULDN'T SIGN UP... TRY AGAIN');
  location.href='Rsignup.html'</script>";
  }
  }
}
else
{
echo "<script>alert('ERR : PASSWORD MISMATCH.... RETRY!');
location.href='donorsignup.html'</script>";
}

?>

