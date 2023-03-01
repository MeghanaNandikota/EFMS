<?php

$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$name=$_POST['uid'];
$pass=$_POST['pas'];
$i="select * from admin_form where username='$name' and pswd='$pass'";
 $result = mysqli_query($conn,$i);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
if($count==1)
{

echo "<script>location.href='respg.html'</script>";
}
else
{
echo "<script> alert('ERR: LOGIN FAILED!') </script>";
echo "<script>location.href='loginsignup.html'</script>";
}
?>