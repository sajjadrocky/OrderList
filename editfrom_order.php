<!doctype html>

<html lang="en">

<?php

     require_once('db_config.php');
     $id = $_GET['id'];
     $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_errno) {
            printf("Connect failed: %s\n", $conn->connect_error);
          exit();
      }


      $query = "SELECT * FROM order_list where  order_id='$id'";



           $result = $conn->query($query);
           $row = $result->fetch_assoc();



 ?>
        




<head>
  <meta charset="utf-8">
  <title>Edit order Information</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<body>

<div style="background-color: #FE9A76; padding: 2%;">
	<h1>Insert Updating order  Information</h1>
	<h4>The Updating  data will be inserted into the main database</h4>
</div>
<br>
	<div class="ui text container">
    	<form class="ui form" method="post" action="db/update.php">

         
         <div class="field">
        <label>Id</label>
        <input type="text" name="order_id" value="<?php echo $row["order_id"] ?>" placeholder="Order Id">
      </div>

       <div class="field" style="display: none;">
        <label>CName</label>
        <input type="text" name="Customer_name" value="<?php echo $row["Customer_name"] ?>"placeholder="Customer Name">
      </div>
      <div class="field">
        <label>PName</label>
        <input type="text" name="Product_name" value="<?php echo $row["Product_name"] ?>" placeholder="Product Name">
      </div>
      <div class="field">
        <label>Date</label>
        <input type="text" name="Order_date"value="<?php echo $row["Order_date"] ?>" placeholder="Order Date">
      </div>
      
        

      <div style="padding: 5px">
        <button class="ui green button">Save</button>        
     </div>
    </form>
</div>
  
</body>

</html