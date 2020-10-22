<?php

if(isset($_POST['cpass-submit'])){
	require 'dbh.inc.php';
	

	$password=$_POST['pass'];
	$Repassword=$_POST['pass-repeat'];
	$UserId=$_SESSION['userId'];
	
	if(empty($password)||empty($Repassword)){
		header("Location:../profile.php?error=emptyfields");
		exit();
	}
	
	
	
	elseif($password!==$Repassword){
		header("Location:../profile.php?error=passwordcheck");
		exit();
	}
	
	
	
	
	else{
		$sql="UPDATE users
SET Upassword = $password
WHERE UserId=$UserId;";
$result = $conn->query($sql);
		
				
		}
		
		
		mysqli_stmt_close($stmt);
		mysql_close($conn);
	}
	else{
		header("LOcation:../profile.php");
		exit();
	}
	
