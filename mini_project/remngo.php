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
    
    <title>REMOVING A NGO</title>
<!--  #8AAAE5 bluish color -->

  </head>
  <script type="text/javascript">
    
       function submitForm() {
  const temp=confirm('Do you want to Remove the Donor?');
  return temp;
}
    
  </script>
  <body style="background-color: wheat">
    
    <section >
        <div class="container mt-5 pt-5 text-dark">
            <h1 class="text-center"><i>ADMIN OPERATIONS</i></h1>
            <br>
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card border-0 shadow" style="background: transparent;">
                      <div class="card-body" >
                        <br>
                        <center><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg></center>
                        <form  action="confremngo.php" method="post" autocomplete="on" onsubmit="return submitForm(this);"> 

                                <h3 class="text-center py-3" >REMOVE NGO</h3>
                                <p> 
                                     <h5>Choose Username </h5> 
                                 <select id="nid" class="form-control" name="nid">
                                  <option value=" ">CHOOSE ▼</option>
                                   <?php $query =mysqli_query($con,"SELECT * FROM ngo_form");
                                    while($row=mysqli_fetch_array($query))
                                    { ?>
                                    <option value="<?php echo $row['ngoid'];?>"><?php echo $row['ngoid'];?></option>
                                    <?php
                                    }
                                    ?>
                                 </select>
                               </p>
                                
                                <br> 

                            
                     <center>           <p > 
                                   <button type="submit" style="background: #55c2da" class="btn btn-lg btn-block" > REMOVE </button>
                                   <!--<input type="submit" style="background: skyblue" size="35" value="Login" /> -->
    </p> </center>
  </form>
                      </div>
                    </div>
                </div>
            </div>
            <br><br>
            <center><a href="index1.html" class="text-dark h5"><i class="bi bi-house-door"></i> Home</a></center>
        </div>
    </section>
    
    
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html> 