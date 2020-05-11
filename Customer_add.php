<?php 

include ('connection/db.php');

$email=$_POST['email'];
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$admin_type="";
if(strcmp($_POST['admin_type'],"1")==0)
{
	$admin_type="Super Admin";
}
else
{
	$admin_type="Cutomer Admin";
}
$query=mysqli_query($conn,"insert into admin_login(admin_email,admin_pass,admin_username,first_name,last_name,admin_type) values ('$email','$password','$username','$firstname','$lastname','$admin_type')");
if($query)
{
	echo "data added successfully";
}
else
{
	echo "Some error occured please try again";
}

 ?>