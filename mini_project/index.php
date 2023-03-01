<?php
$con = mysqli_connect("localhost","root","","fms");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>SELECT NGO</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		  <script>
function getloc(val) {
	$.ajax({
	type: "POST",
	url: "ngo_list.php",
	data:'ngol='+val, //ngol will be used to identify the ngo value 
	success: function(data){
		$("#ngo-list").html(data);
	}
	});
}
</script>	
	</head>
	<body>


  <!--left-->
      
     
 <!--/left-->
  
  <!--center-->
  
		<form name="insert" action="ngo_sel.php" method="post">
			  <p> 
                                     <h5> FOOD TYPE </h5> 
                                  <select name="ftype" id="ftype" style="width:100%; box-sizing:border-box;" >
                                        <option selected="" disabled="">Select Food Type</option>
                                        <option value="Veg">Veg</option>
                                        <option value="Non-Veg">Non-Veg</option>
                                        <option value="Both">Both</option>
                                    </select>
                                </p>
                          <p> 
                                     <h5> Food Quantity </h5> 
                                  <input id="fq" name="fq" required="required" type="text" style="width:100%; box-sizing:border-box;" placeholder="Enter approximate count with respect to people"/> 
                                </p>

                          <p> 
                                     <h5>Address </h5> 
                                  <textarea name="address" id="address" style="width:100%; box-sizing: border-box;" rows="5" placeholder="Enter address from where food has to be collected " ></textarea>
                                </p>

                          <p> 
                                     <h5> Contact Details </h5> 
                                  <input id="pn" name="pn" required="required" type="text" style="width:100%; box-sizing:border-box;" placeholder="Enter your mobile number"/> 
                                </p>

  
    <h2>Location:</h2>
    <select onChange="getloc(this.value);"  name="loc" id="loc" class="form-control" >
                    <option value="">Select</option>
                   								<?php $query =mysqli_query($con,"SELECT * FROM ngo_locations");
while($row=mysqli_fetch_array($query))
{ ?>
<option value="<?php echo $row['location'];?>"><?php echo $row['location'];?></option>
<?php
}
?>
                    </select>
  
    <h2>NGO Name:</h2>
    <select name="name" id="ngo-list" class="form-control">
<option value="">Select</option>
</select>



<button class="btn btn-primary px-5 " name="donate">SUBMIT</button>

     </form>
 
      <!--/center-->

  <!--right-->
<!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>