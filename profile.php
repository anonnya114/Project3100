<?php
	include ('connect.php');
	include('header.php'); ?>
	
	






  <div class="site-wrap">


 

    <div class="bg-light py-3">
      <div class="container">
        
		<div class="col-md-8" style="margin:0 auto; float:none;">
		<br><br><br>
		<h2 class="h3 text-black">My Account<br></br></h2>
		  
		 
<?php
$UserId=$_SESSION['userId'];
//$conn = mysqli_connect("localhost", "root", "", "registration");
// Check connection
//if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
//}
$sql = "SELECT * FROM users WHERE UserId='$UserId'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 //output data of each row

$row = $result->fetch_assoc();

echo "<h5>User Name :  </h5>".$row["UserName"];

echo "<br></br><h5>User Email :  </h5>".$row["Uemail"];
echo "<br></br>";
//echo "<br></br><h5>Change Password :  </h5>";
echo "<br></br>";
 //echo' <div class="wrapper-main" style=";">
//<form action="includes/changepass.inc.php" method="post">
//<label for="pwd" style="float:left;">New Password:</label>
//<input type="password" class="form-control" name="pass" placeholder="E-mail">
//<label for="pwd"style="float:left;">Password: </label>
//<input type="password" class="form-control" name="pass-repeat" placeholder="Password"><br>
//<button type="submit" class="btn btn-primary" name="cpass-submit">Change</button>
//</div>';

//echo "<br></br><h5>User Email :  </h5>".$row["phonenumber"];

//echo "<br></br><h5>User Email :  </h5>".$row["address"];

} 



else
	 echo "There are user date available"; 
$conn->close();
?>

	

		  
		   </div>
        </div>
      </div>
    </div>
	
	
	
	



  

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

    <?php include 'footer.php';?>
