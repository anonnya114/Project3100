 <div class="inhead">
 <?php include 'header.php';
 ?>
 </div>
<main>




<div class="space" >
<h1=class> .<br>. </h1>
</div>



<div>
	<div class="col-md-4">
	<div class="container">
  <p class="account"><strong>CREATE ACCOUNT</strong></p>
<form action="includes/signup.inc.php" method="post">
    <div class="form-group">
      <label for="email" style="float:left;">UserName:</label>
      <input type="text" class="form-control" name="userId" placeholder="UserName">
    </div>
	<div class="form-group">
      <label for="pwd"style="float:left;">E-mail: </label>
      <input type="text" class="form-control" name="email" placeholder="E-mail">
    </div>
    <div class="form-group">
      <label for="pwd"style="float:left;">Password: </label>
      <input type="password"  class="form-control" name="pass" placeholder="Password">
    </div>
	 <div class="form-group">
      <label for="pwd"style="float:left;">Repeat Password: </label>
	  <input type="password" class="form-control" name="pass-repeat" placeholder="Repeat Password">
      
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name="signup-submit">SignUp</button>
  </form>
  
  </div>
	</div>

<?php
$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullurl,"error=emptyfields")==true){
	echo "<p class='error'style='color:red;'>you did not fill all fields!</p>";
}

if(strpos($fullurl,"error=invalidemail")==true){
	echo "<p class='error'style='color:red;'>Invalid E-mail !</p>";
}
if(strpos($fullurl,"error=passwordcheck")==true){
	echo "<p class='error'style='color:red;'>Passwords did not match !</p>";
}

if(strpos($fullurl,"error=emailtaken")==true){
	echo "<p class='error'style='color:red;'>Email already taken.Enter another email !</p>";
}

?>
</div>
</main>


<?php
require "footer.php";
?>