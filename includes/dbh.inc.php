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












 
 

 


