<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      table{
        table-layout:fixed;
        width:100%;
      }
        table,th,td{
            border :1px solid black;
            border-collapse: collapse;
        }
        </style>
    <title>FOOD DONATION REQUESTS</title>
  </head>
  <body>
<form>
  
</form>
 <?php
$conn = mysqli_connect("localhost","root","","fms");
  $query="SElECT * FROM food_don_req";
$result=mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total!=0){
echo '<h1 class="text-center mx-auto m-5">FOOD DONATION REQUESTS</h1>
<table  cellpadding="5" class="text-center mx-auto m-5">
         <tr>
         <th>S.No</th>
         <th>NGO Location</th>
         <th>NGO Name</th>
         <th>Food Type</th>
         <th>Food Quantity</th>
         <th>Address</th>
         <th>Contact number</th>
         <th>Date and Time</th>
         
         </tr>
         </table>';
         $count=1;
while($row= mysqli_fetch_array($result))
{
  if($row['status']=='NO'){
   echo ' <table cellpadding="5"  class="text-center mx-auto m-5">
            <tr>
            <td>'.$count++.'.</td>
            <td>'.$row['ngolocation'].'</td>
            <td>'.$row['ngoname'].'</td>
            <td>'.$row['foodtype'].'</td>
            <td>'.$row['quantity'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['contactnum'].'</td>
            <td>'.$row['req_dt'].'</td>
            </tr>
          </table> ';
        }
  
};
}
else
{
  echo '<script> alert("SORRY...!! No Food Donation Requests yet!!");
  Location.href="respg.html" </script>' ;
}
?>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>