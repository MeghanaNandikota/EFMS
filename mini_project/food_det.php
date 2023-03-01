<?php
$con = mysqli_connect("localhost","root","","fms");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--bootstrap icons stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <title>donate</title>
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
  <body style="background-color: wheat;">
  <section>
        <div class="container mt-5 pt-5 text-dark">
          <h1 class="text-center fw-bold">FOOD DETAILS</h1>
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow" style="background: transparent;">
                      <div class="card-body" >
                        <center><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg></center>
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

  
    <h5>Location:</h5>
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
  
    <h5>NGO Name:</h5>
    <select name="name" id="ngo-list" class="form-control">
<option value="">Select</option>
</select>

<br>

<button class="btn btn-primary px-5 " name="donate">SUBMIT</button>

     </form>
 
                      </div>
                    </div>
                </div>
            </div>
            <br>
            <center><a href="index1.php" class="text-dark h5 mt-5"><i class="bi bi-house-door"></i>  Home</a></center>
        </div>
    </section>
    
    
    <!--Bootstrap Bundle with Popper -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>