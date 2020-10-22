

<?php include 'header.php';

 ?>
 <br><br><br>

<?php

		$id=$_GET["id"];

		$con = mysqli_connect('localhost','root');
		mysqli_select_db($con,'departmentalstore');

		$query ="SELECT * FROM `products` where id=$id ";

		$res= mysqli_query($con,$query);

		$row= mysqli_fetch_array($res);

		$name= $row['name'];
		$catagory= $row['catagory'];
		$price = $row['price'];
		$image = $row['image'];

		?>

<div>
    <h4 class="heading" align="center">Product Details</h4><br><br>
</div>
        
        
<div class="container">
    
<div class="row col-md-12">
    
<!---Image --> 
    <?php 
       echo "<div class='column col-md-8 col-sm-12'>";
           
        echo "<img src='$image'>
        </div>"
?>  

<div class="column col-md-4">
<?php
            echo "<div class='row col-md-12' >
                <h5 class='itemname'>$name</h5>
             </div>";
            echo "<div class='row col-md-12' >
                <h5>Catagory: $catagory</h5>
             </div>";
            echo "<div class='row col-md-12' >
                 <h5>Price : $price $</h5>
             </div>";
?>
</div>
</div> 
 <div class="infoot">
<?php include 'footer.php';?>
</div>
   