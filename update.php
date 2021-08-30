<?php 
	
	
	 $Id =  $_POST['order_id'];
    $CName =  $_POST['Customer_name'];
	$PName = $_POST['Product_name'];
	$Date = $_POST['Order_date'];
		
	// echo $id;
	require_once('../db_config.php');

	$sql = "Update order_list SET Customer_name='$CName',Product_name='$PName',Order_date='$Date' WHERE order_id='$Id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);
	$conn->close();

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated order info of $Name. <br>";
		header("Location: ../home.php"); 
	}

	


?>