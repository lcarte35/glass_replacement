<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
$servername = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wiservglass";
 
 $conn = mysqli_connect($servername, $dbuser, $dbpass,$db);
 
 $sql = "SELECT * FROM purch_orders INNER JOIN customers on purch_orders.cust_id=customers.cust_id;";
 $result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result);
	  
	  
		echo '<table class="centerText" style="background-color:white; color:black;"> 
			  <tr> 
				  <th>PO #</th> 
				  <th>Order Date</th> 
				  <th>First Name</th> 
				  <th>Last Name</th> 
			  </tr>';

      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field1name = $row["po_number"];
		    $field2name = $row["order_date"];
		    $field3name = $row["cust_first"];
		    $field4name = $row["cust_last"];
			
		    echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
              </tr>';
         }
		 echo "</table>"; 
		
      }


?>
</body>
</html>