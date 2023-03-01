<?php
session_start();
$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$name=$_POST['uid'];
$pass=$_POST['pas'];
$i="select * from ngo_form where ngoid='$name' and pswd='$pass'";
 $result = mysqli_query($conn,$i);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
if($count==1)
{
$_SESSION["usid"]=$row['uid'];
echo "<script>location.href='ngo_view_req.php'</script>";
}
else
{
echo "<script> alert('ERR: LOGIN FAILED!');
location.href='Rlogin.html'</script>";
}

?>