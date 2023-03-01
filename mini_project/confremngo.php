<?php
session_start();
$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$ngoid=$_POST['nid'];
echo $ngoid;
if($ngoid==" "){
  echo "<script>alert('ERR: INVALID SELECTION...');
  location.href='remngo.php'</script>";
}
else{
  $i="delete from ngo_form where ngoid='$ngoid'";
  if(mysqli_query($conn,$i))
  {
  echo "<script>alert('SUCCESSFULLY REMOVED DONOR');
  location.href='remngo.php'</script>";
  }
  else
  {
  echo "ERR : UNSUCCESSFUL DELETION".mysqli_error($conn);
  echo "<script>location.href='respg.html'</script>";
  }
}
?>