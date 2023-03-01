<?php
session_start();
$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$name=$_POST['uid'];
$pass=$_POST['pas'];
$passconf=$_POST['pas1'];
if($pass==$passconf)
{
	$i="insert into admin_form(username,pswd) values ('$name','$pass')";
	if(mysqli_query($conn,$i))
	{
	echo "<script>alert('SUCCESSFULLY ADDED NEW ADMIN');
	location.href='admlogin.html'</script>";
	}
	else
	{
	echo "ERR : UNSUCCESSFUL IN ADDING A NEW ADMIN".mysqli_error($conn);
	}
}
else
{
echo "<script>alert('ERR : PASSWORD MISMATCH');
location.href='newadm.html'</script>";
}

?>