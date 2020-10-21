<?php
	require_once("db.php");
	if (isset($_POST["product"],$_POST["description"])) {
		$product=mysqli_real_escape_string($conn,$_POST["product"]);
		$description=mysqli_real_escape_string($conn,$_POST["description"]);
		$sql="INSERT INTO `products`(`products`, `description`) 
				VALUES ('$product','$description')";
		if($conn->query($sql)===TRUE){
			echo "Success";
		}
		else{
			echo "Error:".$conn->error;
		}
	}


?>