 <?php 
$conn=mysqli_connect("localhost","root","","fms");
extract($_POST);
$type=$_POST['ftype'];
$quant=$_POST['fq'];
$addr=$_POST['address'];
$cont=$_POST['pn'];
$locate=$_POST['loc'];
$name_ngo=$_POST['name'];

$query="insert into food_don_req(ngoname ,ngolocation,foodtype,quantity,address,contactnum,req_dt,status) values ('$name_ngo','$locate','$type',$quant,'$addr',$cont, NOW(),'NO')";
if(mysqli_query($conn, $query))
{
  echo "<script>alert('Thank you for your request. You will be receiving a call from the ngo within half an hour!')
  location.href='feedback.html'</script>";

	}
else
echo "<script>alert('Sorry for the inconvenience.... Please try again ')
	location.href='food_det.php'</script>";

 ?>

