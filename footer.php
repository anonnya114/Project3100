<!DOCTYPE HTML>


<html>
<head>
<!-- Bootstrap CSS -->
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<body>





<div class="jumbotron " style="margin-bottom:0;margin-top:30px;">
  <div class="box">
	<div class="container">
	<div class="row">
	<div class="col-md-4">
	
	<p class="helpline"><strong>LOG IN</strong></p>
           
<?php
 if(isset($_SESSION['userId'])){
	 echo'<div class="wrapper-main" style="position:absolute;top:25%;">
	 <form action="includes/logout.inc.php" method="post">
<button type="submit" class="btn btn-primary" name="logout-submit">Logout</button>
</form>
<div >
  <a class="menulinks" href="profile.php">
<button type="submit" class="btn btn-primary" name="profile">Profile</button></a>
  <div class="dropdown-content">
    
    
  </div>
</div>
</div>
';

 }
 else{
	 echo' <div class="wrapper-main" style="position:absolute;top:20%;">
<form action="includes/login.inc.php" method="post">
<label for="email" style="float:left;">Email:</label>
<input type="text" class="form-control" name="Email" placeholder="E-mail">
<label for="pwd"style="float:left;">Password: </label>
<input type="password" class="form-control" name="pass" placeholder="Password"><br>
<button type="submit" class="btn btn-primary" name="login-submit">LogIn</button>
</div>';


$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"error=emptyfields")==true){
	echo "<p class='error'style='color:red;margin-top:300px;'>you did not fill all fields!</p>";
}

if(strpos($fullurl,"error=wrongpassword")==true){
	echo "<p class='error'style='color:red;margin-top:300px;'>Wrong Password !</p>";
}
if(strpos($fullurl,"error=nouser")==true){
	echo "<p class='error'style='color:red;margin-top:300px;'>No user email found!</p>";
}

if(strpos($fullurl,"error=emailtaken")==true){
	echo "<p class='error'style='color:red;margin-top:300px;'>Email already taken.Enter another email !</p>";
}



 
 }
 ?>
 



	           
        
          </div>
		  
		  
		  
	<div class="col-md-4">
            
               <p class="helpline"><strong>MENU</strong></p>
			   
              <ul class="list-unstyled  mr-l-5 pr-l-3 mr-4">
                <li><a href="product.php" class="py-2 d-block">Shop</a></li>
                <li><a href="about.php" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="contuctus.php" class="py-2 d-block">Contact Us</a></li>
              </ul>
			
            
          </div>
		  
		  
	
	
	<div class="col-md-4">
	<p class="helpline"><strong>Have a question?</strong></p>
	<p class="para">House: 44, Road: 16 (27 Old), Dhanmondi<br>Dhaka - 1209, Bangladesh<br>09678666111<br>
 info@meenaclick.com</p>
	</div>
	</div>	
	</div>
	</div>
</div>


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
   (function($){
	   "use strict";
	   $('.next').click(function(){ $('.carousel').carousel('next');return false; });
	   $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
   })	
   (jQuery);
</script>




</body>
</html>