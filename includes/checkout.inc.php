<?php
session_start(); 

if(isset($_POST['checkout-submit'])){
	
	require 'dbh.inc.php';
	
    if(isset($_SESSION['userId'])){
		
		
	header("Location:../checkout.php");
				exit();

 }
 else{
	header("Location:../havetologin.php");
				exit();
 }
	
}
else{
	header("Location:../product.php");
	exit();
}
?>