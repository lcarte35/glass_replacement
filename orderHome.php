<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>orderHome</title>
<link href="css/design.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php echo "<div id='headerText'>Welcome " . $_SESSION['username'] . "</div>"; ?>
<div class="centerText">
<img src="images/wiseRVlogo.svg">
</div>


<div>
<h2 class="centerText">Create New Order</h2>
<div class="spacer10px"></div>
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
<footer>
<div class="centerText">

    <a href="logout.php">Logout</a>
	</div>
</footer>




</body>
</html>