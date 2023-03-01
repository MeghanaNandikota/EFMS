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

if($pass==$passconf)
{
  $select= "SELECT * FROM user_form WHERE username='$name' ";

  $result=mysqli_query($conn,$select);

  if(mysqli_num_rows($result) > 0){
    echo "<script> alert('ERR: Username already exits ');
    location.href='donorsignup.html' </script>";
  }
  else{

  $i="insert into user_form values ('$fname',$ph_no,'$mail','$name','$pass')";
  if(mysqli_query($conn,$i))
  {
  echo "<script>alert('SUCCESSFULLY SIGNED UP.... LOG IN USING YOUR USERNAME AND PASSWORD TO CONTINUE');
  location.href='donorlogin.html'</script>";
  }
  else
  {
  echo "<script>alert('ERR : COULDN'T SIGN UP... TRY AGAIN');
  location.href='donorsignup.html'</script>";
  }
  }
}
else
{
echo "<script>alert('ERR : PASSWORD MISMATCH.... RETRY!');
location.href='donorsignup.html'</script>";
}

?>

