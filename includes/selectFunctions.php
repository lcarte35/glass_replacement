<?php
$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "wiservglass";
 
$conn = mysqli_connect($servername, $dbuser, $dbpass,$db);
if (!$conn) {
 	die("Connection failed: " . mysqli_connect_error());
}


// Selecting coach make from database
$sql = "SELECT DISTINCT coach_make FROM coach ORDER BY coach_make ASC;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result);
		echo '<div><select name="coach_make" class="select"> 
			  <option>Select Coach Make</option>';
      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field1name = $row["coach_make"];
		    echo '<option value="'. $_POST['submit'].'">'.$field1name.'</option>';
         }
		 echo "</select></div>"; 
      };

// Selecting coach model from database
$sql = "SELECT DISTINCT coach_model FROM coach ORDER BY coach_model ASC;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result);
		echo '<div><select name="coach_model" class="select"> 
			  <option>Select Coach Model</option>';
      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field2name = $row["coach_model"];
		    echo '<option>'.$field2name.'</option>';
         }
		 echo "</select></div>";	
      };

// Selecting coach type from database
$sql = "SELECT DISTINCT coach_type FROM coach ORDER BY coach_type ASC;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result); 
		echo '<div><select name="coach_type" class="select"> 
			  <option>Select Coach Type</option>';
      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field6name = $row["coach_type"];
		    echo '<option>'.$field6name.'</option>';
         }
		 echo "</select></div>"; 
      };

// Inserting a select option for coach year
echo '<div><select name="coach_year" class="select">
		<opton>Select Year</option>';
			for($i = 1950; $i < date("Y"); $i++) {
				echo "<option>$i</option>";
			}
		echo "</select></div>";

// Selecting glass thickness from database 			
$sql = "SELECT * FROM glass_thickness ORDER BY glass_thickness ASC;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result);
		echo '<div><select name="thickness" class="select"> 
			  <option>Select Glass Thickness</option>';
      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field3name = $row["glass_thickness"];
		    echo '<option>'.$field3name.'</option>';
         }
		 echo "</select></div>"; 
      };

// Selecting glass color from database
$sql = "SELECT * FROM glass_color ORDER BY glass_color ASC;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
 $resultCheck = mysqli_num_rows($result);
		echo '<div><select name="color" class="select"> 
			  <option>Select Glass Color</option>';
      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field4name = $row["glass_color"];
		    echo '<option>'.$field4name.'</option>';
         }
		 echo "</select></div>"; 
      };

// Selecting glass type from database
$sql = "SELECT * FROM glass_type;";
$result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
$resultCheck = mysqli_num_rows($result);
		echo '<div><select name="type" class="select"> 
			  <option>Select Glass Type</option>';
      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_array($result)) {
            $field5name = $row["glass_type"];			
		    echo '<option>'.$field5name.'</option>';
         }
		 echo "</select></div>"; 
      };

