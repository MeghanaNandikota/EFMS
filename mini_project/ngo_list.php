<?php
$con = mysqli_connect("localhost","root","","fms");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
if(!empty($_POST["ngol"])) 
{
$query =mysqli_query($con,"SELECT * FROM ngo_form WHERE location = '" . $_POST["ngol"] . "'");
?>
<option value="">Select NGO</option>
<?php
while($row=mysqli_fetch_array($query))  
{
?>
<option value="<?php echo $row["ngoname"]; ?>"><?php echo $row["ngoname"]; ?></option>
<?php
}
}
?>
