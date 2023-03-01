<?php
session_start();
$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$name=$_POST['un'];
if($name==" "){
  echo "<script>alert('ERR: INVALID SELECTION...');
  location.href='remuser.php'</script>";
}
else{
  $i="delete from user_form where username='$name'";
  if(mysqli_query($conn,$i))
  {
  echo "<script>alert('SUCCESSFULLY REMOVED DONOR');
  location.href='remuser.php'</script>";
  }
  else
  {
  echo "ERR : UNSUCCESSFUL DELETION".mysqli_error($conn);
  echo "<script>location.href='respg.html'</script>";
  }
}
?>