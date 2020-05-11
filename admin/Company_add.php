<?php 

include ('connection/db.php');

$Company=$_POST['Company'];
$Description=$_POST['Description'];


$query=mysqli_query($conn,"insert into company (company,des) values ('$Company','$Description')");
if($query)
{
	echo "data added successfully";
}
else
{
	echo "Some error occured please try again";
}

 ?>