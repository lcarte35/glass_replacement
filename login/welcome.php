<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
<link href="../css/design.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>



<h2 class="centerText">Order Home</h2>
<div class="spacer20px"></div>
<div class="dividerLine"></div>

	<div class="centerText">Select Glass Shape</div>
		<div class="centerText">
		<div class="spacer20px"></div>
		
		<?php echo '<a href="newOrder.php">';echo '<img src="images/rect.jpg" height="150px" width="250px" alt="rectangle" /></a>';
			  
		?>
		<?php echo '<a href="newOrder.php">';echo '<img src="images/parallelogram.jpg" height="150px" width="250px" alt="parallelogram" /></a>';
		?>
		<?php
		echo '<a href="newOrder.php">';echo '<img src="images/parallelOOS.jpg" height="150px" width="250px" alt="OOS parallelogram"></a>';
		?>
		</div>
		
		<div class="centerText">
		<a href="http://studentweb.kennesaw.edu/~lcarte35/3260/capstoneProj/newOrder.html"><img src="images/trapezoid.jpg" height="250px" width="220px" alt="trapezoid"></a>
		
		<a href="http://studentweb.kennesaw.edu/~lcarte35/3260/capstoneProj/newOrder.html"><img src="images/trapOOS.jpg" alt="OOS trapezoid" height="250px" width="220px"></a>
		<div class="centerText"></div>
		<div class="spacer20px"></div>
		
		
		
		
		<div class="spacer20px"></div>
	
		<div class="dividerLine"></div>
		<div class="centerText"><h2>Existing Orders</h2></div>
			
<div>
<?php
		include 'existingOrders.php'
	?>
</div>
<footer></footer>

    <a href="logout.php">Logout</a>
	</div>
</body>
</html>