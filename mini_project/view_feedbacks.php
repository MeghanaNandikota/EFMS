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
    <title>USER FEEDBACKS</title>
  </head>
  <body>
<form>
  
</form>
 <?php
$conn = mysqli_connect("localhost","root","","fms");
  $query="SElECT * FROM feedback_form";
$result=mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total!=0){
echo '<h1 class="text-center mx-auto m-5">DONOR FEEDBACKS ON THE SITE</h1>
<table  cellpadding="5" class="text-center mx-auto m-5">
         <tr>
         <th>S.No</th>
         <th>MAIL ID</th>
         <th>OPINION</th>
         <th>FEEDBACK STATEMENT</th>
         
         </tr>
         </table>';
         $count=1;
while($row= mysqli_fetch_array($result))
{
  
   echo ' <table cellpadding="5"  class="text-center mx-auto m-5">
            <tr>
            <td>'.$count++.'.</td>
            <td>'.$row['mail_id'].'</td>
            <td>'.$row['qual'].'</td>
            <td>'.$row['feedback'].'</td>
            </tr>
          </table> ';
        
  
};
}
else
{ 
  echo '<script> alert("NO FEEDBACKS RECEIVED YET!!"); </script>' ;
}
?>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>