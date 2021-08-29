<?php 

    $Id =  $_POST['order_id'];
    $CName =  $_POST['Customer_name'];
	$PName = $_POST['Product_name'];
	$Date = $_POST['Order_date'];
	
	
	require_once('../db_config.php');

	$sql = "Insert into order_list VALUES(NULL,'$CName', '$PName','$Date')";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during insertion!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully added order info. <br>";
	}

	$conn->close();

	echo "<a href='../home.php'>Back</a>"
	 

?>