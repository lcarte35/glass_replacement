<!doctype html>
<html>

<body>
<?php
$servername = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "wiservglass";
 
 $conn = mysqli_connect($servername, $dbuser, $dbpass,$db);
 
 $sql = "SELECT * FROM users;";
   $result = mysqli_query($conn, $sql);
      // After running the query to get the data, we also want to know how many rows of results we are getting.
      $resultCheck = mysqli_num_rows($result);

      // Then we check if we got more than 0 results.
      if ($resultCheck > 0) {
        // If we do have results, we then assign all our data to a variable using a while loop, to turn the data into associative arrays.
        while ($row = mysqli_fetch_assoc($result)) {
          // Here I choose to output the username of all our users. We could have chosen ANY of the data from our users.
          echo $row['user_uid'] . "<br>";
          // If I wanted to output the full name as well, I could do the following.
          echo $row['user_first'] . " " . $row['user_last'];
        }
      }


?>
</body>
</html>