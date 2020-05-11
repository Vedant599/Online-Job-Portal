<?php 
	
	include('connection/db.php');
	$del =$del_GET['del'];

	$query=mysqli_query($conn,"delete from admin_login where id='$del'")
	if ($query){
		echo"<script>alert('Record has been successfully deleted !!!')</script>";
		header('location:create_company.php');
	}
	else{
		echo"<script>alert('Record has been successfully deleted !!!')</script>";
	}


?>