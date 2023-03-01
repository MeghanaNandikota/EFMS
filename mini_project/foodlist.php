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
    <title>Hello, world!</title>
  </head>
  <body>

  <?php
 
@include 'config3.php';
  $query="SElECT * FROM donate_form";
$result=mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total!=0){
echo '<h1 class="text-center mx-auto m-5">Donated Food List</h1>
<table  cellpadding="5" class="text-center mx-auto m-5">
         <tr>
         <th>S.No</th>
         <th>NGO Location</th>
         <th>NGO Name</th>
         <th>Food Name</th>
         <th>Food Quantity</th>
         <th>Address</th>
         <th>Contact number</th>
         <th>Status</th>
         </tr>
         </table>';
while($row= mysqli_fetch_array($result))
{
   echo ' <table cellpadding="5"  class="text-center mx-auto m-5">
            <tr>
            <td>'.$row['id'].'.</td>
            <td>'.$row['ngolocation'].'</td>
            <td>'.$row['ngoname'].'</td>
            <td>'.$row['foodname'].'</td>
            <td>'.$row['quantity'].'</td>
            <td>'.$row['address'].'</td>
            <td>'.$row['contactnum'].'</td>
            <td ><a href="#" class="btn btn-primary">'.$row['status'].'</a></td>
            </tr>
          </table> ';
};
}
else
{
  echo '<script> alert("no food available"); </script>' ;
}
?>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>