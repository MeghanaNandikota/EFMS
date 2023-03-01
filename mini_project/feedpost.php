<?php
$conn = mysqli_connect("localhost", "root","", "fms");
extract($_POST);

$emid=$_POST['email'];
$q_score = $_POST['experience'];
$feedback_txt = $_POST['comments'];

if($emid!=NULL && $q_score!=NULL && $feedback_txt!=NULL)
{
$query ="insert into feedback_form(mail_id,qual,feedback) values('$emid','$q_score', '$feedback_txt')";
if(mysqli_query($conn, $query))
{
  echo "<script>alert('Thank you for your feedback. We\'ll appreciate!')</script>";
	}
else
die("Something terrible happened. Please try again. ");
}
else
{
	echo "<script>alert('Fill all the fields')
	location.href='feedback.html'</script>";
}
?>


