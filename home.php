<html>
    <head>
        <meta charset="UTF-8">
       
        <title>Store Management System </title>
    </head>
    <style> 
      </style>
    <body>
        
			
			
	<?php 
	     require_once('db_config.php');
	 ?>
</head>
<body>
	
		
	
	<?php
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_errno) {
	    			printf("Connect failed: %s\n", $conn->connect_error);
	    		exit();
			}


			$query = "SELECT * FROM order_list order by order_id asc";
			if ($result = $conn->query($query))
			
			?>
	<div class="ui grid">

		<div class="ui four wide column">
			<div style=" padding: 20px;">






				<h1>Store Management System</h1>
			</div>
			<div style="padding: 20px">
				<a href="addfrom_order.html"><button style="color: pink;background-color:green;"class="ui green button">Add order</button></a> 
				<div class="field">
      <br>

      	
      </div>
       
				
		</div>
					
				</div>
				
					
				<div class="ui twelve wide column">
					<div class="ui text container"  style="padding-top: 50px"> 
						
					<table class="ui inverted green table">
						<thead>
			<tr>

				<th>list</th>
				<th>Customer name</th>
				<th>Product name</th>
				<th>Order date</th>
				<th>Option</th>
				<th>Option</th>
				
			</tr> 

		</thead>
		
		<tbody>
			<tr>
				<?php
			if ($result = $conn->query($query)) {
				$ser =1;
				while ($row = $result->fetch_assoc()){
					printf("<tr>");
					printf("<td>%d</td> <td>%s</td> <td>%s</td> <td>%s</td>  <td><a href='db/delete.php?id=%s'>Delete</a></td> <td><a href='editfrom_order.php?id=%s'>Edit</a> </td>", $ser,$row["Customer_name"], $row["Product_name"],$row["Order_date"], $row["order_id"] ,$row["order_id"]);

					printf("</tr>");
					$ser++;
				}
			}

			?>
			</tr>


		</tbody>

	</table>
	
</body>
</html>