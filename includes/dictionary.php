<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "wiservglass";
 
$conn = mysqli_connect($servername, $dbuser, $dbpass,$db);
if (!$conn) {
 	die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT DISTINCT coach_make FROM coach ORDER BY coach_make ASC;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result);

	

      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field1name = $row["coach_make"];
		   
			
		    echo $field1name;
         }

?>
</body>
</html>