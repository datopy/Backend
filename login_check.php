<?php
	if (isset($_POST["product"],$_POST["description"])) {
		require_once("db.php");
		$product=mysqli_real_escape_string($conn,$_POST["product"]);
		$description=mysqli_real_escape_string($conn,$_POST["description"]);
		$sql="SELECT * FROM `products` WHERE `products`='$product' AND `description`='$description'";
		$result=$conn->query($sql);
		if ($result->num_rows>0) {
			echo "OK";
		}
		else{
			echo "Can't add";
		}
	}

 ?>