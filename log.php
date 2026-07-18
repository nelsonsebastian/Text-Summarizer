<?php
session_start();
include('connection.php');

if (isset($_POST['login']))
{	
$username=$_POST['email']; 
$password=$_POST['password'];

	if($username=="admin@gmail.com" and $password=="admin@123")
	{	
		$_SESSION['user']="admin";
		header("location:useradmin.php");
		
	}
	else{
	$sel="SELECT * FROM reg WHERE email='$username' and password='$password'";
	$result = mysqli_query($con,$sel) or die(mysql_error());
	$rows = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	
	if($rows==1)
	{	
		$_SESSION['user']=$row['id'];
		$_SESSION['username']=$row['name'];
		//echo $row;
		header("location:menu.php");
		
	}
	else{
		
		
		echo '<script>alert("Wrong Email or Password!")
		
		window.location.href = "index.php";

		
		</script>'; 

		
	}
}
}
	
?>
 
 



