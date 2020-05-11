<?php 
session_start();	
include ('connection/db.php');

$login= $_SESSION['email'];

$job_title=$_POST['job_title'];
$Description=$_POST['Description'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];

$query=mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,country,state,city) values ('$login','$job_title', '$Description','$country','$state','$city')");
if($query)
{
	echo "data added successfully";
}
else
{
	echo "Some error occured please try again";
}

 ?>